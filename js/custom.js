jQuery(document).on({
    orientationchange: function () {
        if (navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i)) {
            var viewportmeta = document.querySelector('meta[name="viewport"]');
            if (viewportmeta) {
                viewportmeta.content = 'width=device-width, minimum-scale=1.0, maximum-scale=1.0';
                document.body.addEventListener('gesturestart', function () {
                    viewportmeta.content = 'width=device-width, minimum-scale=0.25, maximum-scale=1.6';
                }, false);
            }
        }
    }

});
jQuery(document).ready(function ($) {
    "use strict";

    $('iframe').each(function () {
        var url = $(this).attr("src");
        if (url) {
            var char = "?";
            if (url.indexOf("?") != -1) {
                var char = "&";
            }
            $(this).attr("src", url + char + "wmode=transparent");
        }
    });

    function changeFooterPosition() {
        $('header').css('top', window.scrollY + "px");
    }

    if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPad/i))) {
        if (!(window.devicePixelRatio > 1)) {
            $(document).bind('scroll', function () {
                changeFooterPosition();
            });
        }
    }
    ;

    var disableSmoothScroll = window.themeOptions["smooth_scroll_switch"] == 1,
        scrollSpeed = disableSmoothScroll ? 1 : 750;

    $('.nav.js nav').onePageNav({

        filter: ':not(.external)',
        scrollThreshold: 0.25,
        scrollSpeed: scrollSpeed

    });
    $('.mob_nav.js ul').onePageNav({

        filter: ':not(.external)',
        scrollThreshold: 0.25,
        scrollSpeed: scrollSpeed

    });
    $('.trigger').toggle(function () {
        $(this).next().slideDown('normal');
    }, function () {
        $(this).next().slideUp('normal');
    });
    $('ul.top_navigation').supersubs({

        minWidth: 8,
        maxWidth: 27

    }).superfish({

        delay: 500,
        animation: {

            opacity: 'show',
            height: 'show'

        },
        speed: 'fast',
        autoArrows: false,
        dropShadows: false

    });
    $('.top_navigation').tinyNav({

        active: 'current-menu-item',
        header: 'Menu'

    });

    $('.lines').each(function () {
        $(this).wrapInner('<span class="plug"></span>');
    });

    var topScrollSpeed = window.themeOptions["smooth_scroll_switch"] == 1 ? 1 : 750
    ;

    $('.back2top').click(function () {
        $('html, body').animate({scrollTop: 0}, scrollSpeed);
        return false;
    });
    $('.speed_box:nth-child(2n+1)').addClass('ipad');
    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    $('form#cf').submit(function () {
        var a = $(this).find('input[name="name"]').val();
        var b = $(this).find('input[name="email"]').val();
        var c = $(this).find('textarea[name="msg"]').val();
        if (a === "") {
            $(this).append('<div class="alert error"><div class="msg">Type your name please!</div><a class="toggle-alert" href="#"></a></div>').fadeIn("slow");
            return false;
        }
        if (!validateEmail(b)) {
            $(this).append('<div class="alert error"><div class="msg">Type your email correctly please!</div><a class="toggle-alert" href="#"></a></div>').fadeIn("slow");
            return false;
        }
        if (c === "") {
            $(this).append('<div class="alert error"><div class="msg">Type your message please!</div><a class="toggle-alert" href="#"></a></div>').fadeIn("slow");
            return false;
        }
        else {
            $.ajax({

                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (data) {
                    if (data === 0) {
                        $('form').append('<div class="alert error"><div class="msg">Something goes wrong, message wasn\'t send!</div><a class="toggle-alert" href="#"></a></div>').fadeIn("slow");
                    } else if (data === 1) {
                        $('form').append('<div class="alert success"><div class="msg">Your message has been sent!</div><a class="toggle-alert" href="#"></a></div>').fadeIn("slow");
                    }
                }
            });
            return false;
        }
    });


    $(window).load(function () {
        //$('#container').isotope('reLayout');
        //var iso_h = $('.portfolio').height() - 60;
        //$('.over_box_inner').height(iso_h);
        $('a.soc_font').tooltip();
        $('.fsoc').tooltip();
        //$('.man_box').animate({opacity: 1}, 1000);
        //$('.intro').animate({opacity: 1}, 1000);
        $('.progress-bar').each(function () {
            var percentage = $(this).find('.progress-bar-content').data('percentage');
            $(this).find('.progress-bar-content').css('width', '0%');
            $(this).find('.progress-bar-content').animate({
                width: percentage + '%'
            }, 'slow');
        });

        $('#progress-bars').waypoint(function () {
            $('.progress-bar').each(function () {
                var percentage = $(this).find('.progress-bar-content').data('percentage');
                $(this).find('.progress-bar-content').css('width', '0%');
                $(this).find('.progress-bar-content').animate({
                    width: percentage + '%'
                }, 'slow');
            });
        }, {
            triggerOnce: true,
            offset: '100%'
        });
    });
    // Tabs
    //When page loads...
    $('.tabs-wrapper').each(function () {
        $(this).find(".tab_content").hide(); //Hide all content
        $(this).find("ul.tabs li:first").addClass("active").show(); //Activate first tab
        $(this).find(".tab_content:first").show(); //Show first tab content
    });
    //On Click Event
    $("ul.tabs li").click(function (e) {
        $(this).parents('.tabs-wrapper').find("ul.tabs li").removeClass("active"); //Remove any "active" class
        $(this).addClass("one"); //Add "active" class to selected tab
        $(this).parents('.tabs-wrapper').find(".tab_content").hide(); //Hide all tab content
        var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
        $(this).parents('.tabs-wrapper').find(activeTab).fadeIn(); //Fade in the active ID content
        e.preventDefault();
    });
    $("ul.tabs li a").click(function (e) {
        e.preventDefault();
    });
    $("h4.toggle").click(function () {
        if ($(this).parents('.accordian').length >= 1) {
            var accordian = $(this).parents('.accordian');
            if ($(this).hasClass('active')) {
                $(accordian).find('h4.toggle').removeClass('active');
                $(accordian).find(".toggle-content").slideUp();
            } else {
                $(accordian).find('h4.toggle').removeClass('active');
                $(accordian).find(".toggle-content").slideUp();
                $(this).addClass('active');
                $(this).next(".toggle-content").slideToggle();
            }
        } else {
            if ($(this).hasClass('active')) {
                $(this).removeClass("active");
            } else {
                $(this).addClass("active");
            }
        }
        return false;
    });
    $('.toggle-alert').live('click', function (e) {
        e.preventDefault();
        $(this).parent().slideUp();
    });
    $('.content-boxes').each(function () {
        var cols = $(this).find('.col').length;
        $(this).addClass('columns-' + cols);
    });
    var span_class = "";
    $('.pricing_table_sc').each(function () {
        var cols = $(this).find('.column').length;
        if (cols === 2) {
            span_class = "span6";
        }
        else if (cols === 3) {
            span_class = "span4";
        }
        else if (cols === 4) {
            span_class = "span3";
        }
        else if (cols === 5) {
            span_class = "span2";
        }
        else if (cols === 6) {
            span_class = "span2";
        }
        $(this).find('.column').addClass(span_class);
    });
    $('input, textarea').placeholder();

    if ($('#navHidden li').length) {
        $('#navVisible').append('<li id="toggleHiddenNav"><a href="#"><i class="icon-collapse"></i><span class="menu_name">More</span><span class="hover"><span class="arr"></span></span></a></li>');
        $('#toggleHiddenNav').click(function () {
            $('#navHidden').toggleClass('hidden');
        });
    }

});


jQuery(function ($) {
    var $container = $('#container'),
        winW,
        col = 4;

    window.calcIsoCol = function() {
        winW = $(window).width();
        if (winW <= 480) col = 1;
        else if (winW <= 768 && winW > 480) col = 2;
        else if (winW <= 1024 && winW > 768) col = 3;
        else if (winW > 1024) col = 4;
    };
    window.calcIsoCol(); // intial calculation

    window.resetPortfolioIsotope = function(){
        window.calcIsoCol();
        var newSize = Math.ceil($container.width() / col) - 5;
        $container.find(".portfolio").width(newSize - 5);//.height(newSize - 5);

        if($container.hasClass("loading")){ // initialize
            $container.removeClass("loading");
        }
        $container.find(".iso_inner.loading").removeClass("loading");

        $container.isotope({
            itemSelector: '.portfolio',
            masonry: {
                columnWidth: $container.width() / col
            }
        });
    };

    $container.imagesLoaded(function(){
        window.resetPortfolioIsotope();
    }); // initial start

    $(window).on('smartresize', window.resetPortfolioIsotope); // resize
    window.addEventListener("orientationchange", window.resetPortfolioIsotope); // orientationchange


    /**
     * Filters init
     * @type {*|jQuery|HTMLElement}
     */

    var $optionSets = $('#options .option-set'),
        $optionLinks = $optionSets.find('a')
        ;

    $optionLinks.click(function () {
        var $this = $(this),
            $loadMore = $("#portfolio_more")
            ;
        // don't proceed if already selected
        if ($this.hasClass('selected')) {
            return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');

        if($this.hasClass("no-more-posts")){
            $loadMore.hide();
        }
        else{
            $loadMore.show();
        }
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        $container.isotope(options);
        var $activeItems = $container.find(".portfolio").filter(function( index ) {
            return !$(this).hasClass("isotope-hidden");
        });
        if($activeItems.length < 4){
            $loadMore.trigger("click");
        }
        return false;
    });
    function reloy() {
        var $container = $('#container');
        $container.isotope('reLayout');
    }
});

/**
 * New js
 */

(function ($) {

    var parasponsive = {};

    /**
     * New google maps
     */

    initMap = function () {
        var address = themeOptions['address'];
        var geocoder = new google.maps.Geocoder();

        geocoder.geocode({ 'address': address }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                var geocoderlatlng = results[0].geometry.location;
                map = new google.maps.Map(document.getElementById('gmap'), {
                    zoom: Number(themeOptions['map_zoom']),
                    center: geocoderlatlng,
                    scrollwheel: false
                });
                var marker = new google.maps.Marker({
                    map: map,
                    draggable: false,
                    position: geocoderlatlng
                });
                google.maps.event.trigger(map, 'resize');
            }
        });
    };

    /**
     *
     */

    parasponsive.initSectionGMap = function () {
        var el = $('#gmap');

        if (el.length == 0) return;

        /**
         * Asynchronous gmap
         * @type {HTMLElement}
         */

        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
            'callback=initMap';
        document.body.appendChild(script);
    };

    parasponsive.blogFunctions = function ($items) {

        $items = $items || $('body');

        var $gallerySlider = $items.find('.blog-gallery').bxSlider({
            nextText: '<i class="icon-chevron-right"></i>',
            prevText: '<i class="icon-chevron-left"></i>',
            minSlides: 1,
            moveSlides: 1,
            slideMargin: 10
        });

        $items.find("li.post").fitVids();

        $items.find('.back2top').click(function () {
            $('html, body').animate({scrollTop: 0}, 'slow');
            return false;
        });
    };

    /**
     *
     */


    parasponsive.blogLoadMore = function () {
        var $button = $("#blogmore"),
            _this = this;

        if (!$button.length) return;

        $button.find("a").click(function (event) {
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: adminAjax,
                data: {action: "blogload", offset: $("#bloglist li.post").length },
                dataType: 'json',
                success: function (response) {
                    var $items = $(response.html),
                        $blog = $("#bloglist");

                    _this.blogFunctions($items);
                    $blog.append($items);
                    $blog.find('li.post .entry').fitVids();

                    if (response["nomoreposts"]) {
                        $button.remove();
                    }
                },
                error: function (response) {

                }
            });
        });
    };

    /**
     *
     */

    parasponsive.backToTop = function () {
        var backToTop = $("#blog .back2top");
        backToTop.hide();

        $(window).scroll(function () {
            if ($(window).scrollTop() > 100) {
                backToTop.fadeIn();
            } else {
                backToTop.fadeOut();
            }
        });
    };

    /**
     *
     */

    parasponsive.initWoo = function () {

        if (!($('body').hasClass('woocommerce'))) {

            $('.cart-wrapper').remove();
            return;
        }

        var $cartButton = $('.ggt-cart-button');

        $("#menu_back .container").append(' <div class="cart-wrapper">' +
            '<div class="ggt-cart-button"><i class="icon-shopping-cart"></i><span class="cartnum"></span></div>' +
            '<div class="ggt-cart">' +
            '<div class="widget_shopping_cart_content">No products in cart</div>' +
            '</div>' +
            '</div>');

        var $cart = $('.ggt-cart');

        var $cartCount = $(".cart-wrapper").find(".cartnum");

        setInterval(function () {
            var $quantity = $(".total .amount");
            $cartCount.html($quantity.html());
        }, 1000);

        $('.widget_shopping_cart_content').bind("DOMNodeInserted", function () {
            $cartCount.html($cart.find(".quantity").text());
        });

        setTimeout(function () {
            $('.zoomContainer').eq(0).css('z-index', 99);
        }, 1000);

        $('.cart-wrapper').show();
    };

    /**
     *  init bxSliders
     */

    parasponsive.initCarousels = function () {

        var winW = $(window).width(),
            col = 4,
            sliders = [],
            $serviceCarousel = $('.mycarousel'),
            $teamCarousel = $('.mycarousel2'),
            $wooCarousel = $('.mycarousel3')
            ;

        function calcCol() {
            winW = $(window).width();
            if (winW <= 480) col = 1;
            else if (winW <= 768 && winW > 480) col = 2;
            else if (winW <= 1024 && winW > 768) col = 3;
            else if (winW > 1024) col = 4;
        }
        calcCol(); // intial calculation

        var sliderOptions = {
                nextText: '<i class="icon-chevron-right"></i>',
                prevText: '<i class="icon-chevron-left"></i>',
                slideWidth: 270,
                minSlides: 1,
                moveSlides: 1,
                maxSlides: col,
                slideMargin: 10
            }
            ;

        function initCarousel($item) {
            var $this = $item,
                options = $.extend(true, { // add custom slider load callback
                    onSliderLoad: function () { // we need this, bc we need to work with different containers each time
                        $this.parents("section").find('#loaderImage').fadeOut(); // hide preloader
                        $this.find('li').css('visibility', 'visible'); // show items
                    },
                    slideMargin: col > 1 ? 10 : 0
                }, sliderOptions),
                slider;

            if(!$item.data("bx")){ // first run, init
                slider = $item.bxSlider(options); // init BX
                $item.data("bx", slider);
            }
            else{ // reload slider with new options
                slider = $item.data("bx");
                slider.reloadSlider(options);
            }
            sliders.push(slider); // save slider object in array
        }

        function resetCarousels() {
            calcCol(); // recalculate columns
            sliderOptions.maxSlides = col;

            initCarousel($serviceCarousel);
            initCarousel($teamCarousel);
            initCarousel($wooCarousel);
        }
        $(window).on("smartresize", resetCarousels); // bind resize event
        resetCarousels(); // start
    };

    /**
     * init Portfolio loaders
     */

    parasponsive.initPortfolio = function () {

        /**
         * isotope relayout
         * @type {*|HTMLElement}
         */

        var $container = $('#container'),
            popupEnabled = window.themeOptions["port_item_pp_mod"] == 1 && window.themeOptions["lightbox_switch"] != 1;

        function reloy() {
            $container.isotope('reLayout');
        }

        var toggleVisibility = function () {
        }; // use dummy function, if no nicescroll

        if (window.themeOptions["nicescroll_switch"] == 1 ) {
            var vis = true; // nicescroll flag

            toggleVisibility = function () { // redefine callback function
                vis = !vis;
                var ns = $.nicescroll;
                (vis) ? ns.show() : ns.hide();
            }
        }

        var bindMagnificPopup = function () {}; // dummy function
        // magnific popup init

        if (popupEnabled) {
            bindMagnificPopup = function () { // redefine the callback
                var $popupItems = $('.portfolio_pop, .portfolio_img_pop');

                $popupItems.magnificPopup({
                    type: 'ajax',
                    callbacks: {
                        open: function () {
                            toggleVisibility();
                        },
                        close: function () {
                            toggleVisibility();
                        }
                    }
                });
            }
        }
        bindMagnificPopup(); // run it

        var $loadMore = $('.load_more'),
            $filters = $("#filters"),
            category = '';

        function getActiveFilter(){
            var cat = false;
            if($filters.length){
                var $filterActive = $filters.find("a.selected");
                if($filterActive.length){
                    cat = $filterActive.attr("data-option-value");
                    cat = cat.replace(".", "");
                }
            }
            return cat;
        }

        // what to do after loading items

        function ajaxLoadMoreHandler(response) {
            if (!response.postsLeft && !window.ajaxLoadingCategory) { // no more portfolio at all
                $loadMore.hide();
            }
            else if(!response.postsLeft && window.ajaxLoadingCategory){
                var $senderLink = $filters.find('a[data-option-value=".' + window.ajaxLoadingCategory + '"]');
                if($senderLink.length){
                    $senderLink.addClass("no-more-posts");
                }
                $loadMore.hide();
            }
            window.ajaxLoadingCategory = false; // unset the flag category

            var $newEls = $(response.html);

            $container.isotope('insert', $newEls, function(){
                window.resetPortfolioIsotope();
            });
            bindMagnificPopup();
        }

        function loadMoreClickHandler(event) {
            var currentPosts = '',
                $items = $container.find(".iso_inner")
                ;

            /**
             * Category handler
             */

            category = getActiveFilter();
            if(category && category != "*"){
                window.ajaxLoadingCategory = category;
            }

            $items.each(function(index, value){
                var prefix = index == 0 ? '' : ',';
                currentPosts += prefix + $(this).attr("data-id");
            });

            var data = {
                category: category,
                loaded: currentPosts
            };

            $.ajax({
                url: $(this).attr('href'),
                data: data,
                type: "POST",
                dataType: 'json',
                cache: false
            }).done(function (response) {
                ajaxLoadMoreHandler(response);
            });
            return false;
        }

        $loadMore.click(loadMoreClickHandler);
    };

    /**
     *
     */

    parasponsive.retinaLogo = function () {
        var retina = window.devicePixelRatio > 1,
            $logo = $("#logo"),
            $logoImg = $logo.find('img'),
            options = window.themeOptions
            ;

        if (options['logo_retina'] && options['logo_retina_w'] && options['logo_retina_h']) {
            if (options['logo_min'] != 1) {
                if (retina) {
                    $logoImg.attr('src', options["logo_retina"]);
                    $logoImg.attr('width', options["logo_retina_w"]);
                    $logoImg.attr('height', options["logo_retina_h"]);
                }
            }
        }
        if (options['logo_min'] == 1) {
            var lw = $logoImg.width();
            $logo.css('max-width', lw + 'px');
        }
    };

    /**
     * menu navigation
     */

    parasponsive.menuNav = function () {
        var $stNav = $('#menu_current'),
            headHeight = $('#home').outerHeight(),

            nav = $stNav.parent('nav'),
            menu = $stNav.next('ul')
            ;
        nav.mouseenter(function () {
            $stNav.addClass('hide');
            menu.addClass('opened');
            menu.find('li').on('click', function () {
                menu.removeClass('opened');
                $stNav.removeClass('hide');
            });
            return false;
        })
            .mouseleave(function () {
                menu.removeClass('opened');
                $stNav.removeClass('hide');
                return false;
            });

        $(document).scroll(function () { // WTF?

            if ($(document).scrollTop() >= headHeight) {
                // Active scrollNav Li
                $('.waypoint').each(function () {
                    var $el = $(this),
                        elId = $el.attr('id'),
                        elText = $('.i_' + elId).html()
                        ;

                    $el.waypoint(function (direction) {
                        if (direction === 'down' && elId) {
                            $stNav.html(elText);
                            $('.nav.js').find('li').removeClass('current');
                            $('.i_' + elId).addClass('current');
                        }
                        else if (direction === 'up' && elId) {
                            $stNav.html(elText);
                            $('.nav.js').find('li').removeClass('current');
                            $('.i_' + elId).addClass('current');
                        }
                    }, { offset: '0' });
                });
            } else {
                $stNav.html('<a href="#home" class="menu_1"><span class="menu_name">Home</span><span class="hover"><span class="arr"></span></span></a>');
            }
        });
    };

    /**
     * nice scroll
     */

    parasponsive.niceScrollInit = function () {

        var options = window.themeOptions,
            $window = $(window)
            ;

        function startNiceScroll() {
            $("html").niceScroll({
                background: options['nicescroll_bg'],
                scrollspeed: 30,
                mousescrollstep: 15,
                cursorwidth: 15,
                cursorborder: 0,
                cursorcolor: options['nicescroll_fg'],
                cursorborderradius: 6,
                autohidemode: false
            });
        }

        var $smoothActive = $('body').attr('data-smooth-scrolling');
        if ($smoothActive == 1 && $window.width() > 1024) {
            startNiceScroll();
        }
        $('#portfolio_box').scroll(function () {
            $("html").niceScroll({
                enablescrollonselection: false
            });
        });
    };

    /**
     * reset border
     */

    parasponsive.initBorders = function () {

        var $window = $(window),
            $topBox = $('.top_box'),
            $botBox = $('.bot_box'),
            nicescrollOffset = window.themeOptions["nicescroll_switch"] == 1 ? 15 : 0
            ;

        function resetBorders() {
            var w = $window.width(),
                ipadw = w >= 768 ? w - nicescrollOffset : w;
            $topBox.css('border-left-width', w);
            $botBox.css('border-right-width', w);
        }

        $window.on('smartresize', resetBorders);
        resetBorders();

        /**
         * Reset paddings on intro sections
         * @type {*|HTMLElement}
         */

        var $introPad = $(".intro_pad"),
            sliderOn = $("#home").hasClass("slider-on"),
            introOn = $("section#pages").hasClass("intro-on"),
            $header = $("header")
            ;

        function resetPaddings($item) {
            var headerOffset = !sliderOn ? $header.height() : 0,
                padding = $item.width() / 7,
                $parentSection = $item.parents("li"),
                firstSection = $parentSection.hasClass("section2"),
                headerPadding =  firstSection ? headerOffset : 0
                ;

            $item.css({
                "padding-top": padding + headerPadding + "px",
                "padding-bottom": padding + "px"
            });

            if(!introOn && firstSection){ // add more padding if menu is too high
                var $mainBox = $parentSection.find(".man_box"),
                    $midBox = $mainBox.find(".mid_box");
                $midBox.css({"padding-top": headerPadding + 60 + "px"});
            }
        }

        $introPad.each(function () {
            var $pad = $(this);
            $(window).on("smartresize", function () {
                resetPaddings($pad);
            });
            resetPaddings($pad);
        });
    };

    /**
     * Init ready
     */

    $(document).ready(function () {
        parasponsive.retinaLogo();
        parasponsive.initBorders();
        parasponsive.menuNav();
        parasponsive.initPortfolio();
        parasponsive.initCarousels();
        parasponsive.niceScrollInit();
    });

    /**
     * Init load
     */

    $(window).load(function () {
        parasponsive.initSectionGMap();
        parasponsive.initWoo();
        parasponsive.blogLoadMore();
        parasponsive.blogFunctions();
        parasponsive.backToTop();
    });

})(jQuery);