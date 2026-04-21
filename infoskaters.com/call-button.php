<?php
// Modern Floating Phone & WhatsApp Buttons

echo '<style>
.floating-call-btn, .floating-wa-btn {
    position: fixed;
    bottom: 110px; /* Fully sits above the mobile sticky bottom bar */
    z-index: 10000; /* Stays above the get-a-quote view and sticky bar */
    width: 48px;
    height: 48px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-decoration: none !important;
}

.floating-call-btn {
    left: 15px;
    background-color: #3474eb; /* Corporate Blue */
}

.floating-wa-btn {
    right: 15px;
    background-color: #25d366; /* WhatsApp Green */
}

.floating-call-btn img, .floating-wa-btn img {
    width: 24px;
    height: 24px;
    filter: brightness(0) invert(1); /* Makes black icons white for better contrast */
}

.floating-call-btn:hover, .floating-wa-btn:hover {
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
}

@media (min-width: 768px) {
    .floating-call-btn, .floating-wa-btn {
        width: 54px;
        height: 54px;
        bottom: 30px; /* Regular position on desktop */
    }
    .floating-call-btn img, .floating-wa-btn img {
        width: 28px;
        height: 28px;
    }
}
</style>';

echo '<a href="tel:+918062181207" class="floating-call-btn" target="_blank" title="Call Us">
        <img src="https://img.icons8.com/?size=100&id=9730&format=png&color=000000" alt="Call">
      </a>';

echo '<a href="https://wa.me/15557482871" class="floating-wa-btn" target="_blank" title="WhatsApp Us">
        <img src="https://img.icons8.com/?size=100&id=16713&format=png&color=000000" alt="WhatsApp">
      </a>';
?>
