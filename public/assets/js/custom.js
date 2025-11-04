$(document).ready(function () {
  $('[href="#"]').attr("href", "javascript:;");
  $(".menu-Bar").click(function () {
    $(this).toggleClass("open");
    $(".menuWrap").toggleClass("open");
    $("body").toggleClass("ovr-hiddn");
  });
  $(".what-we-slider").slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1600,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        },
      },
    ],
  });

  $(".folio-slider-kinlde").slick({
    dots: false,
    arrows: true,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1601,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        },
      },
    ],
  });
  $(".copyright-sec-list li:first-child").on("click", function () {
    $(this).toggleClass("active");
    $(".copyright-sec-list li:last-child").slideToggle();
  });
  $(".testi-slider").slick({
    dots: true,
    arrows: false,
    infinite: true,
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 1601,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        },
      },
    ],
  });
  $(".cater-sec-list").slick({
    dots: false,
    arrows: true,
    infinite: true,
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 1601,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        },
      },
    ],
  });

  $(".what-we-do-about-slider").slick({
    dots: true,
    arrows: false,
    rtl: true,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1601,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        },
      },
    ],
  });

  $(".service-ltr").slick({
    dots: false,
    arrows: false,
    centerMode: true,
    rtl: false,
    autoplay: true,
    autoplayspeed: 4000,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1601,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          centerMode: false,
          slidesToScroll: 1,
          infinite: true,
        },
      },
    ],
  });

  $(".service-rtl").slick({
    dots: false,
    arrows: false,
    rtl: true,
    autoplay: true,
    autoplayspeed: 4000,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1601,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        },
      },
    ],
  });

  $(".client-logo-slider").slick({
    dots: false,
    infinite: true,
    autoplay: true,
    arrows: false,
    autoplaySpeed: 0,
    speed: 8000,
    cssEase: "linear",
    Swiping: true,
    slidesToShow: 5,
    pauseOnHover: false,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1601,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });
  $(".service-client-logos-list").slick({
    dots: false,
    infinite: true,
    autoplay: true,
    arrows: false,
    autoplaySpeed: 0,
    speed: 8000,
    cssEase: "linear",
    Swiping: true,
    slidesToShow: 5,
    pauseOnHover: false,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1601,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });

  $(".client-logos-2-list").slick({
    dots: false,
    infinite: true,
    autoplay: true,
    arrows: false,
    autoplaySpeed: 0,
    speed: 8000,
    cssEase: "linear",
    Swiping: true,
    slidesToShow: 5,
    pauseOnHover: false,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1601,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
    ],
  });
  $(".benefit-slider").slick({
    dots: false,
    infinite: true,
    arrows: true,
    slidesToShow: 1,
    slidesToScroll: 1,
  });
  $(".audio-app-slide").slick({
    dots: false,
    infinite: true,
    arrows: false,
    autoplay: true,
    autoplayspeed: 4000,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });

  $("img").each(function () {
    // Set the alt attribute to a desired value. Example: 'Image description'
    $(this).attr("alt", "Authors Time");
  });

  var header = $("header");
  var sticky = header.offset().top;

  $(window).scroll(function () {
    if ($(window).scrollTop() > sticky) {
      header.addClass("sticky");
    } else {
      header.removeClass("sticky");
    }
  });

  // Trigger scroll event to initialize header state
  $(window).trigger("scroll");
});
$(".counter-list-box span").each(function () {
  $(this)
    .prop("Counter", 0)
    .animate(
      {
        Counter: $(this).text(),
      },
      {
        duration: 9000,
        easing: "swing",
        step: function (now) {
          $(this).text(Math.ceil(now));
        },
      }
    );
});

$("[data-targetit]").on("click", function (e) {
  $(this).addClass("active");
  $(this).siblings().removeClass("active");
  var target = $(this).data("targetit");
  $("." + target)
    .siblings('[class^="box-"]')
    .hide();
  $("." + target).fadeIn();
  $(".price-slider").slick("setPosition");
});
$(".tier-box").hover(function () {
  $(".tier-box").removeClass("active");
  $(this).addClass("active");
});
$(".review-box").hover(function () {
  $(".review-box").removeClass("active");
  $(this).addClass("active");
});

$(".kindle-ser-box-new").hover(function () {
  $(".kindle-ser-box-new").removeClass("active");
  $(this).addClass("active");
});

$(".article-writing-service-box").hover(function () {
  $(".article-writing-service-box").removeClass("active");
  $(this).addClass("active");
});
$(".pricing-box").hover(function () {
  $(".pricing-box").removeClass("active");
  $(this).addClass("active");
});
$(document).on("click", ".popup-btn", function () {
  $(".popupform-main").addClass("active");
  // $('body').addClass('o-hidden');
  $(".overlay-bg").fadeIn(500);
  $(".close-btn").on("click", function () {
    $(".popupform-main").removeClass("active");
    // $('body').removeClass('o-hidden');
    $(".overlay-bg").fadeOut(500);
  });
  $(".overlay-bg").click(function () {
    $("popupform-main").removeClass("active");
    // $('body').removeClass('o-hidden');
    $(".overlay-bg").fadeOut(500);
  });
});

$(document).on("click", ".popup-btn", function () {
  $(".new-popup-form").addClass("active");
  $("body").addClass("o-hidden");
  $(".overlay-bg").fadeIn(500);
  $(".close-btn").on("click", function () {
    $(".new-popup-form").removeClass("active");
    $("body").removeClass("o-hidden");
    $(".overlay-bg").fadeOut(500);
  });
  $(".overlay-bg").click(function () {
    $(".new-popup-form").removeClass("active");
    $("body").removeClass("o-hidden");
    $(".overlay-bg").fadeOut(500);
  });
});
/* RESPONSIVE JS */
if ($(window).width() < 824) {
  $(".review-box-slider").slick({
    dots: true,
    arrows: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
  });
}

// SCRIPTS

$('input[name="phone"]').on("keypress", function (event) {
  var keyCode = event.keyCode || event.which;
  var keyValue = String.fromCharCode(keyCode);
  var isValid = /^\d+$/.test(keyValue);

  if (!isValid) {
    $("#phone-error").show();
    event.preventDefault();
  } else {
    $("#phone-error").hide();
  }
});

wow = new WOW({
  animateClass: "animated",
  offset: 100,
  callback: function (box) {
    console.log("WOW: animating <" + box.tagName.toLowerCase() + ">");
  },
});
wow.init();
$(".livechat, .live_chatt, .chatt, .chat").click(function () {
  $zopim.livechat.window.toggle();
  return false;
});
$(window).on("load", function () {
  $zopim.livechat.window.show();
});
zE(function () {
  zE.activate();
});
zE(function () {
  $zopim(function () {
    $zopim.livechat.setOnUnreadMsgs(unread);

    function unread(number) {
      if (number >= 1) {
        $zopim.livechat.window.toggle();
        $zopim.livechat.window.show();
      }
    }
  });
});

zE(function () {
  $zopim(function () {
    // chat popup on new message
    $zopim.livechat.setOnUnreadMsgs(function (numUnread) {
      console.log("New message received", numUnread);
      if (numUnread > 0 && !$zopim.livechat.window.getDisplay()) {
        $zopim.livechat.window.show();
      }
    });
  });
});
