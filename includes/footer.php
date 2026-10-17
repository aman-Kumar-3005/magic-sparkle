    <footer class="site-footer">
        <div class="container footer-grid">
            <div class="footer-col col-brand">
                <div class="footer-brand-wrap mb-3">
                    <img src="images/logo.jpg" alt="<?php echo SITE_NAME; ?>" class="site-brand-img footer-logo">
                    <div class="brand-text">
                        <span class="brand-name" style="color:#fff; font-size:1.6rem;">Magic &amp; Sparkle</span>
                        <span class="brand-sub" style="color:var(--gold);">Events &bull; Weddings &bull; Galas</span>
                    </div>
                </div>
                <p class="footer-desc">
                    Turning ideas into reality has always been our primary goal. The greatest crossover you'll ever see! Bespoke royal weddings, vibrant sangeets, and unforgettable corporate galas across Ghitorni, Gurgaon, Delhi NCR, and destination venues worldwide.
                </p>
                <div class="footer-badges">
                    <span class="badge-item"><i class="fa-brands fa-instagram text-gold"></i> <?php echo INSTAGRAM_FOLLOWERS; ?> Instagram Community</span>
                    <span class="badge-item"><i class="fa-solid fa-award text-gold"></i> Rated 4.9/5 by 450+ Couples</span>
                </div>
            </div>
            <div class="footer-col">
                <h4 class="footer-title">Celebrations</h4>
                <ul class="footer-links">
                    <li><a href="services.php#weddings">Royal Indian Weddings</a></li>
                    <li><a href="services.php#sangeet">Sangeet &amp; Cocktail Galas</a></li>
                    <li><a href="services.php#haldi">Themed Haldi &amp; Phoolon Ki Holi</a></li>
                    <li><a href="services.php#corporate">Corporate Summits &amp; Conferences</a></li>
                    <li><a href="services.php#private">Anniversaries &amp; Private Parties</a></li>
                    <li><a href="services.php#photography">Cinematic Photography &amp; Reels</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4 class="footer-title">Quick Navigation</h4>
                <ul class="footer-links">
                    <li><a href="gallery.php">Past Events Showcase</a></li>
                    <li><a href="about.php">Founders &amp; Ghitorni Studio</a></li>
                    <li><a href="booking.php">Interactive Date Checker</a></li>
                    <li><a href="about.php#location">Studio Visit &bull; Ghitorni Delhi</a></li>
                    <li><a href="leads.php" style="color:var(--gold);"><i class="fa-solid fa-lock"></i> Client Leads Portal</a></li>
                </ul>
            </div>
            <div class="footer-col col-contact">
                <h4 class="footer-title">Ghitorni Studio (Delhi)</h4>
                <p class="studio-address"><i class="fa-solid fa-location-dot text-gold"></i> <?php echo OFFICE_ADDRESS; ?></p>
                <p><i class="fa-solid fa-phone text-gold"></i> <a href="tel:<?php echo PHONE_CLEAN; ?>"><?php echo PHONE_PRIMARY; ?></a></p>
                <p><i class="fa-solid fa-envelope text-gold"></i> <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a></p>
                <div class="footer-socials mt-3">
                    <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container d-flex justify-between align-center wrap-mobile">
                <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved. Ghitorni, Delhi &amp; Gurgaon.</p>
                <div class="footer-terms">
                    <a href="booking.php">Request Proposal</a> &bull;
                    <a href="about.php">Studio Location</a>
                </div>
            </div>
        </div>
    </footer>
    <?php require_once __DIR__ . '/lead-widgets.php'; ?>
    <script src="assets/js/main.js"></script>
</body>
</html>
