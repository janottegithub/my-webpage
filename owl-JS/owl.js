$(document).ready(function(){
    $('#customers').owlCarousel({
        loop:true,
        margin:10,
        smartSpeed:2000,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
//owl carousel
$(".owl-prev").html('<i class="fa fa-chevron-left fa-2x"></i>');
$(".owl-next").html('<i class="fa fa-chevron-left fa-2x"></i>');
});