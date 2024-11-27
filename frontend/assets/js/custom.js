jQuery(document).ready(function ($) {
    $('.flat-discount-slider ul').slick({
        infinite: true,          // Infinite loop
        slidesToShow: 3,         // Show one slide at a time
        slidesToScroll: 1,       // Scroll one slide at a time
        autoplay: true,          // Enable autoplay
        autoplaySpeed: 2000,     // Set speed for autoplay (2 seconds)
        arrows: false,           // Hide navigation arrows
        dots: false,  
        responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
          ],           // Hide pagination dots
    });

    $('.slider-for-section-3').slick({
        infinite: true,          // Infinite loop
        slidesToShow: 1,         // Show one slide at a time
        slidesToScroll: 1,       // Scroll one slide at a time
        autoplay: true,          // Enable autoplay
        autoplaySpeed: 1000,     // Set speed for autoplay (2 seconds)
        arrows: false,           // Hide navigation arrows
        dots: true,  
        responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
          ],           // Hide pagination dots
    });
});