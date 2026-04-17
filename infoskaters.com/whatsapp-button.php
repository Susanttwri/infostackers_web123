<?php
// WhatsApp Button HTML and CSS

echo '<style>
   .whatsapp-button1 {
    position: fixed;
    bottom: 60px;
   right: 1px;
    z-index: 100;
    width: 80px;
    height: 80px;
}

.whatsapp-button1 img {
    width: 80%;
    height: 80%;
    border-radius: 50%;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease;
}

.whatsapp-button1 img:hover {
    transform: scale(1.1);
}
</style>';

echo '<a href="https://wa.me/+919008180048" class="whatsapp-button1" target="_blank">
        <img src="https://img.icons8.com/?size=100&id=16713&format=png&color=000000" alt="WhatsApp">
      </a>';
?>
