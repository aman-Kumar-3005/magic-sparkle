<!-- Mobile Bottom Sticky Conversion Bar -->
<div class="mobile-sticky-bar">
    <a href="tel:<?php echo PHONE_CLEAN; ?>" class="mobile-bar-btn btn-call">
        <i class="fa-solid fa-phone"></i>
        <span>Call</span>
    </a>
    <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode('Hi Magic & Sparkle! I want to check availability for my event.'); ?>" target="_blank" class="mobile-bar-btn btn-wa">
        <i class="fa-brands fa-whatsapp"></i>
        <span>WhatsApp</span>
    </a>
    <a href="booking.php" class="mobile-bar-btn btn-book">
        <i class="fa-regular fa-calendar-check"></i>
        <span>Book Date</span>
    </a>
</div>

<!-- Floating WhatsApp Concierge -->
<a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode(WHATSAPP_DEFAULT_MSG); ?>" target="_blank" class="floating-wa-btn" aria-label="WhatsApp">
    <div class="wa-tooltip">Chat with Planner</div>
    <i class="fa-brands fa-whatsapp"></i>
</a>

<!-- Universal Lead Capture Modal -->
<div class="lead-modal-overlay" id="leadModal">
    <div class="lead-modal-card">
        <button class="modal-close-btn" id="closeLeadModal">&times;</button>
        <div class="lead-modal-header text-center">
            <img src="images/logo.jpg" alt="Magic &amp; Sparkle" class="site-brand-img mx-auto mb-2">
            <span class="modal-tag"><i class="fa-solid fa-gem text-gold"></i> VIP Consultation</span>
            <h3>Plan Your Dream Event</h3>
            <p>Tell us your date &amp; vision. We will share a tailored moodboard &amp; investment estimate on WhatsApp.</p>
        </div>
        <form id="quickLeadForm" class="lead-form">
            <input type="hidden" name="lead_type" id="modalLeadType" value="Quick Modal Lead">
            <div class="form-row">
                <div class="form-group">
                    <label>Full Name *</label>
                    <input type="text" name="name" required placeholder="e.g. Radhika Sharma" class="form-control-luxury">
                </div>
                <div class="form-group">
                    <label>WhatsApp Number *</label>
                    <input type="tel" name="phone" required placeholder="+91 Phone" class="form-control-luxury">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Event Type *</label>
                    <select name="event_type" required class="form-control-luxury">
                        <option value="Royal Wedding">💍 Royal Wedding</option>
                        <option value="Sangeet & Cocktail">💃 Sangeet &amp; Cocktail</option>
                        <option value="Haldi / Mehendi">☀️ Haldi / Mehendi Decor</option>
                        <option value="Corporate Gala">👥 Corporate Gala</option>
                        <option value="Private Milestone">🎂 Private Milestone</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Event Date *</label>
                    <input type="date" name="event_date" required min="<?php echo date('Y-m-d'); ?>" class="form-control-luxury">
                </div>
            </div>
            <div class="form-group mb-3">
                <label>Preferred Venue / City</label>
                <input type="text" name="venue_city" placeholder="e.g. Ghitorni / Gurgaon / Chattarpur" class="form-control-luxury">
            </div>
            <button type="submit" class="btn btn-gold w-100 btn-submit-lead">
                <span>Check Availability &amp; Get Estimate</span> <i class="fa-solid fa-arrow-right"></i>
            </button>
            <div class="form-status-msg mt-2" id="modalStatusMsg"></div>
        </form>
    </div>
</div>
