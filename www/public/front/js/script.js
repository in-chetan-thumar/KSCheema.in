function reveal() {
  for (var e = document.querySelectorAll(".reveal"), s = 0; s < e.length; s++) {
      var o,
          r = window.innerHeight;
      e[s].getBoundingClientRect().top < r - 150 ? e[s].classList.add("active") : e[s].classList.remove("active");
  }
}
window.addEventListener("scroll", reveal);

// 

$(window).scroll(function () {
  if ($(this).scrollTop() > 1) {
    $('.header-section').addClass('sticky')
  } else {
    $('.header-section').removeClass('sticky')
  }
});

let navLinks = document.querySelector(".nav");
let menuOpenBtn = document.querySelector(".bar-mobile-icon");
let menuCloseBtn = document.querySelector(".close-icon");
menuOpenBtn.onclick = function () {
  navLinks.style.right = "0";
}
menuCloseBtn.onclick = function () {
  navLinks.style.right = "-100%";
}


$('.images-group-mobile').owlCarousel({
  loop: false,
  margin: 20,
  dots: false,
  nav: true,
  responsive: {
    0: {
      items: 1.8
    },
  }
})

$('.featured-slider').owlCarousel({
  margin: 30,
  nav: true,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1.4,
    },
    768: {
      items: 2,
    },
    1024: {
      items: 3,
    }
  }
})

$('.banner-slider').owlCarousel({
  loop: true,
  nav: true,
  items: 1,
})


$('.map-section').owlCarousel({
  loop: false,
  margin: 36,
  stagePadding: 80,
  nav: true,
  dots: false,
  responsive: {
    0: {
      items: 1,
      margin: 15,
      stagePadding: 0,
    },
    500: {
      items: 1.8,
      stagePadding: 0,
    },
    768: {
      items: 3,
      stagePadding: 30,
      margin: 20,
    },
    1124: {
      items: 4
    },

  }
})

$('.images-galler-section').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots:false,
  responsive: {
    0: {
      items: 1
    },
  }
})


var swiper = new Swiper(".mySwiper", {
  direction: "vertical",
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});



var swiper = new Swiper(".our-journey-slider", {

  slidesPerView: 1,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  spaceBetween: 20,
  breakpoints: {
    0: {
      centeredSlides: true,
      slidesPerView: 1.3,
      direction: "horizontal",
    },
    1024: {
      slidesPerView: 3,
      direction: "vertical",
    },
  },
});


var swiper = new Swiper(".artical-slider", {
  slidesPerView: 1,
  spaceBetween: 20,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + "</span>";
    },
  },
});





