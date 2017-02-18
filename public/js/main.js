$(window).ready(function ($) {

    $('.img_popup').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: true,
            duration: 300 // don't foget to change the duration also in CSS
        }
    });

    $('.sliderHeader').slick({
        dots: true,
        slidesToShow: 1,
        arrows:false,
        autoplay: true,
        autoplaySpeed: 1500,
        infinite:true
    });

    $('.sliderOfsidebar').slick({
        dots: true,
        slidesToShow: 1,
        arrows:false,
        autoplay: true,
        infinite:true,
        autoplaySpeed: 500,
        speed:1500,
        dots:false
    });
})