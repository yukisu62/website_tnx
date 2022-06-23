jQuery(window).on('load', function($){
	pageLoad();
});

	function pageLoad(){


		/* ハンバーガーメニュー　...自身の使いやすいように設定してOKです
		-----------------------------------------------------------------*/
		$('.hamburger').on('click','.open',function(){ /* .openおよび.closeが.hamburgerの子要素になるようにhtmlを組んでください */
			$(this).addClass('close');
			$(this).removeClass('open');
			$('.global-nav').stop().fadeIn(400);
			$('#wrap').addClass('scroll-stop');
		} );
		$('.hamburger').on('click','.close',function(){
			$(this).addClass('open');
			$(this).removeClass('close');
			$('.global-nav').stop().fadeOut(400);
			$('#wrap').removeClass('scroll-stop');
		} );

		jQuery(function($){
			$('.nav-item_heading').click(function(){
				$(this).next('.nav-item_contents').slideToggle();
				$(this).children('.plus').toggleClass('spin');
			});
		});

		// スムーススクロール

		$('a[href^="#"]').click(function () {
			var speed = 600;
			var href = decodeURI($(this).attr("href"));
			var target = $(href == "#" || href == "" ? 'html' : href);
			var position = target.offset().top;
			$('body,html').animate({ scrollTop: position }, speed, 'swing');
			return false;
		});


$(function(){
      $('.global-nav-contents a').on('click',function(){
        $('.global-nav').fadeOut(200);
        $('#wrap').removeClass('scroll-stop');
				$('.hbg_btn').addClass('open');
				$('.hbg_btn').removeClass('close');
      });
    });



		// メンバー紹介
		$('.member-image').click(function () {
			$(this).children('.member-fade-image').toggleClass('active');
		});

		// 質問アコーディオン
		$('.qa-item dt').on('click', function () {
			var findElm = $(this).next('.qa-item dd');
			$(findElm).slideToggle();
			if ($(this).hasClass('close')){
				$(this).removeClass('close');
			} else {
				$(this).addClass('close');
			}
		});

		// ナビゲーションcurrent
		if(location.pathname != "/") {
			$('.header-nav li a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('current');
		} 


		/* アニメーション ...自身の使いやすいように設定してOKです
		-----------------------------------------------------------------*/
		$(".Anime").each(function(){
			var hit	= $(this).offset().top;
			var scrollTopAnime	= $(window).scrollTop();
			var scrollmidTopAnime = scrollTopAnime + $(window).height()*0.9;
			console.log(scrollTopAnime);
			console.log(scrollmidTopAnime);
			console.log(hit);

			if (scrollmidTopAnime >= hit ){
				$(this).addClass("run");
			}
		});
		$(window).scroll(function (){
			$(".Anime").each(function(){
				var hit	= $(this).offset().top;
				var scrollTopAnime	= $(window).scrollTop();
				var scrollmidTopAnime = scrollTopAnime + $(window).height()*0.9;

				if (scrollmidTopAnime >= hit ){
					$(this).addClass("run");
				}
			});
		});

		/* レスポンシブ
		-----------------------------------------------------------------*/
		if (navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('Android') > 0 && navigator.userAgent.indexOf('Mobile') > 0) {
			// スマートフォン向けの記述

		} else if (navigator.userAgent.indexOf('iPad') > 0 || navigator.userAgent.indexOf('Android') > 0) {
			// タブレット向けの記述

		} else {
			// PC向けの記述

		}

		/* その他
		-----------------------------------------------------------------*/
		let vh = window.innerHeight * 0.01;
		document.documentElement.style.setProperty('--vh', `${vh}px`);

	}


	// 追従
	$(function() {
		var windowH = window.innerHeight;
		var initPosition = $(".side-bar").offset().top ;
		var contentsPosition = $(".contents").offset().top ;
		var footerPosition = $("#footer").offset().top;

		if(window.innerWidth > 960) {
			var startPosition =  windowH - 500 + "px";
		}
		else {
			var startPosition =  windowH - 400 + "px";
		}
		console.log(windowH);
		console.log(initPosition);

		$(".side-bar").css({
		top: 0
		});

		$(window).scroll(function() {
			var scroll = $(document).scrollTop();

			if(scroll > 0) {
				// 移動後ポジション
				if(window.innerWidth > 960) {
					var movePosition = windowH  - 1300 + scroll + "px";
				}
				else {
					var movePosition = windowH - 600 + scroll + "px";
				}

					$(".side-bar").animate({
						top: movePosition
					},
					{
					duration: 600,
					queue: false
					});
			}
		});
	});