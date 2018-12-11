<?php
    include_once "info-head.php";
?>
    <script src="extra.js"></script>
<?php
    include_once "info-nav.php";
    include "./info-content/extra-content.php";
    include "./info-content/about-content.php";
    include "./info-content/pricing-content.php";
    include "./info-content/contact-content.php";
    echo $extra;
    echo $about;
    echo $contact;
    echo $pricing;
    include_once "info-footer.php";
?>
