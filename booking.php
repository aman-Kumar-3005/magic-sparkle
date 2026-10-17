<?php
$currentPage = 'booking';
$pageTitle = 'Book VIP Consultation & Date Availability';
require_once __DIR__ . '/includes/header.php';
?>
<div class="page-header">
    <div class="container text-center">
        <span class="section-tag"><i class="fa-solid fa-calendar-check text-gold"></i> Direct Date Reservation</span>
        <h1>Book Your Event Consultation</h1>
        <p>Check date availability, customize your requirements, and receive an instant confirmation from our creative studio.</p>
    </div>
</div>
<section class="section-padding bg-warm-ivory">
    <div class="container booking-container-grid">
        <div class="booking-form-card">
            <div class="booking-steps-nav">
                <div class="step-indicator active" id="stepIndicator1">
                    <span class="step-num">1</span>
                    <span class="step-lbl">Details</span>
                </div>
                <div class="step-indicator" id="stepIndicator2">
                    <span class="step-num">2</span>
                    <span class="step-lbl">Date &amp; Time</span>
                </div>
                <div class="step-indicator" id="stepIndicator3">
                    <span class="step-num">3</span>
                    <span class="step-lbl">Confirm</span>
                </div>
            </div>
            <form id="mainBookingForm" class="interactive-booking-form">
                <input type="hidden" name="lead_type" value="VIP Booking Form">
                <div class="booking-step-content" id="step1">
                    <h3 class="step-heading">Step 1: Tell Us About Your Celebration</h3>
                    <div class="form-group mb-3">
                        <label>Select Event Type *</label>
                        <div class="event-type-pills">
                            <label class="pill-option"><input type="radio" name="event_type" value="Royal Wedding" checked><span>💍 Royal Wedding</span></label>
                            <label class="pill-option"><input type="radio" name="event_type" value="Sangeet / Cocktail"><span>💃 Sangeet / Cocktail</span></label>
                            <label class="pill-option"><input type="radio" name="event_type" value="Haldi / Mehendi"><span>☀️ Haldi / Mehendi</span></label>
                            <label class="pill-option"><input type="radio" name="event_type" value="Corporate Gala"><span>👥 Corporate Gala</span></label>
                            <label class="pill-option"><input type="radio" name="event_type" value="Private Milestone"><span>🎂 Private Party</span></label>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label>Expected Number of Guests</label>
                        <select name="guest_count" class="form-control-luxury">
                            <option value="50 - 150">50 – 150 Guests (Intimate Gathering)</option>
                            <option value="150 - 350" selected>150 – 350 Guests (Grand Celebration)</option>
                            <option value="350 - 700">350 – 700 Guests (Royal Wedding)</option>
                            <option value="700+">700+ Guests (Mega Extravaganza)</option>
                        </select>
                    </div>
                    <div class="booking-step-actions text-right mt-4">
                        <button type="button" class="btn btn-gold btn-next-step" data-target="2">Next: Date &amp; Time <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="booking-step-content d-none" id="step2">
                    <h3 class="step-heading">Step 2: Event Date &amp; Time Slot</h3>
                    <div class="form-group mb-4">
                        <label>Select Event Date *</label>
                        <input type="date" name="event_date" required min="<?php echo date('Y-m-d'); ?>" class="form-control-luxury">
                    </div>
                    <div class="form-group mb-4">
                        <label>Select Consultation Slot</label>
                        <div class="time-slot-grid">
                            <label class="slot-pill"><input type="radio" name="time_slot" value="11:00 AM (Studio)" checked><span>11:00 AM &bull; Ghitorni Studio</span></label>
                            <label class="slot-pill"><input type="radio" name="time_slot" value="03:00 PM (Studio)"><span>03:00 PM &bull; Ghitorni Studio</span></label>
                            <label class="slot-pill"><input type="radio" name="time_slot" value="06:30 PM (Zoom Call)"><span>06:30 PM &bull; Zoom Video</span></label>
                        </div>
                    </div>
                    <div class="booking-step-actions d-flex justify-between mt-4">
                        <button type="button" class="btn btn-outline-dark btn-prev-step" data-target="1"><i class="fa-solid fa-arrow-left"></i> Back</button>
                        <button type="button" class="btn btn-gold btn-next-step" data-target="3">Next: Contact Info <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="booking-step-content d-none" id="step3">
                    <h3 class="step-heading">Step 3: Finalize Your Consultation</h3>
                    <div class="form-row">
                        <div class="form-group">
                            <label>Full Name *</label>
                            <input type="text" name="name" required placeholder="e.g. Varun Kapoor" class="form-control-luxury">
                        </div>
                        <div class="form-group">
                            <label>WhatsApp Number *</label>
                            <input type="tel" name="phone" required placeholder="+91 Phone" class="form-control-luxury">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label>Preferred Venue &amp; City</label>
                        <input type="text" name="venue_city" placeholder="e.g. Ghitorni / Chattarpur / Gurgaon" class="form-control-luxury">
                    </div>
                    <div class="booking-step-actions d-flex justify-between mt-4">
                        <button type="button" class="btn btn-outline-dark btn-prev-step" data-target="2"><i class="fa-solid fa-arrow-left"></i> Back</button>
                        <button type="submit" class="btn btn-gold btn-shimmer btn-submit-lead">Confirm &amp; Reserve Date <i class="fa-solid fa-check"></i></button>
                    </div>
                    <div class="form-status-msg mt-3" id="bookingStatusMsg"></div>
                </div>
            </form>
        </div>
        <div class="booking-sidebar">
            <div class="contact-card-luxury text-center">
                <img src="images/logo.jpg" alt="<?php echo SITE_NAME; ?>" class="site-brand-img footer-logo mx-auto mb-2">
                <span class="badge-gold">Direct Concierge</span>
                <h3>Need Immediate Confirmation?</h3>
                <p>Speak directly with our Creative Director for urgent reservations or custom destination quotes.</p>
                <div class="contact-method-list">
                    <a href="tel:<?php echo PHONE_CLEAN; ?>" class="contact-method-item">
                        <div class="method-icon"><i class="fa-solid fa-phone"></i></div>
                        <div><strong>Direct Call</strong><span><?php echo PHONE_PRIMARY; ?></span></div>
                    </a>
                    <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank" class="contact-method-item">
                        <div class="method-icon text-success"><i class="fa-brands fa-whatsapp"></i></div>
                        <div><strong>WhatsApp Concierge</strong><span>Instant Reply in 10 Mins</span></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
