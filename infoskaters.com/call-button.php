<?php
// WhatsApp Button HTML and CSS

echo '<style>
   .whatsapp-button1, .whatsapp-button2 {
    position: fixed;
    bottom: 60px;
    z-index: 100;
    width: 60px;
    height: 60px;
}

.whatsapp-button1 {
    left: 1px;
}

.whatsapp-button2 {
margin-right:-15px;
    right: 1px;
}

.whatsapp-button1 img, .whatsapp-button2 img {
    width: 80%;
    height: 80%;
    border-radius: 50%;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease;
}

.whatsapp-button1 img:hover, .whatsapp-button2 img:hover {
    transform: scale(1.1);
}
</style>';

echo '<a href="tel:+918062181207" class="whatsapp-button1" target="_blank">
        <img src="telephone.png" alt="WhatsApp">
      </a>';

echo '<a href="https://wa.me/15557482871" class="whatsapp-button2" target="_blank">
        <img src="https://img.icons8.com/?size=100&id=16713&format=png&color=000000" alt="WhatsApp">
      </a>';
?>
