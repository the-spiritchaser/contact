// JavaScript Document

//jquery.inview.js用動き設定
$(function() {
	// フェードイン
	$('.inviewfadeIn').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if (isInView) {
			$(this).stop().addClass('fadeIn');
		} else {
			$(this).stop().removeClass('fadeIn');
		}
	});

	// 上へスライド
	$('.inviewUp').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if (isInView) {
			$(this).stop().addClass('Up');
		} else {
			$(this).stop().removeClass('Up');
		}
	});
	// ズームイン
	$('.inviewzoomIn').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if (isInView) {
			$(this).stop().addClass('zoomIn');
		} else {
			$(this).stop().removeClass('zoomIn');
		}
	});
	// フェードインしながら上へスライド
	$('.inviewfadeInUp').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if (isInView) {
			$(this).stop().addClass('fadeInUp');
		} else {
			$(this).stop().removeClass('fadeInUp');
		}
	});
});


//サイドナビゲーション用ロールオーバー設定
$(function(){
	$('.service').hover(function(){
		$(this).text('サービス');
	},function(){
		$(this).text('SERVICE');
	});
	$('.works').hover(function(){
		$(this).text('開発実績');
	},function(){
		$(this).text('WORKS');
	});
	$('.blog').hover(function(){
		$(this).text('ブログ');
	},function(){
		$(this).text('BLOG');
	});
	$('.company').hover(function(){
		$(this).text('会社情報');
	},function(){
		$(this).text('COMPANY');
	});
	$('.recruit').hover(function(){
		$(this).text('採用情報');
	},function(){
		$(this).text('RECRUIT');
	});
});


//ページ遷移エフェクト設定
$(document).ready(function() {
  $(".animsition").animsition({
    inClass               :   'fade-in-left', // ロード時のエフェクト
    outClass              :   'fade-out-right', //離脱時のエフェクト
    inDuration            :    1500, //ロード時の演出時間
    outDuration           :    800, //離脱時の演出時間
    linkElement           :   '.animsition-link', //アニメーションを行う要素
    // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
    loading               :    true, //ローディングの有効/無効
    loadingParentElement  :   'body', //ローディング要素のラッパー
    loadingClass          :   'animsition-loading', //ローディングのクラス
    unSupportCss          : [ 'animation-duration',
                              '-webkit-animation-duration',
                              '-o-animation-duration'
                            ],
    overlay               :   false, //オーバーレイの有効/無効
    overlayClass          :   'animsition-overlay-slide', //オーバーレイのクラス
    overlayParentElement  :   'body' //オーバーレイ要素のラッパー
  });
});
