(function ($) {
  "use strict";

  // Preloader
  $(window).on("load", function () {
    $("#loader").fadeOut(300);
    $("#page").show();
  });

  // Cookies
  function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(";");
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == " ") {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

  if (getCookie("cookie-consent") != "") {
    $("#cookies-alert").attr("style", "display: none;");
  } else {
    $("#cookies-alert").removeAttr("style");
    $("#js-cookies-btn").click(function () {
      let date = new Date();
      date.setTime(date.getTime() + 31536000000);
      document.cookie = "cookie-consent=true; expires=" + date.toUTCString() + "path=/;";
      $("#cookies-alert").fadeOut(300);
    });
  }

  $("#js-popup-open").click(function () {
    $("#cookies-popup").attr("style", "visibility: visible;");
  });

  $("#js-popup-close").click(function () {
    $("#cookies-popup").attr("style", "visibility: hidden;");
  });

  // Navbar
  document.addEventListener("DOMContentLoaded", function () {
    const burger = document.querySelectorAll("#js-navbar-burger");
    const menu = document.querySelectorAll("#js-navbar-menu");

    if (burger.length && menu.length) {
      for (var i = 0; i < burger.length; i++) {
        burger[i].addEventListener("click", function () {
          for (var j = 0; j < menu.length; j++) {
            menu[j].classList.toggle("translate-x-full");
          }
        });
      }
    }

    const close = document.querySelectorAll("#js-navbar-close");
    const backdrop = document.querySelectorAll("#js-navbar-backdrop");

    if (close.length) {
      for (var i = 0; i < close.length; i++) {
        close[i].addEventListener("click", function () {
          for (var j = 0; j < menu.length; j++) {
            menu[j].classList.toggle("translate-x-full");
          }
        });
      }
    }

    if (backdrop.length) {
      for (var i = 0; i < backdrop.length; i++) {
        backdrop[i].addEventListener("click", function () {
          for (var j = 0; j < menu.length; j++) {
            menu[j].classList.toggle("translate-x-full");
          }
        });
      }
    }
  });

  // Typed Text
  if (document.getElementById("typed-text")) {
    var options = {
      strings: ["Web Developer", "Web Designer", "UX/UI Designer"],
      typeSpeed: 50,
      backSpeed: 25,
      loop: true,
    };
    var typed = new Typed("#typed-text", options);
  }

  // Testimonials
  document.addEventListener("DOMContentLoaded", function () {
    if (document.getElementById("testimonials")) {
      new Swiper(".swiper-container", {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 32,
        autoplay: {
          delay: 8000,
        },
        breakpoints: {
          640: {
            centeredSlides: true,
            slidesPerView: 1.25,
          },
          1024: {
            centeredSlides: false,
            slidesPerView: 1.5,
          },
        },
        navigation: {
          nextEl: ".next-button",
          prevEl: ".prev-button",
        },
      });
    }
  });
})(window.jQuery);
