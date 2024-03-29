jQuery(function () {
  var appear = false;
  var pagetop = $("#page_top");
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      if (appear == false) {
        appear = true;
        pagetop.stop().animate(
          {
            bottom: "0px",
          },
          300
        );
      }
    } else {
      if (appear) {
        appear = false;
        pagetop.stop().animate(
          {
            bottom: "-50px",
          },
          300
        );
      }
    }
  });
  pagetop.click(function () {
    $("body, html").animate({ scrollTop: 0 }, 500);
    return false;
  });
});

$(function () {
  $(".works__list").slick({
    arrows: true,
    autoplay: true,
    adaptiveHeight: true,
    centerMode: true,
    centerPadding: "10%",
    slidesToShow: 4,
    dots: true,
    responsive: [
      {
        breakpoint: 1400,
        settings: {
          slidesToShow: 4, // ブレイクポイント140px以下での表示数
          centerPadding: "10%",
        },
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3, // ブレイクポイント140px以下での表示数
          centerPadding: "10%",
        },
      },
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 2, // ブレイクポイント800px以下での表示数
          centerPadding: "10%",
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1, // ブレイクポイント800px以下での表示数
          centerPadding: "10%",
        },
      },
    ],
  });
});

$(document).ready(function () {
  $(".archive-list__dropdown").change(function () {
    var selectedOption = $(this).find("option:selected");
    var archiveLink = selectedOption.val();
    if (archiveLink) {
      window.location.href = archiveLink;
    }
  });
});

function redirectToArchive() {
  var select = document.querySelector(".archive-list__dropdown");
  var archiveLink = select.options[select.selectedIndex].value;

  // ページリダイレクト
  if (archiveLink) {
    window.location.href = archiveLink;
  }
}

$(function () {
  $(".property-slider").slick({
    autoplay: true,
    arrows: false,
    fade: true,
    asNavFor: ".thumbnail",
  });
  $(".thumbnail").slick({
    slidesToShow: 20,
    asNavFor: ".property-slider",
    focusOnSelect: true,
  });
});

$(function () {
  $(".search-btn").on("click", function () {
    var link = "http://localhost:4023/result?place=" + $(".stext").val();

    window.location.href = link;
  });
});

$(document).ready(function () {
  $(".map-area").on("click", function () {
    var areaName = $(this).data("area");

    if (areaName) {
      var link = "http://localhost:4023/result?place=" + areaName;
      window.location.href = link;
    } else {
      console.log("データがありません");
    }
  });
});
