$(document).ready(function () {

    //masonry
    $('#masonry').masonry();

    //Select2
    $(".basic-single").select2({
        theme: "bootstrap"
    });
    //Datepicker
    $('.datepicker').datepicker({
        autoclose: true
    });
    //File ipload
    $('.file-upload').file_upload();

    //Tooltips
    $('[data-toggle="tooltip"]').tooltip();

//back to top
    $('body').append('<div id="toTop" class="btn btn-top"><span class="ti-arrow-up"></span></div>');
    $(window).scroll(function () {
        if ($(this).scrollTop() !== 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').on('click', function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });

    //navbar sticky
    var windows = $(window);
    var stick = $(".header-sticky");
    windows.on('scroll', function () {
        var scroll = windows.scrollTop();
        if (scroll < 245) {
            stick.removeClass("sticky");
        } else {
            stick.addClass("sticky");
        }
    });


    //navbar dropdown
    $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
        var $el = $(this);
        var $parent = $(this).offsetParent(".dropdown-menu");
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');

        $(this).parent("li").toggleClass('show');

        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
            $('.dropdown-menu .show').removeClass("show");
        });

        if (!$parent.parent().hasClass('navbar-nav')) {
            $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
        }
        return false;
    });


    /*------------------------------------
     Mobile Menu
     -------------------------------------- */

    $("#mobile-menu").metisMenu();

    $("#sidebar").mCustomScrollbar({
        theme: "minimal",
        scrollInertia: 100
    });

    $('#dismiss, .overlay').on('click', function () {
        $('#sidebar').removeClass('active');
        $('.overlay').fadeOut();
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').addClass('active');
        $('.overlay').fadeIn();
    });



    //Slider Preloader
    var slider_preloader_status = $(".slider_preloader_statusr");
    var slider_preloader = $(".slider_preloader");
    var header_slider = $(".header-slider");
    slider_preloader_status.fadeOut();
    slider_preloader.delay(350).fadeOut('slow');
    header_slider.removeClass("header-slider-preloader");

    // Slider JS
    $('#animation-slide').owlCarousel({
        autoHeight: true,
        items: 1,
        loop: true,
        autoplay: true,
        dots: true,
        nav: true,
        autoplayTimeout: 7000,
        navText: ["<i class='ti-angle-left'></i>", "<i class='ti-angle-right'></i>"],
        //animateIn: "fadeIn",
        //animateOut: "fadeIn",
        autoplayHoverPause: false,
        touchDrag: true,
        mouseDrag: true
    });




    $("#owl-example").owlCarousel(
      {
          autoHeight: true,
          items: 3,
          responsiveClass:true,
          responsive:{
                  0:{
                      items:1,
                      nav:true
                  },
                  600:{
                      items:3,
                      nav:false
                  },
                  1000:{
                      items:3,
                      nav:true,
                      loop:true
                  }
              },
          loop: true,
          autoplay: true,
          dots: false,
          nav: true,
          autoplayTimeout: 7000,
          navText: ["<i class='ti-angle-left'></i>", "<i class='ti-angle-right'></i>"],
          //animateIn: "fadeIn",
          //animateOut: "fadeIn",
          autoplayHoverPause: false,
          touchDrag: true,
          mouseDrag: true
      }
    );


    $("#animation-slide").on("translate.owl.carousel", function () {
        $(this).find(".owl-item .slide-text > *").removeClass("fadeInUp animated").css("opacity", "0");
        $(this).find(".owl-item .slide-img").removeClass("fadeInRight animated").css("opacity", "0");
    });
    $("#animation-slide").on("translated.owl.carousel", function () {
        $(this).find(".owl-item.active .slide-text > *").addClass("fadeInUp animated").css("opacity", "1");
        $(this).find(".owl-item.active .slide-img").addClass("fadeInRight animated").css("opacity", "1");
    });

    //Smooth Page Scrolling in jQuery
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top - 48)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });

    //Page header carousel
    $('.page-header-carousel').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    //Owl testimonial
    $('.owl-testimonial').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                items: 1,
                nav: true,
                loop: false
            }
        }
    });

});
