/**
 * [메인] 풀페이지
 */
const mainFullPage = () => {
  $('#main').fullpage({
    anchors: ['page1', 'page2', 'page3', 'page4', 'page5'],
    autoScrolling:true,
    //navigation: true,
    showActiveTooltip: false,
    //responsiveWidth: 1024,
    onLeave: function(anchorLink, index){
      if(index == 2 || index == 4 || index == 5){
        $('#header').addClass('white');
      }else{
        $('#header').removeClass('white');
      }
    }
  });
}

  // [plugin-Swiper] main visual
  const mainVisualTimebar = (state) => {
    if (state == 'init') {
      $(".main_visual_time .bar span").stop().css({"width":"0"});
    } else if (state == 'ing') {
      $(".main_visual_time .bar span").stop().animate({width: "100%"}, 5000);
    } else {
      $(".main_visual_time .bar span").stop().css({"width":"0"});
    }
  }

/**
 * [메인] 메인 비주얼 슬라이드
 */
const mainVisualSlide = () => {
  let mvSwiper = new Swiper('.main_visual',{
    slidesPerView : 'auto', // 한 슬라이드에 보여줄 갯수
    loop : true,   // 슬라이드 반복 여부
    loopAdditionalSlides : 1,
    autoplay: {     //자동슬라이드 (false-비활성화)
      delay: 5000, // 시간 설정
      disableOnInteraction: false, // false-스와이프 후 자동 재생
    },
    pagination: {
      el: ".main_slide_control .swiper-pagination",
      type: "fraction",
    },
    on: {
      init: function () {
        mainVisualTimebar('ing')
      },
      slideChangeTransitionEnd: function () {
        mainVisualTimebar('init')
        mainVisualTimebar('ing')
      },
    },
  });

  let mainVisualStopBtn = $(".mv_stop");

  mainVisualStopBtn.on("click", function(){
    if($(this).hasClass('on')){
      $(this).removeClass('on');
      mainVisualTimebar('ing');
      mvSwiper.autoplay.start();
      $(this).find('img').attr('src','/source/img/icon-stop.png');
    }else{
      $(this).addClass('on');
      mainVisualTimebar('init')
      mvSwiper.autoplay.stop();
      $(this).find('img').attr('src','/source/img/icon-play.png');
    }
  });
}

/**
 * [메인] 컨텐츠 영역 마우스 오버
 */
const mainContentList = () => {
  let item = $('.main_contents_list_item ');
  let itemImg = $('.main_contents_img');

  item.on('mouseover',function(){
    item.removeClass('active');
    $(this).addClass('active');
    let th = $(this).index();
    itemImg.hide();
    itemImg.eq(th).show();
  });
}

/**
 * [푸터] 관련 사이트 슬라이드
 */
const ftRelationSlide = () => {
  let ftSwiper = new Swiper('.relation_slide_list',{
    slidesPerView : 7, // 한 슬라이드에 보여줄 갯수
    loop : true,   // 슬라이드 반복 여부
    loopAdditionalSlides : 1,
    autoplay: {     //자동슬라이드 (false-비활성화)
      delay: 3000, // 시간 설정
      disableOnInteraction: false, // false-스와이프 후 자동 재생
    },
    navigation: {
      nextEl: ".relation_slide_next",
      prevEl: ".relation_slide_prev",
    },
  });
}

const topBtnFunc = () => {
  $('.top-btn').on('click',function(){
    $('html, body').animate({
      scrollTop : 0
    }, 400);
  });
}

// document ready
$(document).ready(function(){
  mainFullPage();
  mainVisualSlide();
  mainContentList();
  ftRelationSlide();
  topBtnFunc();
}); // document ready end