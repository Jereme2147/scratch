
$(document).ready(function(){
    let large = window.matchMedia("(min-width: 701px)");
    let small = window.matchMedia("(max-width: 700px)");
   /* large media  shows popups and animates their fade into position on page*/
    if (large.matches) {
        $('.photo-div').mouseenter(function () { hoverOrClick(); });
        $('.photo-div').click(function () { hoverOrClick(); });
    };
    /* small media */
    /* toggles menu and slides photo up.  */
    if (small.matches) {
        $('.popUp').hide();
        $('.photo-div').click(function () {
            $('.popUp').show();
            $('.photo-div').animate({
                marginTop: "0"
            }, 500);
            $('#title').animate({
                marginTop: "5vh"
            }, 500);
            /* toggles photo for 1 second */
            $('#back-photo').html(`<img src="./landing-img/surprised.png" alt="my picture" id="photo">`);
            setTimeout(() => {
                $("#back-photo").html(`<img src="./landing-img/noexpression.png" alt="my picture" id="photo">`); 
            }, 1000);
        });
    };
});

let hoverOrClick = function () {
    //shows suprised photo
    $("#front-photo").show();
    setTimeout(() => {
        $("#front-photo").hide();
    }, 1000);
    //moves photo up slowly
    $('.photo-div').animate({
        top: "40%"
    }, 1000);
    // next 4 fade in and move links to center bottom
    $('#contact').fadeIn(100);
    $('#contact').animate({
        left: "51vw",
        top: "80vh"
    }, 1000);
    $('#extra').fadeIn(100);
    $('#extra').animate({
        left: "15vw",
        top: "80vh"
    }, 1000);
    setTimeout(() => {
        $('#pricing').fadeIn(100);
        $('#pricing').animate({
            left: "51vw",
            top: "68vh"
        }, 1000);
        $('#info').fadeIn(100);
        $('#info').animate({
            left: "15vw",
            top: "68vh"
        }, 1000);
    }, 400);
    $("#title").animate({
        fontSize: "8vh",
        marginTop: "5vh"
    }, 1000);
};