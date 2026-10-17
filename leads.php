<?php
require_once __DIR__ . '/config.php';
$leads = [];
if (file_exists(LEADS_FILE)) {
    $leads = json_decode(file_get_contents(LEADS_FILE), true) ?: [];
}

// Calculate summary stats
$totalLeads = count($leads);
$weddingCount = 0;
$sangeetCount = 0;
$haldiCount = 0;
foreach ($leads as $l) {
    $t = strtolower($l['event_type'] ?? '');
    if (strpos($t, 'wedding') !== false) $weddingCount++;
    elseif (strpos($t, 'sangeet') !== false || strpos($t, 'cocktail') !== false) $sangeetCount++;
    elseif (strpos($t, 'haldi') !== false || strpos($t, 'mehendi') !== false) $haldiCount++;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIP Leads Portal | <?php echo SITE_NAME; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/jpeg" href="images/logo.jpg">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .lead-dashboard { padding: 35px 0 60px; background: #FAF8F5; min-height: 100vh; }
        .crm-stat-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; margin-bottom: 25px; }
        .crm-stat-card { background: #fff; padding: 18px 22px; border-radius: 14px; box-shadow: 0 4px 18px rgba(0,0,0,0.05); border: 1px solid #ECE7E2; }
        .crm-stat-card .val { font-size: 1.8rem; font-weight: 700; color: #1A1617; font-family: 'Playfair Display', serif; display: block; line-height: 1.1; }
        .crm-stat-card .lbl { font-size: 0.82rem; color: #6E686A; font-weight: 500; text-transform: uppercase; letter-spacing: 1px; margin-top: 4px; }

        .lead-table-container { background: #fff; border-radius: 16px; overflow: hidden; box-shadow: 0 6px 25px rgba(0,0,0,0.06); border: 1px solid #ECE7E2; }
        .table-toolbar { padding: 16px 22px; background: #fff; border-bottom: 1px solid #F0ECE8; display: flex; justify-content: space-between; align-items: center; gap: 15px; flex-wrap: wrap; }
        .search-lead-input { padding: 10px 16px; border: 1.5px solid #E2DCD7; border-radius: 50px; font-size: 0.9rem; outline: none; width: 280px; font-family: inherit; }
        .search-lead-input:focus { border-color: var(--gold); }

        .lead-table { width: 100%; border-collapse: collapse; }
        .lead-table th { background: #161213; color: var(--gold-light); padding: 14px 18px; text-align: left; font-size: 0.84rem; text-transform: uppercase; letter-spacing: 1px; font-weight: 600; }
        .lead-table td { padding: 16px 18px; border-bottom: 1px solid #F2EEEA; font-size: 0.9rem; vertical-align: top; }
        .lead-table tr:hover td { background-color: #FDFBF8; }

        .client-name { font-size: 1rem; font-weight: 700; color: #1A1617; display: block; margin-bottom: 3px; }
        .lead-source-tag { display: inline-block; font-size: 0.72rem; padding: 2px 8px; border-radius: 4px; background: #F3ECE7; color: #665D57; font-weight: 600; }
        .lead-notes { font-size: 0.82rem; color: #736C6F; margin-top: 6px; line-height: 1.4; max-width: 300px; }
        .lead-notes i { color: var(--gold-dark); margin-right: 4px; }

        .status-pill { display: inline-block; padding: 4px 10px; border-radius: 50px; font-size: 0.76rem; font-weight: 700; }
        .status-pill.new { background: #E8F4FD; color: #0284C7; }
        .status-pill.sent { background: #FEF3C7; color: #D97706; }
        .status-pill.meeting { background: #ECFDF5; color: #059669; }
        .status-pill.confirmed { background: #FDF2F8; color: #DB2777; }

        .btn-wa-sm { background: #25D366; color: #fff; padding: 7px 14px; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; font-size: 0.82rem; transition: transform 0.2s ease; }
        .btn-wa-sm:hover { transform: translateY(-2px); box-shadow: 0 3px 10px rgba(37,211,102,0.35); color: #fff; }
        .btn-call-sm { background: #1A1617; color: #fff; padding: 7px 14px; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; font-size: 0.82rem; transition: transform 0.2s ease; margin-top: 5px; }
        .btn-call-sm:hover { background: var(--gold); color: #1A1617; transform: translateY(-2px); }

        .table-scroll-hint {
            display: none;
            padding: 9px 14px;
            background: #FDFBF8;
            border-bottom: 1px solid #ECE7E2;
            font-size: 0.78rem;
            color: #7A7275;
            text-align: center;
        }

        @media (max-width: 991.98px) {
            .crm-stat-grid { grid-template-columns: repeat(2, 1fr); gap: 12px; }
        }
        @media (max-width: 575.98px) {
            .crm-stat-grid { grid-template-columns: 1fr 1fr; gap: 10px; }
            .crm-stat-card { padding: 14px 16px; border-radius: 12px; }
            .crm-stat-card .val { font-size: 1.45rem; }
            .crm-stat-card .lbl { font-size: 0.72rem; }
            .search-lead-input { width: 100%; }
            .crm-action-buttons { width: 100%; display: flex; gap: 8px; }
            .crm-action-buttons .btn { flex: 1; text-align: center; font-size: 0.8rem; padding: 8px 10px; }
            .table-scroll-hint { display: block; }
        }
    </style>
</head>
<body>
    <div class="lead-dashboard">
        <div class="container">
            <div class="d-flex justify-between align-center mb-4 wrap-mobile">
                <div class="d-flex align-center" style="gap:14px;">
                    <img src="images/logo.jpg" alt="Logo" class="site-brand-img">
                    <div>
                        <h2 style="font-size:1.6rem;"><i class="fa-solid fa-crown text-gold"></i> Live Leads &amp; Inquiries CRM</h2>
                        <p style="font-size:0.9rem; color:#6E686A;">Real-time inquiries received from website booking forms, 3D moodboard requests &amp; WhatsApp</p>
                    </div>
                </div>
                <div class="crm-action-buttons">
                    <a href="booking.php" class="btn btn-gold btn-sm"><i class="fa-solid fa-plus"></i> New Reservation</a>
                    <a href="index.php" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-globe"></i> View Website</a>
                </div>
            </div>

            <!-- Stats Overview Cards -->
            <div class="crm-stat-grid">
                <div class="crm-stat-card">
                    <span class="val text-gold-gradient"><?php echo $totalLeads; ?></span>
                    <span class="lbl">Total Active Inquiries</span>
                </div>
                <div class="crm-stat-card">
                    <span class="val"><?php echo $weddingCount; ?></span>
                    <span class="lbl">Royal Weddings</span>
                </div>
                <div class="crm-stat-card">
                    <span class="val"><?php echo $sangeetCount; ?></span>
                    <span class="lbl">Sangeet &amp; Cocktails</span>
                </div>
                <div class="crm-stat-card">
                    <span class="val"><?php echo $haldiCount; ?></span>
                    <span class="lbl">Haldi &amp; Mehendi</span>
                </div>
            </div>

            <?php if (empty($leads)): ?>
                <div class="text-center p-5 bg-white rounded-luxury">
                    <h3>No leads received yet!</h3>
                    <p>Submit a test inquiry through your website booking form or quote popup to see it appear here.</p>
                </div>
            <?php else: ?>
                <div class="lead-table-container">
                    <div class="table-toolbar">
                        <div>
                            <strong>Recent Lead Stream</strong> &bull; <span style="font-size:0.85rem; color:#6E686A;">Sorted by most recent</span>
                        </div>
                        <input type="text" id="leadSearch" class="search-lead-input" placeholder="🔍 Search couple, phone or venue...">
                    </div>
                    <div class="table-scroll-hint">
                        <i class="fa-solid fa-arrows-left-right text-gold"></i> Swipe horizontally to view contact details, dates, &amp; WhatsApp actions
                    </div>
                    <div style="overflow-x: auto; -webkit-overflow-scrolling: touch;">
                        <table class="lead-table" id="leadsDataTable">
                            <thead>
                                <tr>
                                    <th>Received</th>
                                    <th>Client / Couple</th>
                                    <th>Phone / Contact</th>
                                    <th>Celebration</th>
                                    <th>Date &amp; Guests</th>
                                    <th>Venue / City</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($leads as $l): 
                                    $st = $l['status'] ?? 'New Inquiry';
                                    $stClass = 'new';
                                    if (stripos($st, 'sent') !== false || stripos($st, 'proposal') !== false) $stClass = 'sent';
                                    elseif (stripos($st, 'meeting') !== false || stripos($st, 'booked') !== false) $stClass = 'meeting';
                                    elseif (stripos($st, 'confirmed') !== false) $stClass = 'confirmed';
                                    $cleanPhone = preg_replace('/[^0-9]/', '', $l['phone']);
                                ?>
                                <tr>
                                    <td>
                                        <span style="font-weight:600; color:#1A1617; font-size:0.85rem; display:block;">
                                            <?php echo date('d M Y', strtotime($l['created_at'])); ?>
                                        </span>
                                        <span style="font-size:0.75rem; color:#888;">
                                            <?php echo date('h:i A', strtotime($l['created_at'])); ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="client-name"><?php echo e($l['name']); ?></span>
                                        <span class="lead-source-tag"><i class="fa-solid fa-tag"></i> <?php echo e($l['lead_type'] ?? 'Website Inquiry'); ?></span>
                                        <?php if (!empty($l['notes'])): ?>
                                            <div class="lead-notes"><i class="fa-solid fa-quote-left"></i><?php echo e($l['notes']); ?></div>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="tel:<?php echo $cleanPhone; ?>" style="font-weight:600; color:#1A1617; display:inline-block;">
                                            <i class="fa-solid fa-phone text-gold"></i> <?php echo e($l['phone']); ?>
                                        </a>
                                    </td>
                                    <td>
                                        <span class="badge-gold" style="font-size:0.75rem; padding:3px 10px;">
                                            <?php echo e($l['event_type']); ?>
                                        </span>
                                    </td>
                                    <td>
                                        <strong style="color:#1A1617; font-size:0.88rem; display:block;">
                                            <i class="fa-regular fa-calendar-check text-gold"></i> <?php echo date('d M Y', strtotime($l['event_date'])); ?>
                                        </strong>
                                        <span style="font-size:0.78rem; color:#6E686A;">
                                            <?php echo e($l['guest_count'] ?? '350 Guests'); ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span style="font-size:0.85rem; color:#333; display:block; max-width:200px;">
                                            <i class="fa-solid fa-location-dot text-gold"></i> <?php echo e($l['venue_city']); ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="status-pill <?php echo $stClass; ?>"><?php echo e($st); ?></span>
                                    </td>
                                    <td>
                                        <div style="display:flex; flex-direction:column; gap:4px;">
                                            <a href="https://wa.me/<?php echo $cleanPhone; ?>?text=<?php echo urlencode('Hi ' . $l['name'] . ', thanks for reaching out to Magic & Sparkle Events! Following up regarding your ' . $l['event_type'] . ' on ' . date('d M Y', strtotime($l['event_date'])) . '.'); ?>" target="_blank" class="btn-wa-sm">
                                                <i class="fa-brands fa-whatsapp"></i> Chat
                                            </a>
                                            <a href="tel:<?php echo $cleanPhone; ?>" class="btn-call-sm">
                                                <i class="fa-solid fa-phone"></i> Call
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script>
        // Live search filter on leads table
        const searchInput = document.getElementById('leadSearch');
        if (searchInput) {
            searchInput.addEventListener('input', (e) => {
                const q = e.target.value.toLowerCase();
                const rows = document.querySelectorAll('#leadsDataTable tbody tr');
                rows.forEach(r => {
                    const text = r.textContent.toLowerCase();
                    r.style.display = text.includes(q) ? '' : 'none';
                });
            });
        }
    </script>
</body>
</html>
