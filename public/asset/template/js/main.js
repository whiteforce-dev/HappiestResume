! function (r) {
    "use strict";
    var i = r("body");

    function s() {
        var a = r("#page-ajax-loaded");

        function t() {
            a.removeClass("fadeOutLeft closed"), a.show(), r("body").addClass("ajax-page-visible")
        }
        var o = r(".ajax-page-load").each(function () {
            if (o = r(this).attr("href"), location.hash == location.hash.split("/")[0] + "/" + o.substr(0, o.length - 5)) {
                var e = r(this).attr("href");
                return t(), a.load(e), !1
            }
        });
        r(document).on("click", "#ajax-page-close-button", function (e) {
            e.preventDefault(), r("#page-ajax-loaded").addClass("fadeOutLeft closed"), r("body").removeClass("ajax-page-visible"), setTimeout(function () {
                r("#page-ajax-loaded.closed").html(""), a.hide()
            }, 500), location.hash = location.hash.split("/")[0]
        }).on("click", ".ajax-page-load", function () {
            var e = location.hash.split("/")[0] + "/" + r(this).attr("href").substr(0, r(this).attr("href").length - 5);
            return location.hash = e, t(), !1
        })
    }

    function d() {
        150 < r(i).scrollTop() ? r(".lmpixels-scroll-to-top").removeClass("hidden-btn") : r(".lmpixels-scroll-to-top").addClass("hidden-btn")
    }
    r(function () {
        r("#contact_form").validator(), r("#contact_form").on("submit", function (e) {
            if (!e.isDefaultPrevented()) {
                return r.ajax({
                    type: "POST",
                    url: "contact_form/contact_form.php",
                    data: r(this).serialize(),
                    success: function (e) {
                        var a = "alert-" + e.type,
                            t = e.message,
                            o = '<div class="alert ' + a + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + t + "</div>";
                        a && t && (r("#contact_form").find(".messages").html(o), r("#contact_form")[0].reset())
                    }
                }), !1
            }
        })
    }), r(window).on("load", function () {
        var e, a, t;
        r(".preloader").fadeOut(800, "linear"), e = r(window).width(), a = "", t = r("#page_container").attr("data-animation"), (a = r(991 < e ? ".page-container" : ".site-main")).addClass("animated " + t), r(".page-scroll").addClass("add-prespective"), a.addClass("transform3d"), setTimeout(function () {
            r(".page-scroll").removeClass("add-prespective"), a.removeClass("transform3d")
        }, 1e3)
    }).on("hashchange", function (e) {
        location.hash && s()
    }), r(document).on("ready", function () {
        var l = 15 / r(document).height(),
            n = 15 / r(document).width();
        r("body").on("mousemove", function (e) {
            var a = e.pageX - r(document).width() / 2,
                t = e.pageY - r(document).height() / 2,
                o = n * a * -1,
                i = l * t * -1;
            if (r(".page-container").hasClass("bg-move-effect")) var s = r(".home-photo .hp-inner:not(.without-move), .lm-animated-bg");
            else s = r(".home-photo .hp-inner:not(.without-move)");
            s.addClass("transition"), s.css({
                "background-position": "calc( 50% + " + o + "px ) calc( 50% + " + i + "px )"
            }), setTimeout(function () {
                s.removeClass("transition")
            }, 300)
        }).scroll(function () {
            d()
        });
        var e = r(".portfolio-grid"),
            a = r("#portfolio-gallery-grid");
        a.imagesLoaded(function () {
            a.masonry()
        }), e.imagesLoaded(function () {
            r(".portfolio-content").each(function () {
                r(this);
                var e = r(this).attr("id"),
                    a = r("#" + e + " .portfolio-grid"),
                    t = r("#" + e + " .portfolio-filters"),
                    o = r("#" + e + " .portfolio-filters .filter");
                a && (a.shuffle({
                    speed: 450,
                    itemSelector: "figure"
                }), r(".site-auto-menu").on("click", "a", function (e) {
                    a.shuffle("update")
                }), t.on("click", ".filter", function (e) {
                    a.shuffle("update"), e.preventDefault(), o.parent().removeClass("active"), r(this).parent().addClass("active"), a.shuffle("shuffle", r(this).attr("data-group"))
                }))
            })
        }), r(".portfolio-page-carousel").each(function () {
            r(this).imagesLoaded(function () {
                r(".portfolio-page-carousel").owlCarousel({
                    smartSpeed: 1200,
                    items: 1,
                    loop: !0,
                    dots: !0,
                    nav: !0,
                    navText: !1,
                    autoHeight: !0,
                    margin: 10
                })
            })
        });
        var t, o = r(".blog-masonry");
        o.imagesLoaded(function () {
            o.masonry({
                itemSelector: ".item",
                resize: !1
            })
        }), r(".menu-toggle").on("click", function () {
            r(".site-nav").addClass("animate"), r(".site-nav").toggleClass("mobile-menu-hide")
        }), r(".text-rotation").owlCarousel({
            loop: !0,
            dots: !1,
            nav: !1,
            margin: 10,
            items: 1,
            autoplay: !0,
            autoplayHoverPause: !1,
            autoplayTimeout: 3800,
            animateOut: "fadeOut",
            animateIn: "fadeIn"
        }), r(".testimonials.owl-carousel").owlCarousel({
            nav: !1,
            items: 3,
            loop: !1,
            navText: !1,
            margin: 25,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1200: {
                    items: 2
                }
            }
        }), r(".clients.owl-carousel").imagesLoaded().owlCarousel({
            nav: !1,
            items: 2,
            loop: !1,
            navText: !1,
            margin: 10,
            autoHeight: !1,
            responsive: {
                0: {
                    items: 2
                },
                768: {
                    items: 4
                },
                1200: {
                    items: 6
                }
            }
        }), i.magnificPopup({
            fixedContentPos: !1,
            delegate: "a.lightbox",
            type: "image",
            removalDelay: 300,
            mainClass: "mfp-fade",
            image: {
                titleSrc: "title",
                gallery: {
                    enabled: !0
                }
            },
            iframe: {
                markup: '<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe><div class="mfp-title mfp-bottom-iframe-title"></div></div>',
                patterns: {
                    youtube: {
                        index: "youtube.com/",
                        id: null,
                        src: "%id%?autoplay=1"
                    },
                    vimeo: {
                        index: "vimeo.com/",
                        id: "/",
                        src: "//player.vimeo.com/video/%id%?autoplay=1"
                    },
                    gmaps: {
                        index: "//maps.google.",
                        src: "%id%&output=embed"
                    }
                },
                srcAction: "iframe_src"
            },
            callbacks: {
                markupParse: function (e, a, t) {
                    a.title = t.el.attr("title")
                }
            }
        }), r(".ajax-page-load-link").magnificPopup({
            type: "ajax",
            removalDelay: 300,
            mainClass: "mfp-fade",
            gallery: {
                enabled: !0
            }
        }), r(".portfolio-page-wrapper .portfolio-grid").each(function () {
            r(this).magnificPopup({
                delegate: "a.gallery-lightbox",
                type: "image",
                gallery: {
                    enabled: !0
                }
            })
        }), r(".form-control").val(""), r(".form-control").on("focusin", function () {
            r(this).parent(".form-group").addClass("form-group-focus")
        }), r(".form-control").on("focusout", function () {
            0 === r(this).val().length && r(this).parent(".form-group").removeClass("form-group-focus")
        }), r("body").append('<div id="page-ajax-loaded" class="page-portfolio-loaded animated fadeInLeft" style="display: none"><div class="preloader-portfolio"><div class="preloader-animation"><div class="preloader-spinner"></div></div></div></div>'), s(), r(".sidebar-toggle").on("click", function () {
            r("#blog-sidebar").toggleClass("open"), r(this).toggleClass("open")
        }), r(".lmpixels-scroll-to-top").click(function () {
            return r("body,html").animate({
                scrollTop: 0
            }, 400), !1
        }), r("#map").googleMap({
            zoom: 16
        }), r("#map").addMarker({
            address: "S601 Townsend Street, San Francisco, California, USA"
        }), d(), t = "", r(".skill-container").each(function () {
            var e = r(this).attr("data-value");
            if (101 <= e && (e = "100"), void 0 !== e) {
                var a = r(this).attr("id");
                t += "#" + a + " .skill-percentage { width: " + e + "%; } "
            }
        }), r("head").append('<style data-styles="leven-theme-skills-css" type="text/css">' + t + "</style>")
    })
}(jQuery);