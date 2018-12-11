<?php
    include_once "../info-head.php";
?>
    <script src="../scripts/pricing.js"></script>
<?php
    include_once "../info-nav.php";
    include "../info-content/pricing-content.php";
    include "../info-content/about-content.php";
    include "../info-content/contact-content.php";
    include "../info-content/extra-content.php";
    echo $pricing;
    echo $about;
    echo $contact;
    echo $extra;
    include_once "../info-footer.php";

?>