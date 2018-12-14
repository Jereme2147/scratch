<?php
    include_once "../info-head.php";
?>
    <script src="../scripts/contact.js"></script>
<?php
    include_once "../info-nav.php";
    include "../info-content/contact-content.php";
    include "../info-content/about-content.php";
    include "../info-content/pricing-content.php";
    include "../info-content/extra-content.php"; 
    include "border-div.php";
    echo $contact;
    // echo $border; 
    echo $about;
    // echo $border;
    echo $pricing;
    // echo $border;
    echo $extra;
    include_once "../info-footer.php";

?>