<?php
$currentPage = 'home';
$pageTitle = 'Luxury Wedding & Event Planners Delhi & Gurgaon';
require_once __DIR__ . '/includes/header.php';
?>
<section class="hero-banner">
    <div class="hero-overlay"></div>
    <div class="container hero-content text-center">
        <div class="hero-badge-tag"><i class="fa-solid fa-crown text-gold"></i> <?php echo SITE_BIO; ?></div>
        <h1 class="hero-title">Turning Ideas <br><span class="text-gold-gradient">Into Reality</span></h1>
        <p class="hero-subtitle">
            From majestic multi-day farm weddings in Ghitorni &amp; Gurgaon to energetic cocktail nights and prestigious corporate galas, Magic &amp; Sparkle Events brings royal sophistication and seamless execution to life.
        </p>
        <div class="hero-actions">
            <a href="booking.php" class="btn btn-gold btn-lg btn-shimmer"><i class="fa-regular fa-calendar-check"></i> Check Auspicious Dates</a>
            <button class="btn btn-glass btn-lg open-lead-modal" data-intent="Hero Moodboard"><i class="fa-solid fa-wand-magic-sparkles"></i> Get Free 3D Moodboard</button>
        </div>
        <div class="hero-stats-bar">
            <div class="stat-card">
                <span class="stat-num"><?php echo INSTAGRAM_FOLLOWERS; ?></span>
                <span class="stat-label">Instagram Community</span>
            </div>
            <div class="stat-card">
                <span class="stat-num">450+</span>
                <span class="stat-label">Weddings &amp; Events</span>
            </div>
            <div class="stat-card">
                <span class="stat-num">3 Days</span>
                <span class="stat-label">Non-Stop Production Mastery</span>
            </div>
            <div class="stat-card">
                <span class="stat-num">4.9★</span>
                <span class="stat-label">Client Happiness Rating</span>
            </div>
        </div>
    </div>
</section>

<section class="quick-inquiry-ribbon">
    <div class="container d-flex justify-between align-center wrap-mobile">
        <div class="ribbon-text">
            <h3>Planning a 2026–2027 Wedding or Gala in Delhi NCR?</h3>
            <p>Meet our founders over artisan coffee at our Ghitorni Studio (Opp. Metro Pillar 118).</p>
        </div>
        <div class="ribbon-buttons">
            <a href="tel:<?php echo PHONE_CLEAN; ?>" class="btn btn-outline-dark"><i class="fa-solid fa-phone"></i> <?php echo PHONE_PRIMARY; ?></a>
            <a href="booking.php" class="btn btn-gold"><i class="fa-solid fa-calendar-check"></i> Book Studio Visit</a>
        </div>
    </div>
</section>

<!-- Real Wedding Spotlight (Leena Gulia & Puneet Yadav) -->
<section class="section-padding real-spotlight-section">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-tag"><i class="fa-solid fa-heart text-gold"></i> Real Wedding Highlight</span>
            <h2 class="section-title">The Grand Gurgaon Celebration</h2>
            <div class="divider-gold mx-auto"></div>
            <p class="section-desc">"Three days of continuous production, multiple shifts of labor, and a celebration that stole everyone's heart."</p>
        </div>
        <div class="spotlight-card">
            <div class="spotlight-grid">
                <div class="spotlight-media">
                    <img src="images/777165342_17981585163098216_7163747037389473334_n.jpg" alt="Leena and Puneet Wedding" class="spotlight-img">
                    <div class="spotlight-tag">Planned &amp; Executed by @magic_sparkle_events</div>
                </div>
                <div class="spotlight-content">
                    <div class="insta-post-meta">
                        <span class="location-badge"><i class="fa-solid fa-location-dot"></i> Gurgaon &bull; Delhi NCR</span>
                        <span class="date-badge"><i class="fa-brands fa-instagram"></i> Viral Wedding Reel</span>
                    </div>
                    <h3>Leena Gulia &amp; Puneet Yadav</h3>
                    <p class="spotlight-quote">
                        <em>"It has been weeks since our wedding and our guests just CAN'T stop talking about the decor and hospitality! You hear what everyone has to say about Magic &amp; Sparkle's founders? This is pure royalty."</em>
                    </p>
                    <ul class="spotlight-tags">
                        <li>#engagement</li>
                        <li>#sangeet</li>
                        <li>#blingy</li>
                        <li>#engagementdecoration</li>
                        <li>#weddingseason</li>
                    </ul>
                    <div class="spotlight-actions mt-4">
                        <button class="btn btn-gold open-lead-modal" data-intent="Look: Leena & Puneet Wedding"><i class="fa-solid fa-sparkles"></i> Inquire Similar 3-Day Wedding</button>
                        <a href="gallery.php" class="btn btn-outline-dark">View More Highlights</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Services Grid -->
<section class="section-padding bg-warm-ivory" id="servicesSection">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-tag">Signature Offerings</span>
            <h2 class="section-title">Curated Event Categories</h2>
            <div class="divider-gold mx-auto"></div>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="images/776401410_17981582904098216_5256646098222551676_n.jpg" alt="Weddings" loading="lazy">
                    <span class="service-badge">💍 Weddings</span>
                </div>
                <div class="service-body">
                    <h3>Royal Indian &amp; Destination Weddings</h3>
                    <p>Complete A-to-Z wedding orchestration: thematic Mandaps, bridal entries, varmala sets, and hospitality.</p>
                    <div class="service-foot">
                        <a href="services.php#weddings" class="link-luxury">Explore Details &rarr;</a>
                        <button class="btn btn-sm btn-outline-gold open-lead-modal" data-intent="Weddings Service">Get Quote</button>
                    </div>
                </div>
            </div>
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="images/781251172_17981582898098216_1520487918668871307_n.jpg" alt="Corporate" loading="lazy">
                    <span class="service-badge">👥 Corporate</span>
                </div>
                <div class="service-body">
                    <h3>Corporate Events &amp; Galas</h3>
                    <p>High-impact product launches, annual leadership summits, and awards galas with state-of-the-art AV.</p>
                    <div class="service-foot">
                        <a href="services.php#corporate" class="link-luxury">Explore Details &rarr;</a>
                        <button class="btn btn-sm btn-outline-gold open-lead-modal" data-intent="Corporate Service">Get Quote</button>
                    </div>
                </div>
            </div>
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="images/779179741_17981585136098216_3312367269288202906_n.jpg" alt="Private" loading="lazy">
                    <span class="service-badge">💃 Private</span>
                </div>
                <div class="service-body">
                    <h3>Private Events &amp; Anniversaries</h3>
                    <p>High-energy cocktail nights, belly dance soirees, milestone anniversaries, and custom-themed parties.</p>
                    <div class="service-foot">
                        <a href="services.php#private" class="link-luxury">Explore Details &rarr;</a>
                        <button class="btn btn-sm btn-outline-gold open-lead-modal" data-intent="Private Event Service">Get Quote</button>
                    </div>
                </div>
            </div>
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="images/775375669_17981582943098216_6457838592165751874_n.jpg" alt="Photography" loading="lazy">
                    <span class="service-badge">📷 Photography</span>
                </div>
                <div class="service-body">
                    <h3>Cinematic Films &amp; Viral Reels</h3>
                    <p>Cinematic 4K wedding films, drone shoots, candid portraits, and instant social media reels creation.</p>
                    <div class="service-foot">
                        <a href="services.php#photography" class="link-luxury">Explore Details &rarr;</a>
                        <button class="btn btn-sm btn-outline-gold open-lead-modal" data-intent="Photography Service">Get Quote</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Estimate / Lead Conversion Hook -->
<section class="section-padding estimate-section">
    <div class="container">
        <div class="estimate-box">
            <div class="estimate-left">
                <span class="badge-gold"><i class="fa-solid fa-calculator"></i> Transparent Estimation</span>
                <h2>Instant Event Budget &amp; Moodboard Calculator</h2>
                <p>Select your parameters to receive a tailored estimate and sample aesthetic concept sheet on WhatsApp within 15 minutes.</p>
                <div class="estimate-features">
                    <div><i class="fa-solid fa-check text-gold"></i> No hidden fees or surprise markups</div>
                    <div><i class="fa-solid fa-bolt text-gold"></i> Instant breakdown sent to your WhatsApp</div>
                </div>
            </div>
            <div class="estimate-right">
                <form id="calculatorForm" class="calculator-form">
                    <div class="form-group mb-3">
                        <label>Occasion Type</label>
                        <select name="calc_type" id="calcType" class="calc-input">
                            <option value="Royal Wedding (2-3 Days)">Royal Wedding (2-3 Days)</option>
                            <option value="Sangeet / Cocktail Night">Sangeet / Cocktail Night</option>
                            <option value="Thematic Haldi / Mehendi">Thematic Haldi / Mehendi</option>
                            <option value="Corporate Summit / Gala">Corporate Summit / Gala</option>
                            <option value="Milestone Birthday / Anniversary">Milestone Birthday / Anniversary</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label>Estimated Guest Count: <strong id="guestDisplay">350 Guests</strong></label>
                        <input type="range" min="50" max="1500" step="50" value="350" class="range-slider" id="guestRange">
                    </div>
                    <div class="form-group mb-3">
                        <label>Your WhatsApp Number for Instant Estimate</label>
                        <input type="tel" name="calc_phone" id="calcPhone" required placeholder="+91 Phone number" class="calc-input">
                    </div>
                    <button type="submit" class="btn btn-gold w-100">
                        <i class="fa-brands fa-whatsapp"></i> Send Me Estimated Investment &amp; Deck
                    </button>
                    <div class="calc-status mt-2" id="calcStatus"></div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Slider -->
<section class="section-padding bg-warm-ivory">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-tag">Client Love</span>
            <h2 class="section-title">What Our Couples &amp; Clients Say</h2>
            <div class="divider-gold mx-auto"></div>
        </div>
        <div class="testimonial-slider-wrap">
            <div class="testimonials-grid" id="testimonialTrack">
                <div class="testimonial-card active">
                    <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="testimonial-quote">
                        "Three days of continuous production and multiple labor shifts, but Magic &amp; Sparkle made it look effortless! The blingy decor, the sangeet stage, and the continuous support of the founders won all our hearts."
                    </p>
                    <div class="testimonial-author">
                        <h4>Leena Gulia &amp; Puneet Yadav</h4>
                        <span>3-Day Royal Wedding &bull; Gurgaon</span>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="testimonial-quote">
                        "Good people, nice decor, beautiful event, and happiness all around—that's what we wanted and that's exactly what they delivered for our Haldi ceremony in Gurgaon! Pure perfection."
                    </p>
                    <div class="testimonial-author">
                        <h4>Ritika &amp; Aman Sharma</h4>
                        <span>Phoolon Ki Holi Haldi &bull; Delhi NCR</span>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="testimonial-quote">
                        "Who would have anticipated that an anniversary celebration could manifest in this manner? The cocktail sangeet and belly dance queens arrangement made it the most memorable night of our lives!"
                    </p>
                    <div class="testimonial-author">
                        <h4>Dr. Priya &amp; Rajesh Sengupta</h4>
                        <span>25th Anniversary Gala &bull; Gurgaon</span>
                    </div>
                </div>
            </div>
            <div class="slider-controls text-center mt-4">
                <button class="slider-arrow" id="prevTestimonial" aria-label="Previous review"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="slider-arrow" id="nextTestimonial" aria-label="Next review"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
</section>

<!-- Instagram Live Feed Section -->
<section class="section-padding instagram-section">
    <div class="container text-center">
        <span class="section-tag"><i class="fa-brands fa-instagram text-gold"></i> Live From Our Feed</span>
        <h2 class="section-title"><?php echo INSTAGRAM_HANDLE; ?></h2>
        <p class="section-desc mb-4">Join our <strong><?php echo INSTAGRAM_FOLLOWERS; ?></strong> community for daily wedding reels, mandap reveals, and bridal stories.</p>
        <div class="insta-grid">
            <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" class="insta-item">
                <img src="images/775065076_17981585127098216_6214631638899169405_n.jpg" alt="Haldi Ceremony" loading="lazy">
                <div class="insta-hover-overlay"><i class="fa-brands fa-instagram"></i><span>Haldi Ceremony Gurgaon</span></div>
            </a>
            <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" class="insta-item">
                <img src="images/781137975_17981582958098216_3442711876608808436_n.jpg" alt="Floral Mandap" loading="lazy">
                <div class="insta-hover-overlay"><i class="fa-brands fa-instagram"></i><span>Blingy Sangeet Decor</span></div>
            </a>
            <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" class="insta-item">
                <img src="images/630258356_18347802397227700_1714359445788322973_n.jpg" alt="Varmala Night" loading="lazy">
                <div class="insta-hover-overlay"><i class="fa-brands fa-instagram"></i><span>3-Day Royal Wedding</span></div>
            </a>
            <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" class="insta-item">
                <img src="images/775065076_17981585178098216_8359072005457608149_n.jpg" alt="Cocktail Night" loading="lazy">
                <div class="insta-hover-overlay"><i class="fa-brands fa-instagram"></i><span>Anniversary Cocktail Soiree</span></div>
            </a>
        </div>
    </div>
</section>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
