;
(function($) {
    "use strict";

    $(document).ready(function() {

        /*--------------------
            wow js init
        ---------------------*/
        new WOW().init();

        /* 
        ----------------------------------------
            Location click
        ----------------------------------------
        */

        $(document).ready(function() {
            $('.overview-location, .date-time-list').on('click', '.single-location, .list', function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');
            });
        });

    });

    /*-----------------
        Nice Select
    ------------------*/

    $(document).ready(function() {
        $('select').niceSelect();
    });


    $(window).on('scroll', function() {

        //back to top show/hide
        var ScrollTop = $('.back-to-top');
        if ($(window).scrollTop() > 300) {
            ScrollTop.fadeIn(300);
        } else {
            ScrollTop.fadeOut(300);
        }
    });

    /*------------------
        back to top
    ------------------*/
    $(document).on('click', '.back-to-top', function() {
        $("html,body").animate({
            scrollTop: 0
        }, 1500);
    });

    /*-------------------------------
        Navbar Fix
    ------------------------------*/
    $(window).on('resize', function() {
        if ($(window).width() < 991) {
            navbarFix()
        }
    });

    function navbarFix() {
        $(document).on('click', '.navbar-area .navbar-nav li.menu-item-has-children>a, .navbar-area .navbar-nav li.appside-megamenu>a', function(e) {
            e.preventDefault();
        })
    }


    /*-----------------
        preloader
    ------------------*/

    $(window).on('load', function() {
        var preLoder = $("#preloader");
        preLoder.fadeOut(1000);

    });

    /* 
    ========================================
        Cart Click 
    ========================================
    */

    $(document).ready(function() {
        $('.cart-icon').on('click', function() {
            $(this).toggleClass("active");
        });
    });

    /*-----------------
        Multi step Form
    ------------------*/

    $(document).ready(function() {

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;


        $(".next").click(function() {

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $(".step-list li, .step-list-two li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({ opacity: 0 }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({ 'opacity': opacity });
                },
                duration: 500
            });
        });

        $(".previous").click(function() {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $(".step-list li, .step-list-two li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({ opacity: 0 }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({ 'opacity': opacity });
                },
                duration: 500
            });
        });

        $(".submit").click(function() {
            return false;
        })

    });



})(jQuery);