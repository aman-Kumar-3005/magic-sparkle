<?php
$currentPage = 'services';
$pageTitle = 'Curated Event Planning Services & Packages';
require_once __DIR__ . '/includes/header.php';
?>
<div class="page-header">
    <div class="container text-center">
        <span class="section-tag">Excellence in Execution</span>
        <h1>Curated Services &amp; Packages</h1>
        <p>Transforming ordinary venues into breathtaking wonderland spaces. Discover our tailored solutions for every milestone celebration.</p>
    </div>
</div>
<section class="section-padding" id="weddings">
    <div class="container">
        <div class="service-detail-grid">
            <div class="service-detail-media">
                <img src="images/774969838_17981585181098216_2058163297949165773_n.jpg" alt="Royal Wedding Planning" class="rounded-luxury shadow-luxury" loading="lazy">
            </div>
            <div class="service-detail-content">
                <span class="section-tag">Signature Mastery</span>
                <h2>Royal Indian Weddings &amp; Destination Nuptials</h2>
                <div class="divider-gold"></div>
                <p>From intimate palace weddings in Rajasthan to high-octane farm celebrations across Delhi NCR, we manage all dimensions of your dream nuptials with finesse.</p>
                <div class="feature-bullets">
                    <div class="bullet-item">
                        <h4>Bespoke Mandap &amp; Floral Architecture</h4>
                        <p>Handcrafted structural mandaps adorned with imported hydrangeas and custom lighting art.</p>
                    </div>
                    <div class="bullet-item">
                        <h4>Sangeet &amp; Artist Management</h4>
                        <p>Production stages, Bollywood singers, celebrity choreographers, and state-of-the-art intelligent lighting setups.</p>
                    </div>
                </div>
                <div class="mt-4">
                    <button class="btn btn-gold open-lead-modal" data-intent="Wedding Package">Request Wedding Brochure</button>
                    <a href="booking.php" class="btn btn-outline-dark">Check Auspicious Dates</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Tiers -->
<section class="section-padding pricing-section bg-warm-ivory">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-tag">Curated Investment</span>
            <h2 class="section-title">Transparent Planning Tiers</h2>
            <div class="divider-gold mx-auto"></div>
        </div>
        <div class="pricing-grid">
            <div class="pricing-card">
                <div class="tier-badge">Aesthetic Curation</div>
                <h3>Grand Elegance</h3>
                <p class="tier-subtitle">Ideal for 1-day events, Sangeet, or Engagement</p>
                <div class="tier-pricing"><span class="price-val">₹2.5 Lakhs*</span></div>
                <ul class="tier-features">
                    <li><i class="fa-solid fa-check text-gold"></i> Theme Decor &amp; Floral Setup</li>
                    <li><i class="fa-solid fa-check text-gold"></i> Entrance Arch &amp; Photo-Booth</li>
                    <li><i class="fa-solid fa-check text-gold"></i> DJ &amp; Sound System with Ambient Lights</li>
                    <li><i class="fa-solid fa-check text-gold"></i> On-Site Coordinator (Day of Event)</li>
                </ul>
                <button class="btn btn-outline-gold w-100 open-lead-modal" data-intent="Grand Elegance Package">Select This Package</button>
            </div>
            <div class="pricing-card featured-tier">
                <div class="popular-ribbon"><i class="fa-solid fa-crown"></i> Most Preferred</div>
                <div class="tier-badge">Full Celebration</div>
                <h3>The Royal Sparkle</h3>
                <p class="tier-subtitle">Comprehensive management for multi-day weddings</p>
                <div class="tier-pricing"><span class="price-val">₹5.5 Lakhs*</span></div>
                <ul class="tier-features">
                    <li><i class="fa-solid fa-check text-gold"></i> 2–3 Days Event Planning (Haldi, Sangeet, Wedding)</li>
                    <li><i class="fa-solid fa-check text-gold"></i> Couture Mandap &amp; Royal Varmala Setup</li>
                    <li><i class="fa-solid fa-check text-gold"></i> Artist &amp; Entertainment Management</li>
                    <li><i class="fa-solid fa-check text-gold"></i> Dedicated Bride &amp; Groom Shadow Planners</li>
                </ul>
                <button class="btn btn-gold w-100 btn-shimmer open-lead-modal" data-intent="Royal Sparkle Package">Book Royal Sparkle</button>
            </div>
            <div class="pricing-card">
                <div class="tier-badge">Unlimited Luxury</div>
                <h3>Bespoke Signature</h3>
                <p class="tier-subtitle">Extravagant destination weddings &amp; mega-galas</p>
                <div class="tier-pricing"><span class="price-val">Bespoke Quote</span></div>
                <ul class="tier-features">
                    <li><i class="fa-solid fa-check text-gold"></i> 360° Turnkey Destination &amp; Palace Management</li>
                    <li><i class="fa-solid fa-check text-gold"></i> Custom 3D VR Architectural Walkthroughs</li>
                    <li><i class="fa-solid fa-check text-gold"></i> Celebrity Artist &amp; Anchor Booking</li>
                    <li><i class="fa-solid fa-check text-gold"></i> Master Chefs &amp; Bar Concierge Curation</li>
                </ul>
                <button class="btn btn-outline-gold w-100 open-lead-modal" data-intent="Bespoke Signature Package">Inquire Bespoke</button>
            </div>
        </div>
    </div>
</section>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
