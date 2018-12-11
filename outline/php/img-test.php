<!-- /* This page is a test page only.  Used to code the imgages independently with proper hightlighting.  */ -->
<?php
    include_once "../info-head.php";
?>
    <script src="../scripts/extra.js"></script>
<?php
    include_once "../info-nav.php";
    // include "../info-content/extra-content.php";
    include "../info-content/about-content.php";
    include "../info-content/pricing-content.php";
    include "../info-content/contact-content.php";
?>
<div id="examples" class="div-style">
    <div class="img-divs div-styles">
        <p>Example 1: <br>Large screen menu left.</p>
        <img src="../screens/codewod1large.png" alt="screen shot examples">
    </div>
    <div class="img-divs div-styles">
        <p>Example 1: <br>Small screen menu top.</p>
        <img src="../screens/codewod1small.jpeg" alt="screen shot examples">
    </div>
    <div class="img-divs div-styles">
        <p>Example 1: <br>Small screen drop <br>down top menu.</p>
        <img src="../screens/codewod1smallmenu.jpeg" alt="screen shot examples">
    </div>    
    
    <div class="img-divs div-styles">
        <p>Example 2: <br>Large screen</p>
        <img src="../screens/7sealslarge.png" alt="screen shot examples">
    </div>
    
    <div class="img-divs div-styles">
        <p>Example 2: <br>Small screen menu <br>on top with drop down.</p>
        <img src="../screens/7sealssmall.jpeg" alt="screen shot examples">
    </div>
    
    <div class="img-divs div-styles">
        <p>Example 3: <br>Large screen <br>Multiple drop down / classic menu.</p>
        <img src="../screens/codewodlarbe.png" alt="screen shot examples">
    </div>
    
    <div class="img-divs div-styles">
        <p>Example 3:<br>
        Small screen with single <br>
        drop menu and content toggles.</p>
        <img src="../screens/codewodsmall.jpeg" alt="screen shot examples">
    </div>
    
    <div class="img-divs div-styles">
        <p>Example 3:<br>
        Showing drop menu</p>
        <img src="../screens/codewodsmallmenu.jpeg" alt="screen shot examples">
    </div>
    
    <div class="img-divs div-styles">
        <p>Example 4:<br>
        Large screen, simple technical manual.<br>
        Navigation left.</p>
        <img src="../screens/techlarge.png" alt="screen shot examples">
    </div>
    
    <div class="img-divs div-styles">
        <p>Example 4:<br>
        Small screen tech manual.<br>
        static nav menu top.</p>
        <img src="../screens/techsmall.png" alt="screen shot examples">
    </div>
    
    <div class="img-divs div-styles">
        <p>Example 5:<br>
        Large screen sample survey form.</p>
        <img src="../screens/surveylarge.png" alt="screen shot examples">
    </div>
    
    <div class="img-divs div-styles">
        <p>Example 5:<br>
        Small screen sample<br>
        survey form.</p>
        <img src="../screens/surveysmall.png" alt="screen shot examples">
    </div>    
    
</div>
<?php
    // echo $extra;
    echo $about;
    echo $contact;
    echo $pricing;
    include_once "../info-footer.php";
?>
