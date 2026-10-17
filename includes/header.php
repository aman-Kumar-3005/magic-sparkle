<?php require_once __DIR__ . '/../config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? e($pageTitle) . ' | ' . SITE_NAME : SITE_NAME . ' – Luxury Wedding Planners Delhi & Gurgaon'; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/jpeg" href="images/logo.jpg">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="top-announcement-bar">
        <div class="container d-flex justify-between align-center">
            <span class="announcement-text"><i class="fa-solid fa-sparkles text-gold"></i> <strong>2026–2027 Wedding Season Dates Open:</strong> Reserve with complimentary 3D moodboard!</span>
            <div class="top-contacts">
                <a href="tel:<?php echo PHONE_CLEAN; ?>"><i class="fa-solid fa-phone"></i> <?php echo PHONE_PRIMARY; ?></a>
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode(WHATSAPP_DEFAULT_MSG); ?>" target="_blank" class="top-wa-badge"><i class="fa-brands fa-whatsapp"></i> WhatsApp Concierge</a>
            </div>
        </div>
    </div>
    <header class="site-header" id="siteHeader">
        <div class="container nav-container">
            <a href="index.php" class="brand-logo">
                <img src="images/logo.jpg" alt="<?php echo SITE_NAME; ?>" class="site-brand-img">
                <div class="brand-text">
                    <span class="brand-name">Magic &amp; Sparkle</span>
                    <span class="brand-sub">Weddings &bull; Ghitorni &bull; Gurgaon</span>
                </div>
            </a>
            <nav class="main-nav">
                <ul class="nav-links">
                    <li><a href="index.php" class="<?php echo ($currentPage == 'home') ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="services.php" class="<?php echo ($currentPage == 'services') ? 'active' : ''; ?>">Services</a></li>
                    <li><a href="gallery.php" class="<?php echo ($currentPage == 'gallery') ? 'active' : ''; ?>">Gallery</a></li>
                    <li><a href="about.php" class="<?php echo ($currentPage == 'about') ? 'active' : ''; ?>">About &amp; Studio</a></li>
                    <li><a href="booking.php" class="<?php echo ($currentPage == 'booking') ? 'active' : ''; ?>">Check Dates</a></li>
                </ul>
            </nav>
            <div class="header-actions">
                <button class="btn btn-outline-gold open-lead-modal" data-intent="Header Quote"><i class="fa-solid fa-file-invoice-dollar"></i> Get Quote</button>
                <a href="booking.php" class="btn btn-gold btn-shimmer"><i class="fa-regular fa-calendar-check"></i> Book Now</a>
                <button class="mobile-toggle-btn" id="mobileMenuBtn" aria-label="Toggle navigation">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
        <div class="drawer-backdrop" id="drawerBackdrop"></div>
        <div class="mobile-drawer" id="mobileDrawer">
            <div class="mobile-drawer-header">
                <div class="brand-logo">
                    <img src="images/logo.jpg" alt="<?php echo SITE_NAME; ?>" class="site-brand-img sm">
                    <div class="brand-text">
                        <span class="brand-name text-gold">Magic &amp; Sparkle</span>
                        <span class="brand-sub">Ghitorni &bull; Gurgaon</span>
                    </div>
                </div>
                <button class="close-drawer" id="closeDrawerBtn" aria-label="Close menu">&times;</button>
            </div>
            <ul class="mobile-nav-links">
                <li><a href="index.php" class="<?php echo ($currentPage == 'home') ? 'active' : ''; ?>"><i class="fa-solid fa-house"></i> Home</a></li>
                <li><a href="services.php" class="<?php echo ($currentPage == 'services') ? 'active' : ''; ?>"><i class="fa-solid fa-gem"></i> Services &amp; Packages</a></li>
                <li><a href="gallery.php" class="<?php echo ($currentPage == 'gallery') ? 'active' : ''; ?>"><i class="fa-solid fa-images"></i> Past Events Gallery</a></li>
                <li><a href="about.php" class="<?php echo ($currentPage == 'about') ? 'active' : ''; ?>"><i class="fa-solid fa-crown"></i> About &amp; Ghitorni Studio</a></li>
                <li><a href="booking.php" class="<?php echo ($currentPage == 'booking') ? 'active' : ''; ?>"><i class="fa-regular fa-calendar-check"></i> Book Consultation</a></li>
                <li><a href="leads.php" style="color:var(--gold);"><i class="fa-solid fa-lock"></i> Leads Portal</a></li>
            </ul>
            <div class="mobile-drawer-footer">
                <button class="btn btn-outline-gold w-100 mb-2 open-lead-modal" data-intent="Mobile Menu Quote"><i class="fa-solid fa-file-invoice-dollar"></i> Get Quick Quote</button>
                <a href="booking.php" class="btn btn-gold w-100 mb-3"><i class="fa-regular fa-calendar-check"></i> Book Now</a>
                <div class="drawer-contact-info">
                    <a href="tel:<?php echo PHONE_CLEAN; ?>"><i class="fa-solid fa-phone text-gold"></i> <?php echo PHONE_PRIMARY; ?></a>
                    <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank" class="text-success"><i class="fa-brands fa-whatsapp"></i> WhatsApp Concierge</a>
                </div>
            </div>
        </div>
    </header>
