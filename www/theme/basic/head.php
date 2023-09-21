<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

include EUM_INCLUDE_PATH.'/menus.php';
?>

<?php
if(defined('_INDEX_')) { // index에서만 실행
  include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
}
?>

<!-- 헤더 시작 { -->
<div id="header" class="<?php if(defined('_INDEX_')){echo 'main';} ?>">
  <h1 id="hd_logo">
    <a href="/">
      <img src="/source/img/logo-w.png" alt="한국과학관협회">
      <img src="/source/img/logo-c.png" alt="한국과학관협회">
    </a>
  </h1>

  <nav id="hd_gnb">
    <ul class="depth1">
      <?php foreach ($sb_menus as $menu) { ?>
      <li>
        <a href="<?php echo $menu['link'];?>"><?php echo $menu['name'];?></a>
        <?php if ( isset($menu['sb_2menus']) ) { ?>
        <ul class="depth2">
          <?php foreach ($menu['sb_2menus'] as $menu2) { ?>
          <li>
            <a href="<?php echo $menu2['link'];?>"><?php echo $menu2['name'];?></a>
            <?php if ( isset($menu2['sb_3menus']) ) { ?>
            <ul class="depth3">
              <?php foreach ($menu2['sb_3menus'] as $menu3) { ?>
              <li>
                <a href="<?php echo $menu3['link'];?>"><?php echo $menu3['name'];?></a>
              </li>
              <?php } ?>
            </ul>
            <?php } ?>
          </li>
          <?php } ?>
        </ul>
        <?php } ?>
      </li>
      <?php } ?>
    </ul>
  </nav>
</div>
<!-- } 헤더 끝 -->

<!-- 사이드 메뉴 시작 { -->
<div class="side-menu">
  <ul class="side-ul">
    <li>
      <button class="menu-btn">
        <?php for($i=0; $i<9; $i++){echo '<span></span>';} ?>
      </button>
    </li>
    <li>
      <a href="">
        <span><img src="/source/img/side-menu-icon01.png" alt="과학해설사"></span>
        <span>과학해설사</span>
      </a>
    </li>
    <li>
      <a href="">
        <span><img src="/source/img/side-menu-icon02.png" alt="연구성과"></span>
        <span>연구성과</span>
      </a>
    </li>
    <li>
      <a href="">
        <span><img src="/source/img/side-menu-icon03.png" alt="전시교류사업"></span>
        <span>전시교류사업</span>
      </a>
    </li>
  </ul>
  <ul class="side-bottom-ul">
    <li>
      <a href="">
        <img src="/source/img/side-sns-icon01.png" alt="">
      </a>
    </li>
    <li>
      <a href="">
        <img src="/source/img/side-sns-icon02.png" alt="">
      </a>
    </li>
    <li>
      <a href="">
        <img src="/source/img/side-sns-icon03.png" alt="">
      </a>
    </li>
    <li>
      <a href="">
        <img src="/source/img/side-sns-icon04.png" alt="">
      </a>
    </li>
    <li>
      <?php if(defined('_INDEX_')){ ?>
      <a href="#page1" class="top-btn">
        <span><img src="/source/img/icon-top.png" alt=""></span>
        <span>TOP</span>
      </a>
      <?php }else{ ?>
      <button class="top-btn">
        <span><img src="/source/img/icon-top.png" alt=""></span>
        <span>TOP</span>
      </button>
      <?php } ?>
    </li>
  </ul>
</div>
<!-- } 사이드 메뉴 시작 -->


<!-- 콘텐츠 시작 { -->
<div id="contents_dom">