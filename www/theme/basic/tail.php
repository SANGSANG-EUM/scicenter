<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

<?php if(!defined('_INDEX_')) {echo '</div>';} ?> <!-- header.php : #contents_dom -->
<!-- } 콘텐츠 끝 -->

<!-- 푸터 시작 { -->
<div id="footer">
  <div class="relation_wrap">
    <div class="wrapper">
      <div class="i-col-0 relation_slide_box">
        <div class="relation_slide_list">
          <div class="swiper-wrapper">
            <div class="swiper-slide relation_slide_list_item">
              <img src="/source/img/relation-site01.png" alt="">
            </div>
            <div class="swiper-slide relation_slide_list_item">
              <img src="/source/img/relation-site02.png" alt="">
            </div>
            <div class="swiper-slide relation_slide_list_item">
              <img src="/source/img/relation-site03.png" alt="">
            </div>
            <div class="swiper-slide relation_slide_list_item">
              <img src="/source/img/relation-site04.png" alt="">
            </div>
            <div class="swiper-slide relation_slide_list_item">
              <img src="/source/img/relation-site05.png" alt="">
            </div>
            <div class="swiper-slide relation_slide_list_item">
              <img src="/source/img/relation-site06.png" alt="">
            </div>
            <div class="swiper-slide relation_slide_list_item">
              <img src="/source/img/relation-site07.png" alt="">
            </div>
          </div>
        </div>
        <div class="relation_slide_btn_box">
          <div class="relation_slide_btn_wrap">
            <button class="relation_slide_prev"></button>
            <button class="relation_slide_next"></button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ft_info_wrap">
    <div class="wrapper">
      <div class="ft_info_box">
        <p class="add">(34126) 대전 유성구 대덕대로512번길 20 (도룡동 3-1), 대전정보문화산업진흥원B동308호</p>
        <ul class="i-col-0 ft_info_ul">
          <li>Tel. 042.862.9500</li>
          <li>Fax. 042.862.9700</li>
          <li>사업자번호. 314-82-11663</li>
        </ul>
        <p class="copyright">Copyright (c) 2023 The Korea Science Center and Museum Association. All rights reserved.</p>
        <ul class="i-col-0 ft_menu_list">
          <li><a href="">이용약관</a></li>
          <li><a href="">개인정보처리방침</a></li>
          <li><a href="">이메일수집거부</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- } 푸터 끝 -->

<?php
if ($config['cf_analytics']) {
  echo $config['cf_analytics'];
}
?>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");