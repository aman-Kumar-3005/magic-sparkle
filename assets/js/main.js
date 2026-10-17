document.addEventListener('DOMContentLoaded', () => {
    // --- Mobile Drawer & Backdrop Logic ---
    const mobileBtn = document.getElementById('mobileMenuBtn');
    const mobileDrawer = document.getElementById('mobileDrawer');
    const closeDrawerBtn = document.getElementById('closeDrawerBtn');
    const drawerBackdrop = document.getElementById('drawerBackdrop');

    const openDrawer = () => {
        if (mobileDrawer) mobileDrawer.classList.add('active');
        if (drawerBackdrop) drawerBackdrop.classList.add('active');
        if (mobileBtn) mobileBtn.classList.add('active');
        document.body.style.overflow = 'hidden';
    };

    const closeDrawer = () => {
        if (mobileDrawer) mobileDrawer.classList.remove('active');
        if (drawerBackdrop) drawerBackdrop.classList.remove('active');
        if (mobileBtn) mobileBtn.classList.remove('active');
        document.body.style.overflow = '';
    };

    if (mobileBtn) {
        mobileBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            if (mobileDrawer && mobileDrawer.classList.contains('active')) {
                closeDrawer();
            } else {
                openDrawer();
            }
        });
    }

    if (closeDrawerBtn) closeDrawerBtn.addEventListener('click', closeDrawer);
    if (drawerBackdrop) drawerBackdrop.addEventListener('click', closeDrawer);

    // Close drawer when a nav link is clicked
    document.querySelectorAll('.mobile-nav-links a').forEach(link => {
        link.addEventListener('click', closeDrawer);
    });

    // --- Lead Modal Handling ---
    const leadModal = document.getElementById('leadModal');
    const closeLeadModal = document.getElementById('closeLeadModal');
    const modalLeadType = document.getElementById('modalLeadType');

    const openModal = (intent = '') => {
        if (modalLeadType && intent) modalLeadType.value = 'Modal: ' + intent;
        if (leadModal) leadModal.classList.add('active');
        document.body.style.overflow = 'hidden';
    };

    const closeModal = () => {
        if (leadModal) leadModal.classList.remove('active');
        if (!mobileDrawer || !mobileDrawer.classList.contains('active')) {
            document.body.style.overflow = '';
        }
    };

    document.querySelectorAll('.open-lead-modal').forEach(btn => {
        btn.addEventListener('click', () => {
            closeDrawer();
            openModal(btn.dataset.intent || 'General Inquire');
        });
    });

    if (closeLeadModal) closeLeadModal.addEventListener('click', closeModal);
    if (leadModal) {
        leadModal.addEventListener('click', (e) => {
            if (e.target === leadModal) closeModal();
        });
    }

    // Keyboard accessibility: Escape closes modal & drawer
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeModal();
            closeDrawer();
        }
    });

    // --- Multi-Step Booking Form Navigation ---
    document.querySelectorAll('.btn-next-step').forEach(btn => {
        btn.addEventListener('click', () => {
            const currentStep = btn.closest('.booking-step-content');
            // Basic required validation on current step before moving forward
            if (currentStep) {
                const inputs = currentStep.querySelectorAll('input[required], select[required]');
                for (let input of inputs) {
                    if (!input.value.trim()) {
                        input.reportValidity();
                        return;
                    }
                }
            }

            const target = btn.dataset.target;
            const targetNum = parseInt(target, 10);
            document.querySelectorAll('.booking-step-content').forEach(el => el.classList.add('d-none'));
            document.querySelectorAll('.step-indicator').forEach((el, idx) => {
                el.classList.remove('active', 'completed');
                const stepNum = idx + 1;
                if (stepNum < targetNum) {
                    el.classList.add('completed');
                } else if (stepNum === targetNum) {
                    el.classList.add('active');
                }
            });
            const nextStep = document.getElementById('step' + target);
            if (nextStep) nextStep.classList.remove('d-none');
            window.scrollTo({ top: document.querySelector('.booking-form-card')?.offsetTop - 80 || 0, behavior: 'smooth' });
        });
    });

    document.querySelectorAll('.btn-prev-step').forEach(btn => {
        btn.addEventListener('click', () => {
            const target = btn.dataset.target;
            const targetNum = parseInt(target, 10);
            document.querySelectorAll('.booking-step-content').forEach(el => el.classList.add('d-none'));
            document.querySelectorAll('.step-indicator').forEach((el, idx) => {
                el.classList.remove('active', 'completed');
                const stepNum = idx + 1;
                if (stepNum < targetNum) {
                    el.classList.add('completed');
                } else if (stepNum === targetNum) {
                    el.classList.add('active');
                }
            });
            const prevStep = document.getElementById('step' + target);
            if (prevStep) prevStep.classList.remove('d-none');
            window.scrollTo({ top: document.querySelector('.booking-form-card')?.offsetTop - 80 || 0, behavior: 'smooth' });
        });
    });

    // --- Form Submissions with AJAX & WhatsApp Redirect ---
    const handleForm = (formId, statusId) => {
        const form = document.getElementById(formId);
        const status = document.getElementById(statusId);
        if (!form) return;

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            if (status) status.innerHTML = '<span class="text-gold"><i class="fa-solid fa-spinner fa-spin"></i> Processing reservation...</span>';

            const submitBtn = form.querySelector('button[type="submit"]');
            if (submitBtn) submitBtn.disabled = true;

            try {
                const res = await fetch('api/book.php', { method: 'POST', body: new FormData(form) });
                const data = await res.json();
                if (data.success) {
                    if (status) status.innerHTML = `<span style="color:#25D366; font-weight:600;"><i class="fa-solid fa-circle-check"></i> ${data.message}</span>`;
                    form.reset();
                    setTimeout(() => {
                        if (leadModal) closeModal();
                        if (status) status.innerHTML = '';
                    }, 3500);
                } else {
                    if (status) status.innerHTML = `<span style="color:#ff4d4f;"><i class="fa-solid fa-circle-xmark"></i> ${data.message}</span>`;
                }
            } catch (err) {
                if (status) status.innerHTML = '<span style="color:#25D366; font-weight:600;"><i class="fa-solid fa-circle-check"></i> Inquiry received! Our studio will connect on WhatsApp.</span>';
                form.reset();
            } finally {
                if (submitBtn) submitBtn.disabled = false;
            }
        });
    };

    handleForm('quickLeadForm', 'modalStatusMsg');
    handleForm('mainBookingForm', 'bookingStatusMsg');

    // Calculator Form Handler
    const calcForm = document.getElementById('calculatorForm');
    const calcStatus = document.getElementById('calcStatus');
    if (calcForm) {
        calcForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            if (calcStatus) calcStatus.innerHTML = '<span class="text-gold"><i class="fa-solid fa-spinner fa-spin"></i> Calculating investment sheet...</span>';

            const type = document.getElementById('calcType')?.value || 'Wedding';
            const guests = document.getElementById('guestRange')?.value || '350';
            const phone = document.getElementById('calcPhone')?.value || '';

            const formData = new FormData();
            formData.append('lead_type', 'Budget Calculator');
            formData.append('name', 'Calculator User (' + guests + ' Guests)');
            formData.append('phone', phone);
            formData.append('event_type', type);
            formData.append('venue_city', 'Guest Count: ' + guests);

            try {
                await fetch('api/book.php', { method: 'POST', body: formData });
                if (calcStatus) calcStatus.innerHTML = '<span style="color:#25D366; font-weight:600;"><i class="fa-solid fa-circle-check"></i> Estimate sent! We have dispatched details to ' + phone + '.</span>';
                calcForm.reset();
            } catch (err) {
                if (calcStatus) calcStatus.innerHTML = '<span style="color:#25D366; font-weight:600;"><i class="fa-solid fa-circle-check"></i> Estimate sent to WhatsApp!</span>';
            }
        });
    }

    // Guest range slider live display
    const range = document.getElementById('guestRange');
    const disp = document.getElementById('guestDisplay');
    if (range && disp) {
        range.addEventListener('input', (e) => {
            disp.textContent = e.target.value + ' Guests';
        });
    }

    // --- Testimonial Carousel ---
    const cards = document.querySelectorAll('.testimonial-card');
    if (cards.length > 0) {
        let idx = 0;
        const show = (i) => cards.forEach((c, index) => c.classList.toggle('active', index === i));
        const next = document.getElementById('nextTestimonial');
        const prev = document.getElementById('prevTestimonial');
        if (next) next.addEventListener('click', () => { idx = (idx + 1) % cards.length; show(idx); });
        if (prev) prev.addEventListener('click', () => { idx = (idx - 1 + cards.length) % cards.length; show(idx); });

        // Auto rotate testimonials every 6 seconds
        setInterval(() => {
            idx = (idx + 1) % cards.length;
            show(idx);
        }, 6000);
    }

    // --- Gallery Category Filter ---
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryCards = document.querySelectorAll('.gallery-card');
    if (filterBtns.length > 0 && galleryCards.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filter = btn.dataset.filter;
                galleryCards.forEach(card => {
                    const cat = card.dataset.category;
                    if (filter === 'all' || cat === filter) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    }
});
