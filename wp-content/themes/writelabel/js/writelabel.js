jQuery(document).ready(function($){
	$(document).on('click', '.menu-mobile', function() {
    	$( '.mobile-navigation' ).fadeToggle();
    	$('.site-header').toggleClass('menu-open');
        $('body').toggleClass('body-no-scroll');
    });


    $(document).on('click', '.list-questions .item', function() {
        $(this).toggleClass('open');
    	$(this).find('p').slideToggle();
    });

    $(document).on('click', '.accordion', function() {
        $(this).toggleClass('open');
        $(this).parent().find('p.bio').slideToggle();
    });

    $(document).on('click', '.testimonials .img', function(){
    	var imgClick = $(this).attr('class').split(' ')[1];
    	$(this).removeClass(imgClick);
    	$('.img1').addClass(imgClick);
    	$('.testimonials .img').removeClass('img1');
    	$(this).addClass('img1'); 
    });

    $('.glide__arrow--right, .glide__arrow--left').on('mouseenter', function(){
        $(this).click();
    });


    $(document).on('click', '.btn-more', function(e){
        e.preventDefault();
        var page = $(this).data('page');

        $('.r' + page).slideToggle();
        $(this).data('page', page + 1);

        if($('.r' + (page + 2)).length == 0){
            $(this).hide();
        }
        

    });

    var circle = $('.circle');
    circle.css("height", circle.width());

    $(window).resize(function() {
        var circle = $('.circle');
        circle.css("height", circle.width());
    });

    
    const config = function (start) {
        return {
            type: "carousel",
            perView: 1,
            autoplay: 5000,
            swipeable: false,
            startAt: start,
            keyboard: false,
            touchRatio: 0,
            dragDistance: false,
            swipeThreshold: false,
            dragThreshold: false,
            noSwiping: true,
            allowTouchMove: false,
            hoverpause: false,
            classes: {
                swipeable: "no-swip",
            },
            breakpoints: {
                992: {
                    perView: 1,
                    touchRatio: 0,
                    dragDistance: true,
                    swipeThreshold: true,
                    dragThreshold: true,
                    noSwiping: false,
                    allowTouchMove: true,
                    hoverpause: false,
                    autoplay: 5000,
                },
            },
        };
    };

    if($('#glide0').length){

        //@ts-ignore
        const gl0 = new Glide("#glide0", config(0));
        //@ts-ignore
        const gl1 = new Glide("#glide1", config(0));
        //@ts-ignore
        const gl2 = new Glide("#glide2", config(1));
        //@ts-ignore
        const gl3 = new Glide("#glide3", config(2));

        gl0.mount();
        gl1.mount();
        gl2.mount();
        gl3.mount();

        //@ts-ignore
        gl0.on("run", e => {
            gl1.go(e.direction);
            gl2.go(e.direction);
            gl3.go(e.direction);
        });

        const trigger = document.getElementById("glide1");

        if (trigger) {
            trigger.addEventListener("click", () => {
                gl0.go(">");
            });
        }
    }


    if($('.questions').length) {
        let questions = gsap.utils.toArray('.question');

        questions.forEach((item, index) => {
            ScrollTrigger.create({
              trigger: item,
              start: "bottom 70%",
              onEnter: function(){
                if(!$(item).hasClass('active')){
                    $(item).toggleClass('open');
                    $(item).addClass('active');
                    $(item).find('p').slideToggle();
                }            
              }
            });
        });

        $('.question p').hide();
    }

    

    if($('.slideCreative').length){
        const slideCreative = new Glide(".slideCreative", {
            perView: 3,
            type: 'carousel',
            focusAt: 'center',
            gap: 80,
            autoheight: true,
            breakpoints: {
                769: {
                    perView: 3,
                    touchRatio: 0,
                    dragDistance: true,
                    swipeThreshold: true,
                    dragThreshold: true,
                    gap: 6,
                    noSwiping: false,
                    allowTouchMove: true,
                    hoverpause: false,
                    autoplay: 12000,
                },
            },
        });

        slideCreative.mount();
    }

    if($('.slideProducts').length){
        const slideCreative = new Glide(".slideProducts", {
            perView: 5,
            type: 'carousel',
            gap: 30,
            focusAt: 'center',
            breakpoints: {
                1201: {
                    perView: 3,
                    touchRatio: 0,
                    dragDistance: true,
                    swipeThreshold: true,
                    dragThreshold: true,
                    gap: 6,
                    noSwiping: false,
                    allowTouchMove: true,
                    hoverpause: false,
                    autoplay: 12000,
                },
            },
        });

        slideCreative.mount();
    }

    if($('.glide5').length){
        const gl5 = new Glide(".glide5", config(0));
        gl5.mount();
    }



    if($('.counter').length){
        var a = 0;

        $(window).scroll(function() {

        var oTop = $('.counter').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $('.counter-value').each(function() {
            var $this = $(this),
            countTo = $this.attr('data-count');

            var text = $this.text();

            var plus = '';

            if(text.includes('+')){
                plus = '+';
            }

            $({
                countNum: $this.text()
            }).animate({
                countNum: countTo
                },

                {

                duration: 7000,
                easing: 'swing',
                step: function() {
                    $this.text(numberWithCommas(Math.floor(this.countNum)));
                },
                complete: function() {
                    $this.text(numberWithCommas(this.countNum) + plus);
                //alert('finished');
                }

                });
            });
            a = 1;
        }

        });  
    }


    

    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    } 


    $('.site-header .sub-menu').css('background-color', $('.site-header').css('background-color'));

    if($('.btn-sticky').length){
        var stiky = $('.btn-sticky').offset().top;

        $(window).scroll(function() {
            if(($(window).scrollTop() + 150) > stiky){

                $('.btn-sticky').css('top', '150px');

                $('.btn-sticky').css('position', 'fixed');
            }else{
                $('.btn-sticky').css('top', '800px');

                $('.btn-sticky').css('position', 'absolute');
            }
        });
    }
    
    
});