! function(a) {
    var b = /iPhone/i,
        c = /iPod/i,
        d = /iPad/i,
        e = /(?=.*\bAndroid\b)(?=.*\bMobile\b)/i,
        f = /Android/i,
        g = /IEMobile/i,
        h = /(?=.*\bWindows\b)(?=.*\bARM\b)/i,
        i = /BlackBerry/i,
        j = /BB10/i,
        k = /Opera Mini/i,
        l = /(?=.*\bFirefox\b)(?=.*\bMobile\b)/i,
        m = new RegExp("(?:Nexus 7|BNTV250|Kindle Fire|Silk|GT-P1000)", "i"),
        n = function(a, b) {
            return a.test(b)
        },
        o = function(a) {
            var o = a || navigator.userAgent,
                p = o.split("[FBAN");
            return "undefined" != typeof p[1] && (o = p[0]), this.apple = {
                phone: n(b, o),
                ipod: n(c, o),
                tablet: !n(b, o) && n(d, o),
                device: n(b, o) || n(c, o) || n(d, o)
            }, this.android = {
                phone: n(e, o),
                tablet: !n(e, o) && n(f, o),
                device: n(e, o) || n(f, o)
            }, this.windows = {
                phone: n(g, o),
                tablet: n(h, o),
                device: n(g, o) || n(h, o)
            }, this.other = {
                blackberry: n(i, o),
                blackberry10: n(j, o),
                opera: n(k, o),
                firefox: n(l, o),
                device: n(i, o) || n(j, o) || n(k, o) || n(l, o)
            }, this.seven_inch = n(m, o), this.any = this.apple.device || this.android.device || this.windows.device || this.other.device || this.seven_inch, this.phone = this.apple.phone || this.android.phone || this.windows.phone, this.tablet = this.apple.tablet || this.android.tablet || this.windows.tablet, "undefined" == typeof window ? this : void 0
        },
        p = function() {
            var a = new o;
            return a.Class = o, a
        };
    "undefined" != typeof module && module.exports && "undefined" == typeof window ? module.exports = o : "undefined" != typeof module && module.exports && "undefined" != typeof window ? module.exports = p() : "function" == typeof define && define.amd ? define("isMobile", [], a.isMobile = p()) : a.isMobile = p()
}(this);



if (!AUDIT) {

    if (!window.jQuery) {
        var divanim = document.querySelectorAll("[data-anim]");
        for (var i = 0; i < divanim.length; i++) {
            divanim[i].style.opacity = 1;
        }
    }


    jQuery(document).ready(function($) {
        var $timeline_block = $('.cd-timeline-block');

        //hide timeline blocks which are outside the viewport
        $timeline_block.each(function() {
            if ($(this).offset().top > $(window).scrollTop() + $(window).height() * 0.75) {
                $(this).find('.cd-timeline-img, .cd-timeline-content, .imgtime').addClass('is-hidden');
            }
        });

        //on scolling, show/animate timeline blocks when enter the viewport
        $(window).on('scroll', function() {
            $timeline_block.each(function() {
                if ($(this).offset().top <= $(window).scrollTop() + $(window).height() * 0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden')) {
                    $(this).find('.cd-timeline-img, .cd-timeline-content, .imgtime').removeClass('is-hidden').addClass('bounce-in');
                }
            });
        });




    });


    /*new TypeIt(".hero-title", {
	  strings: "Soyez enfin visible sur Google et développez votre clientèle !",
	  speed: 60,
	  waitUntilVisible: false,
	}).go();
*/

    jQuery('.slide-news').appendTo('.banniere1');



    jQuery(document).ready(function($) {
        var distance_menu = 90;
        $(window).scroll(function() {
            if ($(this).scrollTop() > distance_menu) {
                $('.tete').addClass('fixed');
            } else {
                $('.tete').removeClass('fixed');
            }
        });

        var lazyLoadInstance = new LazyLoad({
            elements_selector: ".lazy"
        });
        lazyLoadInstance.loadAll();
        if (ACCUEIL) {
            function draw_lines() {
                /**********line*********/
                var dot1990 = $('#dot1990');
                var dot20091 = $('#dot2009-1');
                var dot20092 = $('#dot2009-2');
                var dot20093 = $('#dot2009-3');
                var dot2014 = $('#dot2014');
                var dot2016 = $('#dot2016');
                var dot2017 = $('#dot2017');
                var dots2017 = $('#dots2017');
                var dots20172 = $('#dots2017-2');
                var dot2018 = $('#dot2018');
                var dot2019 = $('#dot2019');
                var dot2020 = $('#dot2020');
                var dot2021 = $('#dot2021');
                var dot2022 = $('#dot2022');
                var dot2023 = $('#dot2023');
                var dot2024 = $('#dot2024');
                var dot2025 = $('#dot2025');
                //$('.main-page').line(dot1990.offset().top, dot1990.offset().left, dot20091.offset().top, dot20091.offset().left, {color:"red", zindex:1});
                var childPos = dot1990.offset();
                var parentPos = dot1990.parents('.dotencart').offset();
                var childOffset = {
                    top: childPos.top - parentPos.top,
                    left: childPos.left - parentPos.left
                }
                var childPos2 = dot20091.offset();
                var parentPos2 = dot20091.parents('.dotencart').offset();
                var childOffset2 = {
                    top: childPos2.top - parentPos2.top,
                    left: childPos2.left - parentPos2.left
                }
                var childPos3 = dot20092.offset();
                var parentPos3 = dot20092.parents('.dotencart').offset();
                var childOffset3 = {
                    top: childPos3.top - parentPos3.top,
                    left: childPos3.left - parentPos3.left
                }
                var childPos4 = dot20093.offset();
                var parentPos4 = dot20093.parents('.dotencart').offset();
                var childOffset4 = {
                    top: childPos4.top - parentPos4.top,
                    left: childPos4.left - parentPos4.left
                }
                var childPos5 = dot2014.offset();
                var parentPos5 = dot2014.parents('.dotencart').offset();
                var childOffset5 = {
                    top: childPos5.top - parentPos5.top,
                    left: childPos5.left - parentPos5.left
                }
                var childPos6 = dot2016.offset();
                var parentPos6 = dot2016.parents('.dotencart').offset();
                var childOffset6 = {
                    top: childPos6.top - parentPos6.top,
                    left: childPos6.left - parentPos6.left
                }
                var childPos8 = dot2018.offset();
                var parentPos8 = dot2018.parents('.dotencart').offset();
                var childOffset8 = {
                    top: childPos8.top - parentPos8.top,
                    left: childPos8.left - parentPos8.left
                }
                var childPos9 = dot2019.offset();
                var parentPos9 = dot2019.parents('.dotencart').offset();
                var childOffset9 = {
                    top: childPos9.top - parentPos9.top,
                    left: childPos9.left - parentPos9.left
                }
                var childPos10 = dot2020.offset();
                var parentPos10 = dot2020.parents('.dotencart').offset();
                var childOffset10 = {
                    top: childPos10.top - parentPos10.top,
                    left: childPos10.left - parentPos10.left
                }
                var childPos11 = dot2021.offset();
                var parentPos11 = dot2021.parents('.dotencart').offset();
                var childOffset11 = {
                    top: childPos11.top - parentPos11.top,
                    left: childPos11.left - parentPos11.left
                }
                var childPos12 = dot2022.offset();
                var parentPos12 = dot2022.parents('.dotencart').offset();
                var childOffset12 = {
                    top: childPos12.top - parentPos12.top,
                    left: childPos12.left - parentPos12.left
                }
                var childPos15 = dot2025.offset();
                var parentPos15 = dot2025.parents('.dotencart').offset();
                var childOffset15 = {
                    top: childPos15.top - parentPos15.top,
                    left: childPos15.left - parentPos15.left
                }
                $('.dotencart').line(childOffset.left + 6, childOffset.top + 6, childOffset2.left + 6, childOffset2.top + 6, {
                    color: "#fff",
                    zindex: 1
                });
                $('.dotencart').line(childOffset2.left + 6, childOffset2.top + 6, childOffset3.left + 6, childOffset3.top + 6, {
                    color: "#fff",
                    zindex: 1
                });
                $('.dotencart').line(childOffset3.left + 6, childOffset3.top + 6, childOffset4.left + 6, childOffset4.top + 6, {
                    color: "#fff",
                    zindex: 1
                });
                $('.dotencart').line(childOffset4.left + 6, childOffset4.top + 6, childOffset5.left + 6, childOffset5.top + 6, {
                    color: "#fff",
                    zindex: 1
                });
                $('.dotencart').line(childOffset5.left + 6, childOffset5.top + 6, childOffset6.left + 6, childOffset6.top + 6, {
                    color: "#fff",
                    zindex: 1
                });
                $('.dotencart').line(childOffset6.left + 4, childOffset6.top + 4, childOffset8.left + 6, childOffset8.top, {
                    color: "#fff",
                    zindex: 1
                });
                $('.dotencart').line(childOffset8.left + 8, childOffset8.top + 12, childOffset9.left + 6, childOffset9.top + 2, {
                    color: "#fff",
                    zindex: -5
                });
                $('.dotencart').line(childOffset9.left + 6, childOffset9.top + 12, childOffset10.left + 6, childOffset10.top + 2, {
                    color: "#fff",
                    zindex: 1
                });
                $('.dotencart').line(childOffset10.left + 6, childOffset10.top + 12, childOffset11.left + 6, childOffset11.top + 2, {
                    color: "#fff",
                    zindex: 1
                });
                $('.dotencart').line(childOffset11.left + 6, childOffset11.top + 12, childOffset12.left + 6, childOffset12.top + 2, {
                    color: "#fff",
                    zindex: 1
                });


                $('.dotencart').line(childOffset12.left + 6, childOffset12.top + 12, childOffset15.left + 6, childOffset15.top + 2, {
                    color: "#fff",
                    zindex: 1
                });
                /*$('.dotencart').line(childOffset12.left + 6, childOffset12.top + 12, childOffset12.left + 6, childOffset12.top + 2, {
                	color: "#fff",
                	zindex: 1
                });*/
            }

        }
        menuRight = document.getElementById('cbp-spmenu-s2');
        showRight = document.getElementById('showRight');
        body = document.body;
        $('body').addClass('cbp-spmenu-push');
        showRight.onclick = function() {
            classie.toggle(this, 'active');
            classie.toggle(menuRight, 'cbp-spmenu-open');
            $('body').toggleClass('cbp-spmenu-push-toleft');
        };

        function disableOther(button) {
            if (button !== 'showRight') {
                classie.toggle(showRight, 'disabled');
            }
            if (button !== 'showRightPush') {
                classie.toggle(showRightPush, 'disabled');
            }
        }
        if (!isMobile.any) {
            var $encart = $('.parallax'),
                scrolledY = false,
                decalage = 0;
            $(window).scroll(function(e) {
                scrolledY = $(window).scrollTop();
                decalage = scrolledY * -0.1;
                $encart.css('top', decalage + 'px');
            });
        }
        var divs = $('.parallaxOpacity'),
            limit = 200;
        $(window).on('scroll', function() {
            var st = $(this).scrollTop();
            if (st <= limit) {
                divs.css({
                    'opacity': (1 - st / limit)
                });
            }
        });
        $(".scrollbars, .scrollbars-ref").mCustomScrollbar({
            scrollInertia: 0
        });


        /* call Tracker */
        $('.callTracker').click(function() {
            $(this).addClass("active");
            $(this).parent().find('.callTracker').addClass("active");
        });
        if (isMobile.phone) {
            $(".callTracker").each(function() {
                $(this).addClass("active");
                $(this).children('.t_phone').contents().unwrap().wrap('<a/>');
                $(this).children('a').addClass("t_phone");
                $(this).children('.t_phone').attr('href', 'tel:' + $(this).children('.t_phone').html());
                var page1 = $(this).children('.t_affiche').data("page");
                var zone1 = $(this).children('.t_affiche').data("zone");
                var source1 = $(this).children('.t_affiche').data("source");
                $(this).children('.t_phone').attr('rel', 'nofollow').attr('data-page', page1).attr('data-zone', zone1).attr('data-source', source1);;
            });
        }

        /********menu2*********/
        //toggle 3d navigation
        /* $('.btn-fermer').on('click', function(){
           toggle3dBlock(!$('.cd-header').hasClass('nav-is-visible'));
         });*/
        //toggle 3d navigation
        $('.navh .menu_principal .menu-item-103 a, .cd-3d-nav-trigger').on('click', function() {
            toggle3dBlock(!$('.cd-header').hasClass('nav-is-visible'));
            return false;
        });

        $('.navh .menu_principal .menu-item-131 a, .cd-3d-nav-trigger-v2').on('click', function() {
            toggle3dBlockv2(!$('.cd-header').hasClass('nav-is-visible'));
            return false;
        });

        //select a new item from the 3d navigation
        $('.menu_principal2').on('click', 'a', function() {
            var selected = $(this);
            selected.parent('li').addClass('cd-selected').siblings('li').removeClass('cd-selected');
            updateSelectedNav('close');
        });

        $('.menu_principal3').on('click', 'a', function() {
            var selected = $(this);
            selected.parent('li').addClass('cd-selected').siblings('li').removeClass('cd-selected');
            updateSelectedNav('close');
        });

        $(window).on('resize', function() {
            window.requestAnimationFrame(updateSelectedNav);
            jQuery('#loader').fadeOut('1000');
            // draw_lines();
        });

        function toggle3dBlock(addOrRemove) {
            if (typeof(addOrRemove) === 'undefined') addOrRemove = true;
            $('.cd-header').toggleClass('nav-is-visible', addOrRemove);
            $('.cd-3d-nav-container').toggleClass('nav-is-visible', addOrRemove);
            $('main').toggleClass('nav-is-visible', addOrRemove).one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
                //fix marker position when opening the menu (after a window resize)
                addOrRemove && updateSelectedNav();
            });
        }

        function toggle3dBlockv2(addOrRemove) {
            if (typeof(addOrRemove) === 'undefined') addOrRemove = true;
            $('.cd-header').toggleClass('nav-is-visible', addOrRemove);
            $('.cd-3d-nav-container-v2').toggleClass('nav-is-visible', addOrRemove);
            $('main').toggleClass('nav-is-visible', addOrRemove).one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
                //fix marker position when opening the menu (after a window resize)
                addOrRemove && updateSelectedNav();
            });
        }

        //this function update the .cd-marker position
        function updateSelectedNav(type) {
            if ($('.cd-selected').length > 1) {
                var selectedItem = $('.cd-selected'),
                    selectedItemPosition = selectedItem.index() + 1,
                    leftPosition = selectedItem.offset().left,
                    backgroundColor = selectedItem.data('color'),
                    marker = $('.cd-marker');
                marker.removeClassPrefix('color').addClass('color-' + selectedItemPosition).css({
                    'left': leftPosition,
                });
                if (type == 'close') {
                    marker.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
                        toggle3dBlock(false);
                    });
                }
            }
        }


        $.fn.removeClassPrefix = function(prefix) {
            this.each(function(i, el) {
                var classes = el.className.split(" ").filter(function(c) {
                    return c.lastIndexOf(prefix, 0) !== 0;
                });
                el.className = $.trim(classes.join(" "));
            });
            return this;
        };
        
        /**************chat************/
        if (PATH_MODULE == "service.list") {
            function responsiveChat(element) {
                //console.log('test');
                $(element).html('<form class="chat"><span></span><div class="messages"></div><input type="text" placeholder="Message"><input type="submit" value="Envoyer"></form>');

                function showLatestMessage() {
                    $(element).find('.messages').scrollTop($(element).find('.messages').height());
                }
                showLatestMessage();
                $(element + ' input[type="text"]').keypress(function(event) {
                    if (event.which == 13) {
                        event.preventDefault();
                        $(element + ' input[type="submit"]').click();
                    }
                });
                $(element + ' input[type="submit"]').click(function(event) {
                    event.preventDefault();
                    var message = $(element + ' input[type="text"]').val();
                    if ($(element + ' input[type="text"]').val()) {
                        var d = new Date();
                        var clock = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
                        var month = d.getMonth() + 1;
                        var day = d.getDate();
                        var currentDate = (("" + day).length < 2 ? "0" : "") + day + "." + (("" + month).length < 2 ? "0" : "") + month + "." + d.getFullYear() + "&nbsp;&nbsp;" + clock;
                        $(element + ' div.messages').append('<div class="message"><div class="myMessage"><p>' + message + "</p><date>" + currentDate + "</date></div></div>");
                        setTimeout(function() {
                            $(element + ' > span').addClass("spinner");
                        }, 100);
                        setTimeout(function() {
                            $(element + ' > span').removeClass("spinner");
                        }, 2000);
                    }
                    $(element + ' input[type="text"]').val("");
                    showLatestMessage();
                });
            }

            function responsiveChatPush(element, sender, origin, date, message) {
                var originClass;
                if (origin == 'me') {
                    originClass = 'myMessage';
                } else {
                    originClass = 'fromThem';
                }
                $(element + ' .messages').append('<div class="message"><div class="' + originClass + '"><p>' + message + '</p><date><b>' + sender + '</b> ' + date + '</date></div></div>');
                $(".message").each(function(index) {

                    $(window).scroll(function() {
                        contenus_animes();
                    });
                    $(this).addClass("index_" + index);
                    $('.message.index_0').attr("data-anim", "fadeInRight").addClass("delay-200");
                    $('.message.index_1').attr("data-anim", "fadeInLeft").addClass("delay-600");
                    $('.message.index_2').attr("data-anim", "fadeInRight").addClass("delay-1000");
                    $('.message.index_3').attr("data-anim", "fadeInLeft").addClass("delay-1600");
                });
            }
            /* Activating chatbox on element */
            responsiveChat('.responsive-html5-chat');
            /* Let's push some dummy data */
            responsiveChatPush('.chat', 'Marie', 'me', '08.01.2019 14:30:7', 'Bonjour. J\'aimerai faire un massage samedi à 17h');
            responsiveChatPush('.chat', 'John', 'you', '08.01.2016 14:31:22', 'Bien sûr Mme Marie. Voulez-vous profiter pour faire un soin de visage ?');
            responsiveChatPush('.chat', 'Marie', 'me', '08.01.2019 14:33:32', 'Oui bonne idée.');
            responsiveChatPush('.chat', 'John', 'you', '08.01.2019 14:36:40', 'RDV samedi 17h alors !');
        }
        /**************chat************/
        /* DEMO */
        if (parent == top) {
            $("a.article").show();
        }
        //************************* ********************************* *************************
        if (!isMobile.any) {
            $('.slogan').append($('.navigation-galeries'));
        }
        $('div.form-actions input.btn-primary').appendTo('.form-horizontal div.col-md-8:last');
        if (!(IS_MOBILE)) {
            $('.contact form.form-horizontal').wrapInner('<div class="row"><div class="formulaire gauche col-md-6 nopad-l nopad-sm nopad-xs"></div></div>');
            $('#contact_5-element-1,#contact_5-element-2, #contact_5-element-3, #contact_5-element-4, #contact_5-element-5, #contact_5-element-6, #contact_5-element-7, #contact_5-element-8, #contact_5-element-9, #contact_5-element-10 , #contact_5-element-11, #contact_5-element-12').after('<span class="focus-border"><i></i></span>');
            $('.contact .formulaire.gauche').after('<div class="formulaire droite col-md-6 nopad-r nopad-sm nopad-xs"></div>');
            if ((DELTA == 832) || ((DELTA == 841))) {
                $('.form-group .form-control:not(input[name="_rgpd[]"])').after('<span class="focus-border"><i></i></span>');
                //$('.uploaddiv .form-control').after('<span class="focus-border"><i></i></span>');
            }
            $('.contact .formulaire .form-group:eq(7), .contact .formulaire .form-group:eq(8), .contact .formulaire .form-group:eq(9), .contact .formulaire .form-group:eq(10), .contact .formulaire .form-group:eq(11), .contact .formulaire .form-group:eq(12), .contact .formulaire .form-group:eq(13)').appendTo('.formulaire.droite');

            $('.contact .form-group:contains("obligatoires"), .info-rgpd ').appendTo('.contact .formulaire.droite');
            if ((DELTA == 832) || ((DELTA == 841))) jQuery('.contact .formulaire.droite').prepend(jQuery('#input_file'));
        }
        $(".input-md").addClass("effect-8");
        if ($('.formulaire .alert').length) {
            var dis = 280;
            if (isMobile.any) {
                dis = 200;
            }


            var alert_ancre = Math.round($('#contact-form .formulaire.contact-footer,.formu .formulaire').offset().top) - dis;
            console.log(alert_ancre);
            setTimeout(function() {
                $('body,html').stop(false, false).animate({
                    scrollTop: alert_ancre
                }, 1000);
            }, 1000);
        }




        /*/$('#contact_5-element-9').hide();
	$('#contact_5-element-10').hide();
    $('#contact_5-element-11').hide();*/


        if (PAGESEO) {
            if (jQuery('#contact_5-element-8').val() == "Oui") {
                $('#contact_5-element-9').closest('.form-group').show();
            } else {
                $('#contact_5-element-9').closest('.form-group').hide();
            }
            $('#contact_5-element-8').on('change', function() {
                if (this.value == "Oui") {
                    $('#contact_5-element-9').closest('.form-group').show();
                } else {
                    $('#contact_5-element-9').closest('.form-group').hide();

                }
            });

        } else {
            if (jQuery('#contact_5-element-8').val() == "Oui") {
                $('#contact_5-element-9').closest('.form-group').show();
                $('#contact_5-element-10').closest('.form-group').hide();
                $('#contact_5-element-11').closest('.form-group').hide();
            } else {
                $('#contact_5-element-9').closest('.form-group').hide();
                $('#contact_5-element-11').closest('.form-group').show();
                $('#contact_5-element-10').closest('.form-group').show();
            }

            $('#contact_5-element-8').on('change', function() {
                if (this.value == "Oui") {
                    $('#contact_5-element-9').closest('.form-group').show();
                    $('#contact_5-element-10').closest('.form-group').hide();
                    $('#contact_5-element-11').closest('.form-group').hide();

                } else {
                    $('#contact_5-element-9').closest('.form-group').hide();
                    $('#contact_5-element-11').closest('.form-group').show();
                    $('#contact_5-element-10').closest('.form-group').show();

                }
            });

        }








        if (PATH_MODULE == "service.list") {
            $('.navh .menu_principal .menu-item-103').addClass('active');
        }






        $(document).keydown(function(e) {
            if (e.which == 39) {
                sudoSlider.goToSlide("next");
            } else if (e.which == 37) {
                sudoSlider.goToSlide("prev");
            }
        });
        jQuery('.header-news').appendTo('.zone-titre-header');


        if (isMobile.any) {
            $touchslide = true;
            $autoslide = false;
            $touchHandleBug = "> * :not(a)";
        } else {
            $touchslide = false;
            $autoslide = true;
            $touchHandleBug = false;
        }

        var sudoSliderfav = $(".sudo-sliderfav").sudoSlider({
            effect: "fade ", // pushInRight, fadeOutIn
            auto: $autoslide,
            speed: 400,
            pause: '6000',
            responsive: true,
            vertical: false,
            prevNext: false,
            continuous: true,
            customLink: 'a.sudolien2',
            touch: $touchslide,
            touchHandle: $touchHandleBug,
            slideCount: 1,

            initCallback: function() {
                $(".sudo-sliderfav .caption1, .sudo-sliderfav .imgslide").addClass('active');
            },
            beforeAnimation: function() {
                $(".sudo-sliderfav .caption, .sudo-sliderfav .imgslide").removeClass('active');
            },
            afterAnimation: function(x) {
                $(".sudo-sliderfav .caption, .sudo-sliderfav .imgslide").addClass('active');
                $(".sudo-sliderfav .caption, .sudo-sliderfav .imgslide" + x).addClass('active');
            },
        });
        if (sudoSliderfav.length > 0) {
            $(window).on("resize focus", function() {
                //console.log(sudoSliderfav);
                var width = $(".main-page").width();
                var orgSlideCount = sudoSliderfav.getOption("slideCount");
                var slideCount;
                if (width < 768) {
                    slideCount = 1;
                } else if (width >= 768 && width < 991) {
                    slideCount = 1;
                } else {
                    slideCount = 1;
                }
                if (slideCount != orgSlideCount) {
                    sudoSliderfav.setOption("slideCount", slideCount);
                }
            }).resize();
        }
        var sudoSlider2 = $(".sudo-slider2").sudoSlider({
            effect: "slide", // pushInRight, fadeOutIn
            auto: true,
            speed: 2000,
            pause: '6000',
            responsive: true,
            vertical: false,
            prevNext: false,
            continuous: true,
            customLink: 'a.sudolien',
            touch: true,
            numeric: true,
            initCallback: function() {
                $(".sudo-slider2 .caption1").addClass('active');
            },
            beforeAnimation: function() {
                $(".sudo-slider2 .caption").removeClass('active');
                changeWord();
            },
            afterAnimation: function(x) {
                $(".sudo-slider2 .caption").removeClass('active');
                $(".sudo-slider .caption" + x).addClass('active');
            },
            /* 
            MODE CAROUSEL : ACTIVER LES 3 LIGNES CI-DESSOUS ET SUPPRIMER LA LIGNE "effect"
            */
            /*
            numericText:['text1','text2','test3'],
            slideCount: 3, // Eléments à afficher
            moveCount:1,   // Déplacement de un en un
            */
        });
        // NAVIGATION AU CLAVIER
        $(document).keydown(function(e) {
            if (e.which == 39) {
                sudoSlider.goToSlide("next");
            } else if (e.which == 37) {
                sudoSlider.goToSlide("prev");
            }
        });
        $(".remonter").hide();
        $(window).scroll(function() {
            if ($(this).scrollTop() > 500) {
                $('.remonter').fadeIn();
            } else {
                $('.remonter').fadeOut();
            }
        });
        $('.remonter a').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        /*
        var distance_ancre = Math.round($('.corps').offset().top);
        $('.btn-descendre').click(function () {
          $('body,html').animate({ scrollTop: distance_ancre}, 800);
          return false;
        });
        */


        $('#service-91 .cell.photo.cover').attr("data-anim", "shakes");
        $('.navh .menu_principal > li').each(function() {
            if ($(this).children("ul").length) {
                $(this).wrapInner('<div style="position:relative"></div>');
            }
        });

        /**************************/
        if (PATH_MODULE == "catalogue.list") {
            var $chargement = jQuery('.infinite-scroll .chargement');
            var __siteUrl = "https://www.edconcept24.fr/";
            var __getQueryParameters = function(query) {
                //console.log(query);
                // return (query).replace(/(^\?)/, '').split("&").map(function (n) {
                // return n = n.split("="),
                // (!this[n[0]] ? this[n[0]] = n[1] : ((typeof this[n[0]] === 'object') ? this[n[0]].push(n[1]) : this[n[0]] = [this[n[0]], n[1]])),
                // this;
                // }.bind({}))[0];
                if (query == '') return {};
                var hash = {};
                var vars = query.split("&");
                for (var i = 0; i < vars.length; i++) {
                    var pair = vars[i].split("=");
                    var k = decodeURIComponent(pair[0]);
                    var v = decodeURIComponent(pair[1].replace(/\+/g, ' '));
                    // If it is the first entry with this name
                    if (typeof hash[k] === "undefined") {
                        if (k.substr(k.length - 2) != '[]') // not end with []. cannot use negative index as IE doesn't understand it
                            hash[k] = v;
                        else hash[k.substr(0, k.length - 2)] = [v];
                        // If subsequent entry with this name and not array
                    } else if (typeof hash[k] === "string") {
                        hash[k] = v; // replace it
                        // If subsequent entry with this name and is array
                    } else {
                        hash[k.substr(0, k.length - 2)].push(v);
                    }
                }
                return hash;
            };
            var __ajaxError = function() {
                //            jQuery("#fancybox-loading").hide();
                alert("Une erreur a survenue, merci de réessayer plus tard");
            };
            var __ajaxAlways = function() {};
            var __loadNextPageRequest = function(data) {
                data['module'] = "pagination";
                return jQuery.ajax({
                    url: __siteUrl + 'modules/catalogue/ajax.php',
                    data: data,
                    type: "POST",
                    dataType: 'json'
                });
            }
            var __renderPage = function(response) {
                if ((typeof response) === "string" || (typeof response) !== "object") {
                    try {
                        response = JSON.parse(response);
                    } catch (e) {
                        // console.log(e);
                        return false;
                    }
                }
                var newQuery = response.pagination_query;
                if (!newQuery) {
                    jQuery('#infinite-scroll-button').hide();
                }
                jQuery('#infinite-scroll-button').attr('data-query', newQuery);
                // console.log(response.html);
                if (response.hasOwnProperty("html")) {
                    jQuery("#catalogue-list").append(response.html);
                    $chargement.fadeOut();
                    if (newQuery) {
                        jQuery('#infinite-scroll-button').show();
                    }
                }
                // console.log(response);
            };
            var __loadNextPage = function() {
                jQuery('#infinite-scroll-button').hide();
                $chargement.fadeIn();
                var query = jQuery(this).attr('data-query');
                if (!query) {
                    return false;
                }
                var data = __getQueryParameters(query);
                // console.log("data" + data);
                var request = __loadNextPageRequest(data);
                request.done(__renderPage).fail(__ajaxError).always(__ajaxAlways);
            };

            jQuery(document).on('click', '#infinite-scroll-button', __loadNextPage);
        }


        if (isMobile) {
            $('.pop-up-text .contact .formulaire .form-group input.form-control').removeAttr('placeholder');
        }



        /**************************/
        $('.scrollbars').ClassyScroll({
            scroll: 'vertical', // horizontal, vertical, both
            pathPadding: '0px',
            sliderOpacity: 1,
            zIndex: 100
        });
        /*==========  Helpers  ==========*/
        // Timeout function
        var delay = (function() {
            var timer = 0;
            return function(callback, ms) {
                clearTimeout(timer);
                timer = setTimeout(callback, ms);
            };
        })();
        $.fn.reverse = function() {
            return this.pushStack(this.get().reverse(), arguments);
        };

        /* mobile */
        $('.menu-mobile-dynamique .sub-menu').prev().click(function() {
            $(this).next().toggle(300);
        });
        $('.menu-mobile-dynamique .sub-menu').parent().addClass('parent');
        $('.deploy-contact-form').click(function() {
            $('.sidebar-form').toggle(300);
        });
        $('.deploy-subscribe-form').click(function() {
            $('.sidebar-form2').toggle(300);
            $('#emailError').hide(200);
        });
        $('.deploy-left-sidebar, .close-sidebar-left, .close-bottom-left, .close-bottom-right, .deploy-subscribe-form, .deploy-contact-form').click(function() {
            return false;
        })
        /* Deploy Left Sidebar */
        $(".content").click(function() {
            $('.sidebar-left').animate({
                left: '-270',
            }, 300, 'easeOutExpo', function() {});
            $('.sidebar-right').animate({
                right: '-280px',
            }, 300, 'easeInOutExpo', function() {});
        });
        /* Deploy Left Sidebar */
        $(".deploy-left-sidebar").click(function() {
            $('.sidebar-left').delay(300).animate({
                left: '0',
            }, 300, 'easeOutExpo', function() {});
            $('.sidebar-right').animate({
                right: '-280px',
            }, 300, 'easeInOutExpo', function() {});
            return false;
        });
        /* Close Left Sidebar*/
        $(".close-sidebar-left, .close-bottom-left").click(function() {
            $('.sidebar-left').animate({
                left: '-270px',
            }, 300, 'easeInOutExpo', function() {});
            return false;
        });
        /* Deploy Right Sidebar */
        $('.deploy-right-sidebar').click(function() {
            $('.sidebar-right').delay(300).animate({
                right: '-10',
            }, 300, 'easeOutExpo', function() {});
            $('.sidebar-left').animate({
                left: '-270px',
            }, 300, 'easeInOutExpo', function() {});
            return false;
        });
        /* Close Right Sidebar */
        $('.close-sidebar-right, .close-bottom-right').click(function() {
            $('.sidebar-right').animate({
                right: '-280px',
            }, 300, 'easeInOutExpo', function() {});
            return false;
        });
        /* mobile */
        if (isMobile.any) {
            $('*[data-anim]').css({
                opacity: 1
            });
        } else {
            $('*[data-anim]').addClass('animated');
        }

        function contenus_animes() {
            $(".animated:appeared").each(function(i) {
                var $this = $(this);
                var nom_animation = $(this).data('anim');
                setTimeout(function() {
                    $this.addClass(nom_animation);
                }, 100);
            });
        }
        contenus_animes();
        $(window).scroll(function() {
            contenus_animes();
        });
        /***********************************/
        jQuery(window).load(function() {

            if (ACCUEIL) {
                setTimeout(function() {
                    jQuery('#loader').fadeOut('1000');
                }, 1000);
            } else {
                jQuery('#loader').fadeOut('1000');
            }
            // will fade out the white DIV that covers the website.
            if (ACCUEIL) {
                draw_lines();

                function fader() {
                    var r = jQuery('.line,.circledot'),
                        wh = jQuery(window).height(),
                        dt = jQuery(document).scrollTop(),
                        elView, opacity;
                    r.each(function() {
                        elView = wh - ($(this).offset().top - dt) + 100;
                        if (elView > 0) { // Top of DIV above bottom of window.
                            opacity = 1 / (wh + $(this).height()) * elView;
                            if (opacity < 1) // Bottom of DIV below top of window.
                                $(this).css('opacity', opacity);
                            jQuery(this).css('animation-duration', "2s");
                            jQuery(this).css('animation-fill-mode', "both");
                            jQuery(this).css('animation-name', "fadeIn");
                        }
                    });
                    // Loop elements with class "blue"
                }

                // Event on scroll
                jQuery(document).bind('scroll', fader);
            }
        });
        /***********************************/
    });

}