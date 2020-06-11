$(document).ready(function() {

    $('.credentials_items').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        prevArrow:"<button type='button' class='slick-prev pull-left'><img src='../img/left-arrow.svg' alt=''></button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><img src='../img/right-arrow.svg' alt=''></button>",
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    centerMode: true,
                    centerPadding: '25px',
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    centerMode: true,
                    centerPadding: '25px',

                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $(`.popup_slider`).slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow:"<button type='button' class='slick-prev pull-left'><img src='../img/left-arrow.svg' alt=''></button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><img src='../img/right-arrow.svg' alt=''></button>"
    })

    $(`.cr_popup_slider`).slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow:"<button type='button' class='slick-prev pull-left'><img src='../img/left-arrow.svg' alt=''></button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><img src='../img/right-arrow.svg' alt=''></button>"
    })

    $(".services_item").click(function() {
        var id = $(this).data("id");
        let description = $(this).find("p").html();
        let title = $(this).find("h4").html();
        let bodyTop = $("body").scrollTop()
        $(".popup_overlay").addClass('active');
        $(".popup").addClass('active');
        $(".popup").css("top", bodyTop + 150 + 'px')
        $('.popup_slider').slick('slickFilter',id);
        $(".popup").find('h3').html(title)
        $(".popup").find("p").html(description)
    });


    $(".credentials_items_item ").click(function() {
        var id = $(this).data('id');
        let bodyTop = $("body").scrollTop()
        $(".popup_overlay").addClass('active');
        $(".cr_popup").addClass('active');
        $(".cr_popup").css("top", bodyTop + 50 + 'px')
        $('.cr_popup_slider').slick('slickFilter',id);
    })


    $(".popup_overlay, .popup .close, .cr_popup .close").click(() => {
        $(".popup_overlay").removeClass('active');
        $(".popup").removeClass('active');
        $(".cr_popup").removeClass('active');
        $('.popup_slider').slick('slickUnfilter');
        $('.cr_popup_slider').slick('slickUnfilter');
        $(".mobile_menu").removeClass('active')
    })

    $(".mobile_menu .dropdown").click(function(e) {
        e.preventDefault()
        $(".mobile_menu .dropdown ul").toggle()
    })

    $(".hamburger").click(function(){
        $(".popup_overlay").addClass('active')
        $(".mobile_menu").addClass('active')
    })

    $(".mobile_menu .close").click(function(){
        $(".mobile_menu").removeClass("active");
        $(".popup_overlay").removeClass('active');
    })


    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 70) {
            $("header").addClass('fixed');
        } else {
            $("header").removeClass('fixed');
        }
    });


    $(".map_").click(function(e){
        e.preventDefault()
        $(".mapouter").show()
        $(".contact_section_form").hide()
    })
    $(".mapouter .close").click(function(){
        $(".mapouter").hide()
        $(".contact_section_form").show()
    })
})


