<?php
    include_once "info-head.php";
?>
    <script src="contact.js"></script>
<?php
    include_once "info-nav.php";
    include "./info-content/contact-content.php";
    include "./info-content/about-content.php";
    include "./info-content/pricing-content.php";
    include "./info-content/extra-content.php"; 
    echo $contact;
    echo $about;
    echo $pricing;
    echo $extra;
    include_once "info-footer.php";

?>