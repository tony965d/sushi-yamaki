
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる


  ///// ハンバーガー /////
  $('.js-hamburger').click(function() {
    if($('.js-hamburger').hasClass('active')) {
      $('.js-hamburger').removeClass('active');
      $('.js-sp-nav').fadeOut(500);
      $('body').css('overflow', 'auto');
    } else {
      $('.js-hamburger').addClass('active');
      $('.js-sp-nav').fadeIn(500);
      $('body').css('overflow', 'hidden');
    }
  });
  


  ///// * ズームアウト */////
  $(document).ready(function() {
    // ページが読み込まれた後に実行されるコード
    $('.js-mv-sub').each(function() {
      // アニメーションを適用したい要素にスタイルを設定
      $(this).css('animation', 'zoomOut 1s ease-out forwards');
    });
  });



  ///// 下からフェードイン /////
$(".js-fadeUp").css("opacity", 0);
ScrollTrigger.batch(".js-fadeUp", {
  onEnter: (elements, triggers) => {
    gsap.set(elements, { y: '20%', opacity: 0 });
    gsap.to(elements, {
      y: 0,
      opacity: 1,
      duration: 1, // アニメーション時間を1秒に変更
      onComplete: () => {
        gsap.set(elements, { clearProps: 'transform' }); // Transformプロパティを無効にする
      }
    });
  },
  start: "top 60%", // スクロール開始位置を少し下にずらす（60%の位置で開始）
  once: true
});




///// 左からフェードイン /////
$(".js-fadeLeft").css("opacity", 0);
  ScrollTrigger.batch(".js-fadeLeft", {
  onEnter: (elements, triggers) => {
    gsap.set(elements, { x: '-20%', opacity: 0 }); // 左に移動させる
    gsap.to(elements, {
      x: 0,
      opacity: 1,
      duration: 1,
      onComplete: () => {
        gsap.set(elements, { clearProps: 'transform' }); // Transformプロパティを無効にする
      }
    });
  },
  start: "top 70%", // スクロール開始位置を少し下にずらす（70%の位置で開始）
  once: true
});



///// スムーススクロール
$(function(){
  var headerHeight = $('header').outerHeight() + 10; // ヘッダーについているID、クラス名など、余白を開けたい場合は + 10を追記する。
  var urlHash = location.hash; // ハッシュ値があればページ内スクロール
  if(urlHash) { // 外部リンクからのクリック時
    $('body,html').stop().scrollTop(0); // スクロールを0に戻す
    setTimeout(function(){ // ロード時の処理を待ち、時間差でスクロール実行
      var target = $(urlHash);
      var position = target.offset().top - headerHeight;
      $('body,html').stop().animate({scrollTop:position}, 500); // スクロール速度ミリ秒
    }, 100);
  }
  $('a[href^="#"]').click(function(){ // 通常のクリック時
    var href= $(this).attr("href"); // ページ内リンク先を取得
    var target = $(href);
    var position = target.offset().top - headerHeight;
    $('body,html').stop().animate({scrollTop:position}, 500); // スクロール速度ミリ秒
    return false; // #付与なし、付与したい場合は、true
  });
});



/// mv画像swiperフェードアウト /////
var swiper = new Swiper(".js-mv-swiper", {
  loop: true,
  effect: 'fade',
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  speed: 2000,
});







});
