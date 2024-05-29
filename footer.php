<footer>
    <div class="footer-banner">
        <img src="/images/footer-banner-2.png" width="200" alt="ESCUELA INDUSTRIAL DE MÉXICO">
    </div>
    <div class="disclaimer">DERECHOS RESERVADOS © PANAMERICAN TECHNICAL SCHOOL</div>

    <div class="footer-body">
        <div class="contact-area">
            <div class="contact-title">LLÁMANOS</div>
            <div class="contact-number">+52 81 2087 0868</div>
            <div class="contact-title">ENCUÉNTRANOS</div>
            <div>Escuela Industrial PTS 15 de Mayo 202 Ote. esquina con Guerrero, Centro, 64000 Monterrey, N.L.</div>
            <div class="contact-title">CONTÁCTANOS</div>
            <div class="footer-social">
                <?php getSocialLink('/images/facebook.png'); ?>
                <?php getSocialLink('/images/twitter.png'); ?>
                <?php getSocialLink('/images/instagram.png'); ?>
                <?php getSocialLink('/images/tiktok.png'); ?>
                <?php getSocialLink('/images/youtube.png'); ?>
            </div>
        </div>
        <?php echo getFooterMenu(); ?>
    </div>
</footer>

<script type="text/javascript" src="/js/scripts.js?v=<?php echo getVersion(); ?>"></script>
</body>