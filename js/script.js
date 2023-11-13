jQuery(document).ready(function ($) {

  //select
  $('.nice select').niceSelect();

  //scroll-top
  $(document).on('click', '.btn-top a', function (e) {
    $('html, body').stop().animate({scrollTop:0},'slow', 'swing');
  });



  /* mob-menu*/
  $(document).on('click', '.open-menu a', function (e){
    e.preventDefault();

    $.fancybox.open( $('#menu-responsive'), {
      touch:false,
      autoFocus:false,
    });
    setTimeout(function() {
      $('body').addClass('is-active');
      $('html').addClass('is-menu');
      $('header').addClass('is-active');
    }, 100);

  });

  /*close mob menu*/
  $(document).on('click', '.close-menu a', function (e){
    e.preventDefault();
    $('body').removeClass('is-active');
    $.fancybox.close();
    $('header').removeClass('is-active');
    $('html').removeClass('is-menu');
  });

  //open sub menu
  $(document).on('click', '.menu-responsive .menu > li span', function (e){
    e.preventDefault();

    let item = $(this).closest('li');
    item.toggleClass('is-active');
    if(item.hasClass('is-active')){
      item.find('.sub-menu').slideDown();
    }else{
      item.find('.sub-menu').slideUp();
    }
  });



  //tel code
  if($('.input-wrap-tel input').length > 0){
    var input = document.querySelector("#tel");
    window.intlTelInput(input, {
      //allowDropdown: true,
      //autoHideDialCode: true,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["ru"],
      // formatOnDisplay: false,
      /*    geoIpLookup: function(callback) {
            $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
              var countryCode = (resp && resp.country) ? resp.country : "";
              callback(countryCode);
            });
          },*/
      // hiddenInput: "full_number",
      //initialCountry: "auto",
      localizedCountries: { 'us': 'usa' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      preferredCountries: ['us'],
      InitialCountry: "",
      separateDialCode: true,

    });
  }

  //Marquee
  if( $('.banner-form .marquee-line').length >0){
    $('.banner-form .marquee-line').marquee({
      duration: 20000,
      gap: 0,
      delayBeforeStart: 0,
      /*  direction: 'left',*/
      duplicated: true,
      /*loop:true,*/
      startVisible: true,
    });
  }

  //Marquee
  if( $('.marquee-1').length >0){
    $('.marquee-1').marquee({
      duration: 20000,
      gap: 0,
      delayBeforeStart: 0,
      /*  direction: 'left',*/
      duplicated: true,
      /*loop:true,*/
      startVisible: true,
    });
  }


  //Marquee
  if( $('.marquee-1-1').length >0){
    $('.marquee-1-1').marquee({
      duration: 20000,
      gap: 0,
      delayBeforeStart: 0,
      /*  direction: 'left',*/
      duplicated: true,
      /*loop:true,*/
      startVisible: true,
    });
  }

  //Marquee
  if( $('.marquee-2').length >0){
    $('.marquee-2').marquee({
      duration: 20000,
      gap: 0,
      delayBeforeStart: 0,
      /*  direction: 'left',*/
      duplicated: true,
      /*loop:true,*/
      startVisible: true,
    });
  }

  //Marquee
  if( $('.marquee-2-1').length >0){
    $('.marquee-2-1').marquee({
      duration: 20000,
      gap: 0,
      delayBeforeStart: 0,
      /*  direction: 'left',*/
      duplicated: true,
      /*loop:true,*/
      startVisible: true,
    });
  }

  //Marquee
  if( $('.marquee-3').length >0){
    $('.marquee-3').marquee({
      duration: 20000,
      gap: 0,
      delayBeforeStart: 0,
      /*  direction: 'left',*/
      duplicated: true,
      /*loop:true,*/
      startVisible: true,
    });
  }

  //Marquee
  if( $('.marquee-3-1').length >0){
    $('.marquee-3-1').marquee({
      duration: 20000,
      gap: 0,
      delayBeforeStart: 0,
      /*  direction: 'left',*/
      duplicated: true,
      /*loop:true,*/
      startVisible: true,
    });
  }

  //Marquee
  if( $('.marquee-4').length >0){
    $('.marquee-4').marquee({
      duration: 20000,
      gap: 0,
      delayBeforeStart: 0,
      /*  direction: 'left',*/
      duplicated: true,
      /*loop:true,*/
      startVisible: true,
    });
  }

  //Marquee
  if( $('.marquee-4-1').length >0){
    $('.marquee-4-1').marquee({
      duration: 20000,
      gap: 0,
      delayBeforeStart: 0,
      /*  direction: 'left',*/
      duplicated: true,
      /*loop:true,*/
      startVisible: true,
    });
  }


  //slider
  var swiperImg1 = new Swiper(".slider-img-1", {
    navigation: {
      nextEl: ".next-img-1",
      prevEl: ".prev-img-1",
    },
    pagination: {
      clickable: true,
      el: ".pagination-img-1",
    },
  });

  //slider
  var swiperBoard = new Swiper(".board-slider", {
    effect: "fade",
    allowTouchMove:false,
    pagination: {
      el: ".pagination-board",
      clickable: true,
    },
  });

  //parallax
  var rellax = new Rellax('.rellax');


  //board block
  $(document).on('click', '.board-wrap .dot', function (e){
    e.preventDefault();
    let item = $(this).closest('.board-item');
    console.log(0)
    $('.board-wrap .dot').removeClass('is-active');
    $(this).addClass('is-active');

    if(item.hasClass('board-item-1')){
      let itemActive1 = item.find('.is-active').index();

      swiperBoard.slideTo(itemActive1);



    }else if(item.hasClass('board-item-2')){
      let itemActive2 = item.find('.is-active').index() + 6;

      swiperBoard.slideTo(itemActive2);
    }
    else if(item.hasClass('board-item-3')){
      let itemActive3 = item.find('.is-active').index() + 9;

      swiperBoard.slideTo(itemActive3);
    }
  });



  //CURSOR
  var cursor = $(".cursor"),
    cursorInner = $(".cursor span");

  $(window).mousemove(function (e) {
    cursor.css({
      top: e.clientY - cursor.height() / 2,
      left: e.clientX - cursor.width() / 2
    });
  });


  if(window.innerWidth > 768){
    $(window)
      .mouseleave(function () {
        cursor.css({
          opacity: "0"
        });
      })
      .mouseenter(function () {
        cursor.css({
          opacity: "1"
        });
      });

    $(".board-wrap .dot")
      .mouseenter(function () {
        cursor.css({
          background:"transparent",
        });
        cursorInner.css({
          transform: "scale(1)translate(-50%,-50%)",
        });
      })
      .mouseleave(function () {
        cursor.css({
          background:"transparent",
        });
        cursorInner.css({
          transform: "scale(0)translate(-50%,-50%)",
        });
      });

  }

  //slider
  var swiperRound1 = new Swiper(".round-slider-1", {
    effect: "fade",
    loop:true,
    speed:700,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },

  });

  var swiperRound2 = new Swiper(".round-slider-2", {
    effect: "fade",
    loop:true,
    speed:700,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },

  });


  //slider
  var swiperTestimonials = new Swiper(".testimonials-slider", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".testimonials-next",
      prevEl: ".testimonials-prev",
    },
    pagination: {
      el: ".testimonials-pagination",
      clickable: true,
    },

    breakpoints: {
      576: {
        slidesPerView: 2,
        spaceBetween: 15,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 25,
      },

    },
  });


  //slider
  var swiper3n1 = new Swiper(".slider-3n-1", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".slider-3n-next-1",
      prevEl: ".slider-3n-prev-1",
    },
    pagination: {
      el: ".slider-3n-pagination-1",
      clickable: true,
    },

    breakpoints: {
      576: {
        slidesPerView: 2,
        spaceBetween: 15,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 25,
      },

    },
  });

  //slider
  var swiper3n2 = new Swiper(".slider-3n-2", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".slider-3n-next-2",
      prevEl: ".slider-3n-prev-2",
    },
    pagination: {
      el: ".slider-3n-pagination-2",
      clickable: true,
    },

    breakpoints: {
      576: {
        slidesPerView: 2,
        spaceBetween: 15,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 25,
      },

    },
  });

  //cutt text
 $('.testimonials-slider .cut').Cuttr( {
    //options here
    truncate: 'words',
    length: 20
  });

  $('.contact .top p').Cuttr({
    //options here
    truncate: 'words',
    length: 47,
    readMore: true,
    readMoreText: 'read more about Heaven Saphir Team',
    readLessText: 'Show less'
  });

  //slider
  var swiperVideo1 = new Swiper(".video-slider-1", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".video-next",
      prevEl: ".video-prev",
    },
    pagination: {
      el: ".video-pagination",
      clickable: true,
    },

    breakpoints: {
      576: {
        slidesPerView: 2,
        spaceBetween: 15,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 25,
      },

    },
  });

  //slider
  var swiperInst = new Swiper(".inst-slider", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".inst-next",
      prevEl: ".inst-prev",
    },
    pagination: {
      el: ".inst-pagination",
      clickable: true,
    },

    breakpoints: {
      576: {
        slidesPerView: 2,
        spaceBetween: 15,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 25,
      },

    },
  });


  //slider
  var swiperGuests = new Swiper(".guests-slider", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".guests-next",
      prevEl: ".guests-prev",
    },
    pagination: {
      el: ".guests-pagination",
      clickable: true,
    },

    breakpoints: {
      576: {
        slidesPerView: 2,
        spaceBetween: 15,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 25,
      },

    },
  });


  //hide cookies
  $(document).on('click', '.btn-ok', function (e){
    e.preventDefault();
    $('.cookies').slideUp();
  });


  //faq
  $(function() {
    $(".accordion > .accordion-item.is-active").children(".accordion-panel").slideDown();
    $(document).on('click', '.accordion > .accordion-item .accordion-thumb', function (e){
      $(this).parent('.accordion-item').siblings(".accordion-item").removeClass("is-active").children(".accordion-panel").slideUp();
      $(this).parent('.accordion-item').toggleClass("is-active").children(".accordion-panel").slideToggle("ease-out");
    })
  });

//TABS
  (function($){
    jQuery.fn.lightTabs = function(options){

      var createTabs = function(){
        tabs = this;
        i = 0;

        showPage = function(i){
          $(tabs).find(".tab-content").children("div").hide();
          $(tabs).find(".tab-content").children("div").eq(i).show();
          $(tabs).find(".tabs-menu").children("li").removeClass("is-active");
          $(tabs).find(".tabs-menu").children("li").eq(i).addClass("is-active");
        }

        showPage(0);

        $(tabs).find(".tabs-menu").children("li").each(function(index, element){
          $(element).attr("data-page", i);
          i++;
        });

        $(tabs).find(".tabs-menu").children("li").click(function(){
          showPage(parseInt($(this).attr("data-page")));
        });
      };
      return this.each(createTabs);
    };
  })(jQuery);
  $(".tabs").lightTabs();

  //slider
  var swiperMenu = new Swiper(".slider-menu", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 2,
    loop:true,
    coverflowEffect: {
      rotate: 0,
      stretch: 100,
      depth: 250,
      modifier: 1,
      slideShadows: true,
    },
    breakpoints: {
      576: {
        slidesPerView: 2,
        spaceBetween: 15,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 25,
      },

    },
  });

});