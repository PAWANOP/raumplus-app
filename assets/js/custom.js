function readMore1() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("read-more-link");
  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
$(document).on("click", ".item-box-inner .read-more-link", function(e) {
  if ($(this).text() == "Read more") {
    $(this).text("Read Less");
    $(this).prev().addClass("moreText");
  } else if ($(this).text() == "Read Less") {
    $(this).text("Read more");
    $(this).prev().removeClass("moreText");
  }
  return false;
});

$(document).on("click", ".faq-question-section-body-first-top a", function(e) {
  $(this).parent().toggleClass("open");
  $(".faq-question-section-body-first-bottom").slideToggle();
  return false;
});

$(document).on("click", ".image-content-bottom a", function(e) {
  e.preventDefault();

  let $this = $(this);
  let dataContent = $this.attr("data-content");
  let $target = $("#" + dataContent);

  if ($this.hasClass("active")) {
    // if already active → remove active + hide box
    $this.removeClass("active");
    $target.slideUp();
  } else {
    // remove all active & hide all boxes
    $(".image-content-bottom a").removeClass("active");
    $(".images-box-faq-content-1").slideUp();

    // activate current & show box
    $this.addClass("active");
    $target.slideDown();
  }
});



var owl = $(".owl-carousel-timeline");
owl.owlCarousel({
  items: 4,
  margin: 25,
  loop: true,
  nav: true,
  navText: [
    "<div class=\"prev-arrow\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path d=\"M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 105.4-105.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z\"/></svg></div>",
    "<div class=\"next-arrow\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path d=\"M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 105.4-105.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z\"/></svg></div>",
  ],
  responsive: {
    0: {
      items: 1.2,
    },
    768: {
      items: 2.2,
    },
    1200: {
      items: 4,
    },
  },
});


var owl = $(".owl-carousel-doors");
owl.owlCarousel({
  items: 3,
  margin: 25,
  loop: true,
  nav: true,
    navText: [
    "<div class=\"prev-arrow\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path d=\"M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 105.4-105.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z\"/></svg></div>",
    "<div class=\"next-arrow\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path d=\"M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 105.4-105.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z\"/></svg></div>",
  ],
});


var owl2 = $(".owl-carousel-variant");
owl2.owlCarousel({
  items: 2,
  margin: 25,
  loop: true,
  nav: true,
    navText: [
    "<div class=\"prev-arrow\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path d=\"M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 105.4-105.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z\"/></svg></div>",
    "<div class=\"next-arrow\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path d=\"M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 105.4-105.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z\"/></svg></div>",
  ],
});
var owl2 = $(".owl-carousel-wardrobe-planning");
owl2.owlCarousel({
  items: 1,
  margin: 0,
  loop: true,
  nav: true,
    navText: [
    "<div class=\"prev-arrow\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path d=\"M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 105.4-105.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z\"/></svg></div>",
    "<div class=\"next-arrow\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path d=\"M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 105.4-105.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z\"/></svg></div>",
  ],
});

$(document).on("click", ".faq-question-header", function(e) {
  e.preventDefault();

  const $clickedHeader = $(this);
  const $clickedBody = $clickedHeader.next(".faq-question-body");

  // If this section is already open
  if ($clickedHeader.hasClass("open")) {
    $clickedHeader.removeClass("open");
    $clickedBody.stop(true, true).slideUp();
  } else {
    // Close all others
    $(".faq-question-header").removeClass("open");
    $(".faq-question-body").stop(true, true).slideUp();

    // Open this one
    $clickedHeader.addClass("open");
    $clickedBody.stop(true, true).slideDown();
  }
});

$(document).on("click", "#call_action", function(e) {
  $(".action-view-model-popup").addClass("showModel");
  return false;
});
$(document).on("click", ".close_action_view", function(e) {
  $(".action-view-model-popup").removeClass("showModel");
  return false;
});

$(document).on("click", ".call_downlods", function(e) {
  $(".downlods-view-model-popup").addClass("showModel");
  return false;
});
$(document).on("click", ".close_downloads_view", function(e) {
  $(".downlods-view-model-popup").removeClass("showModel");
  return false;
});


$(document).ready(function() {
  setTimeout(function() {
    $(".action-view-model-popup").addClass("showModel");
  }, 15000);
});

$(document).on("click", ".close_attachment_view", function(e) {
  $(".attachment-view-model-popup").removeClass("showModel");
  document.getElementById("attacgment-view-box").innerHTML = "";
});

$(document).on("click", ".close_video_view", function(e) {
  $(".video-view-model-popup").removeClass("showModel");
});

// // show Image in full screen
$(document).on("click", ".projects-list-gallery .projects-list-gallery-b-box a", function(e) {
  var imgSrc = $(this).find("img").attr("src");
  let img = `<img class="attahcmentImageView" src="${imgSrc}">`;
  document.getElementById("attacgment-view-box").innerHTML = img;
  $(".attachment-view-model-popup").addClass("showModel");
  return false;
});
$(document).on("click", "#tvTVsliding  .projects-list-gallery-b-box a", function(e) {
  $(".video-view-model-popup").addClass("showModel");
  return false;
});

$(document).on("click", ".filter-buttons button", function() {
  $(".filter-buttons button").removeClass("active");
  $(this).addClass("active");
  let filterText = $(this).attr("data-filter");
  if (filterText == "all") {
    $(".projects-list-gallery-b-box").removeClass("d-none");
  } else {
    $(".projects-list-gallery-b-box").addClass("d-none");
    $(".projects-list-gallery-b-box." + filterText).removeClass("d-none");
  }
});



if (document.querySelector(".mySwiper")) {
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 10,
    slidesPerView: 5,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });
}

if (document.querySelector(".mySwiperBox")) {
  var swiperBox = new Swiper(".mySwiperBox", {
    spaceBetween: 10,
    slidesPerView: 5,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiper3 = new Swiper(".mySwiper3", {
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiperBox,
    },
  });
}


if (document.getElementById("map") != null) {
  new jsVectorMap({
    selector: "#map",
    map: "world",

    selectedRegions: ["IN", "US", "DE", "JP", "BR"],

    regionStyle: {
      initial: { fill: "#e0e0e0" },
      selected: { fill: "#c39a38" },
      hover: { fill: "#e0e0e0" },
    },

    zoomButtons: false,
    zoomOnScroll: false,
    zoomOnPinch: false,
    zoomOnDoubleClick: false,

    onRegionTooltipshow(tooltip, code, name) {
      tooltip.innerHTML = name + " (branch)";
    },
  });
}

$(document).on("click", ".partitionWallsInspiration .left-side-faq .control-position li a", function(e) {
  e.preventDefault();

  // Get the section wrapper (closest parent .partitionWallsInspiration)
  let $section = $(this).closest(".partitionWallsInspiration");

  // Get the clicked tab's target id
  let currentId = $(this).attr("data-tab");

  // Remove and add "current" class within this specific section only
  $section.find(".left-side-faq .control-position li a").removeClass("current");
  $(this).addClass("current");

  // Update material images only inside this section
  $section.find("#material-scene .material-image.static-background").removeClass("current");
  $section.find("#" + currentId).addClass("current");
});

$(document).on("click", ".cateogory-wise-tab-list a", function(e) {
  $(".cateogory-wise-tab-list a").removeClass("active");
  $(this).addClass("active");
  return false;
});

$(document).on("click", ".load-more-blog a", function(e) {
  $(this).toggleClass("arrowIcon");
  $(".blog-list-section-inner-body .more-blogs").toggleClass("d-none");
  let text = $(".load-more-blog .text-span").text() == "Load More Blog" ? "Load Less Blog" : "Load More Blog";
  $(".load-more-blog .text-span").text(text);
  return false;
});

var owl = $(".owl-carousel-blog-main");
owl.owlCarousel({
  items: 1,
  margin: 20,
  loop: true,
  nav: true,
});

$(".blogGallery").owlCarousel({
  items: 4,
  loop: true,
  margin: 25,
  nav: true, // Enable manual navigation with prev/next buttons
  autoplay: true, // Enable auto-scrolling
});


$("#navbarNav .nav-item.dropdown").hover(
  function () {
    $(this).addClass("show");
    $(this).find(".dropdown-menu").addClass("show");
  },
  function () {
    $(this).removeClass("show");
    $(this).find(".dropdown-menu").removeClass("show");
  }
);

//Video Play Pause Control Start
$(document).on('click', '.video-slider-section-box .play_button', function (e) {
    let container = $(this).closest(".video-slider-section-box");
    let video = container.find("video")[0]; // get the video in the same container

    video.play();
    $(this).addClass("vplay");
    container.find(".pause_button").removeClass("vpause");
});            
$(document).on('click', '.video-slider-section-box .pause_button', function (e) {
    let container = $(this).closest(".video-slider-section-box");
    let video = container.find("video")[0];
            
    video.pause();
    container.find(".play_button").removeClass("vplay");
    $(this).addClass("vpause");
});

$(document).ready(function(){
var owl3 = $(".owl-carousel-collection");
owl3.owlCarousel({
   items: 4,
   margin: 25,
   loop: true,
   nav: false,
   dots: false
});


  $('.custom-next').click(function() {
    owl3.trigger('next.owl.carousel'); // ✅ correct syntax
  });
  
  $('.custom-prev').click(function() {
    owl3.trigger('prev.owl.carousel', [300]); // ✅ correct syntax
  });


var owl4 = $(".owl-carousel-material");
owl4.owlCarousel({
   items: 4,
   margin: 25,
   loop: true,
   nav: false,
   dots: false
});


  $('.custom-next1').click(function() {
    owl4.trigger('next.owl.carousel'); // ✅ correct syntax
  });
  
  $('.custom-prev1').click(function() {
    owl4.trigger('prev.owl.carousel', [300]); // ✅ correct syntax
  });

var owl4 = $(".owl-carousel-why-choose");
owl4.owlCarousel({
   items: 3,
   margin: 25,
   loop: true,
   nav: false,
   dots: false
});
  
});


$(document).on("click", ".navbar-toggler", function(e) {
  $(this).toggleClass("showBox");
  if ($(this).hasClass("showBox")) {
      $(".navbar-expand-mobile-view").removeClass("d-none");
  }else{
      $(".navbar-expand-mobile-view").addClass("d-none");
  }
});

$(document).on("click", ".navbar-expand-mobile-view .navbar-nav.mi-auto .nav-item.dropdown .dropdown-toggle", function(e) {
     $(this).parent().toggleClass("show_list")
});