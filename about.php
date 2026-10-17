<?php
$currentPage = 'about';
$pageTitle = 'About Us & Ghitorni Delhi Studio';
require_once __DIR__ . '/includes/header.php';
?>
<div class="page-header">
    <div class="container text-center">
        <span class="section-tag">Our Vision &amp; Passion</span>
        <h1>The Story Behind Magic &amp; Sparkle</h1>
        <p>Turning Ideas Into Reality — The Greatest crossover you’ll ever see! 😉🥹</p>
    </div>
</div>
<section class="section-padding">
    <div class="container">
        <div class="service-detail-grid">
            <div class="service-detail-content">
                <span class="section-tag">A Passion for Grandeur</span>
                <h2>Crafting Timeless Memories with Precision &amp; Soul</h2>
                <div class="divider-gold"></div>
                <p>At <strong>Magic &amp; Sparkle Events</strong>, we believe every wedding and celebration is an intimate artistic tapestry. Founded with a vision to revolutionize experiential event design across Delhi NCR, Gurgaon, and destination palaces, our team specializes in multi-shift labor management, haute floral installations, and flawless guest hospitality.</p>
                <div class="about-quote-box mt-3">
                    <i class="fa-solid fa-quote-left text-gold"></i>
                    <p>"Good people, nice decor, beautiful events, and happiness all around—that is what we live for."</p>
                </div>
            </div>
            <div class="service-detail-media">
                <img src="images/780860554_17981585196098216_6188326360406579435_n.jpg" alt="Magic &amp; Sparkle Founders &amp; Event Team" class="rounded-luxury shadow-luxury" loading="lazy">
            </div>
        </div>
    </div>
</section>
<section class="section-padding bg-warm-ivory" id="location">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-tag">Visit In Person</span>
            <h2 class="section-title">Our Ghitorni Design Studio</h2>
            <div class="divider-gold mx-auto"></div>
        </div>
        <div class="studio-info-grid">
            <div class="studio-details-card">
                <h3>Studio Address</h3>
                <p><i class="fa-solid fa-location-dot text-gold"></i> <?php echo OFFICE_ADDRESS; ?></p>
                <p><i class="fa-solid fa-phone text-gold"></i> <?php echo PHONE_PRIMARY; ?></p>
                <p><i class="fa-solid fa-envelope text-gold"></i> <?php echo CONTACT_EMAIL; ?></p>
                <p><i class="fa-solid fa-clock text-gold"></i> Tuesday – Sunday: 10:30 AM – 8:00 PM</p>
                <div class="mt-4">
                    <a href="https://maps.google.com/?q=Ghitorni+MG+Road+Delhi" target="_blank" class="btn btn-outline-dark"><i class="fa-solid fa-diamond-turn-right"></i> Open Google Maps</a>
                    <a href="booking.php" class="btn btn-gold ml-2"><i class="fa-regular fa-calendar-check"></i> Book Visit</a>
                </div>
            </div>
            <div class="studio-map-frame">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14022.454452093744!2d77.135311!3d28.489728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1e2e9877bfa9%3A0x6bbf69ef5c5c1653!2sGhitorni%2C%20New%20Delhi%2C%20Delhi%20110030!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="320" style="border:0; border-radius:12px;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
