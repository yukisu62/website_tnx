<!-- <?php
	// var_dump($_POST);
	$post_your_name     = $_POST["your_name"]   ? $_POST["your_name"]     : "";
	$post_email       = $_POST["email"]     ? $_POST["email"]       : "";
	$post_tel     = $_POST["tel"]     ? $_POST["tel"]       : "";
	$post_details     = $_POST["details"]     ? $_POST["details"]       : "";

	// 変数の初期化
	$page_flag = 0;
	$clean = array();
	$error = array();

	// サニタイズ
	if( !empty($_POST) ) {
	foreach( $_POST as $key => $value ) {
		$clean[$key] = htmlspecialchars( $value, ENT_QUOTES);
	}
	}

	if( !empty($_POST['btn_confirm']) ) {

	$page_flag = 1;

	} elseif( !empty($_POST['btn_submit']) ) {

	$page_flag = 2;


	// 変数とタイムゾーンを初期化
	$header = null;
	$auto_reply_subject = null;
	$auto_reply_text = null;
	$admin_reply_subject = null;
	$admin_reply_text = null;
	date_default_timezone_set('Asia/Tokyo');

	// ヘッダー情報を設定
	$header = "MIME-Version: 1.0\n";
	$header .= "From: 株式会社TNX<info@tnx.jp>\n";
	$header .= "Reply-To:株式会社TNX<info@tnx.jp>\n";

	// 件名を設定
	$auto_reply_subject = 'お問い合わせありがとうございます。';

	// 本文を設定
	$auto_reply_text = "この度は、お問い合わせ頂き誠にありがとうございます。
	下記の内容でお問い合わせを受け付けました。\n\n";
	$auto_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
	$auto_reply_text .= "お名前：" . $post_your_name . "\n";
	$auto_reply_text .= "メールアドレス：" . $post_email . "\n";
	$auto_reply_text .= "電話番号：" . $post_tel . "\n";
	$auto_reply_text .= "お問い合わせ内容：\n" . $post_details . "\n\n";
	$auto_reply_text .= "株式会社TNX";

	// メール送信
	mb_send_mail( $post_email, $auto_reply_subject, $auto_reply_text, $header);

	// 運営側へ送るメールの件名
	$admin_reply_subject = "お問い合わせを受け付けました";

	// 本文を設定
	$admin_reply_text = "下記の内容でお問い合わせがありました。\n\n";
	$admin_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
	$admin_reply_text .= "お名前：" . $post_your_name . "\n";
	$admin_reply_text .= "メールアドレス：" . $post_email . "\n";
	$admin_reply_text .= "電話番号：" . $post_tel . "\n";
	$admin_reply_text .= "お問い合わせ内容：\n" . $post_details . "\n\n";

	// 運営側へメール送信
	// mb_send_mail( 'yuki.mac6@gmail.com', $admin_reply_subject, $admin_reply_text, $header);
	  mb_send_mail( 'tnx.kawasaki@gmail.com', $admin_reply_subject, $admin_reply_text, $header);
	}
?> -->

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Language" content="ja">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title>株式会社TNX | 関東の軽貨物運送</title>
<meta name="description" content="関東の軽貨物運送のTNX、お米を中心とした食材の配送案件が強みの運送会社です。宅配のなかでも需要が大きく減ることのない食材関連のため、このご時世でもドライバー様の案件を安定して供給できております。">
<meta name="keywords" content="TNX,川崎,東京,千葉,初心者,軽貨物,ルート配送,定期便,スポット配送,米の配送,軽貨物ドライバーの求人,">
<link rel="icon" type="image/png" href="favicon.png">
<link rel="apple-touch-icon-precomposed" sizes="180×180" href="apple-touch-icon.png">
<!-- ogp -->
<meta property="og:title" content="">
<meta property="og:site_name" content="">
<meta property="og:type" content="website">
<meta property="og:description" content="食材中心の配達が強みです。 宅配のなかでも需要が大きく減ることのない食材関連のため、このご時世でもドライバー様の案件を安定して供給できております。">
<meta property="og:url" content="">
<meta property="og:image" content="ogp.jpg">
<meta property="og:locale" content="ja_JP">
<meta name="twitter:card" content="">
<meta name="twitter:site" content="">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@">
<meta name="twitter:title" content="">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="">
<!-- //ogp -->

<link rel="stylesheet" type="text/css" href="css/cmn.css?20220125">
<link rel="stylesheet" type="text/css" href="css/index.css?20220125">
<link rel="stylesheet" type="text/css" href="css/animate.css?20220125">
<link rel="stylesheet" type="text/css" href="css/cloud.css?20220125">
<link rel="stylesheet" href="slick/slick-theme.css">
<link rel="stylesheet" href="slick/slick.css">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-219521798-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-219521798-1');
</script>
</head>

<body id="body" class="scroll-stop">

	<div id="loding" class="loding">
		<div class="loding-inner">
			<p class="loding-ttl Anime fadeIn_up_loding"><span class="thanks-span-pre">ありがとう</span>が
				<br class="sp">一番聞こえる<br class="pc tablet"> 
				<br class="sp">企業をめざして</p>
		</div>
	</div>
	<div id="wrap" class="wrap">
		<?php require "header.php";?> 
		<main id="l-wrapper">
			<section id="hero">
				<div class="hero-image-wrap">
					<div class="hero-image">
						<div class="swiper-slide">
							<img src="image/hero-image01.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="image/hero-image02.jpg" alt="">
						</div>
						<div class="swiper-slide">
							<img src="image/hero-image03.jpg" alt="">
						</div>
					</div>
				</div>
			</section>
			<div class="contents">
				<?php require "clouds.php" ?>
				<!-- 案件紹介bar -->
				<div class="side-bar">
					<div class="side-bar-inner">
						<a href="/partner#working-info">
							案件紹介はこちら
						</a>
					</div>
				</div>
				<div class="contents-inner">
					<section id="top_message" class="top_message">
						<div class="top-ttl-message">
							<h2 class="Anime fadeIn_up">THANK YOU<br>BRIDGE MISSION</h2>
							<p class="Anime fadeIn_up">私たちが "ツナグ"<br>
								それは、ラストワンマイルの<br>
								世界が変わる。<br>
								"SMILE BRIGE"</p>
						</div>
						
						<div class="bottom-ttl-message Anime fadeIn_up">
							<p>TNXが企業と消費者を繋ぎ合わせ<br>
								大きな架け橋となって<br>
								全国に笑顔と荷物を届けます。</p>
						</div>
					</section>
					<section id="link-container" class="link-container">
						<div class="link-container-inner">
							<div class="link-items">
								<div class="link-item Anime fadeIn_right">
									<a href="/service/">
										<div class="link-txt-area">
											<div class="link-ttl-wrapper">
												<h4 class="link-ttl">SERVICE<span>サービス</span></h4>
											</div>
											<div class="link-txt-wraper ">
												<p class="link-txt">
													食材中心の配達が強みです。<br>
													宅配のなかでも<br>
													需要が大きく減ることのない<br>
													食材関連のため、このご時世でも<br>
													ドライバー様の案件を安定して<br>
													供給できております。</p>
												<p class="link-btn"><span>詳しくはこちら</span></p>
											</div>
										</div>
										<div class="link-image">
											<img src="/image/link-image01.jpg" alt="">
										</div>
									</a>
								</div>
								<div class="link-item  Anime fadeIn_left">
									<a class="even-item" href="/partner/">
										<div class="link-txt-area">
											<div class="link-ttl-wrapper">
												<h4 class="link-ttl">PARTNER<span>パートナー募集</span></h4>
											</div>
											<div class="link-txt-wraper">
												<p class="link-txt">
													配達パートナーを募集しております。<br>稼ぎたい方、<br>一人で気楽に仕事をしたい方、<br>未経験者も歓迎しております。
													</p>
												<p class="link-btn">詳しくはこちら</p>
											</div>
										</div>
										<div class="link-image">
											<img src="/image/link-image02.jpg" alt="">
										</div>
									</a>
								</div>
							</div>
						</div>
	
					</section>
					<section id="company" class="company">
						<p class="section-ttl">会社概要</p>
						<div class="company-list-area">
							<dl>
								<dt>事業所名</dt>
								<dd>株式会社TNX</dd>
							</dl>
							<dl>
								<dt>代表取締役</dt>
								<dd>新井 大介</dd>
							</dl>
							<dl>
								<dt>TEL</dt>
								<dd>044-244-0727</dd>
							</dl>
							<dl>
								<dt>FAX</dt>
								<dd>044-244-0728</dd>
							</dl>
							<dl>
								<dt>住所</dt>
								<dd>〒210-0818<br>
									神奈川県川崎市川崎区中瀬2-8-18<br>アネックス川崎大師1F</dd>
							</dl>
							<dl>
								<dt>設立</dt>
								<dd>平成30年6月1日</dd>
							</dl>
							<dl>
								<dt>資本金</dt>
								<dd>1,000,000円</dd>
							</dl>
							<dl>
								<dt>事業内容</dt>
								<dd>軽貨物運送事業</dd>
							</dl>
						</div>
					</section>
					<section id="qa" class="qa">
						<p class="section-ttl">よくあるご質問</p>
							<p class="qa-sub">よくあるご質問にお答えいたします。</p>
							<div class="qa-container">
								<dl>
									<div class="qa-item">
										<dt>配達する上で資格などは必要ですか？<span></span></dt>
										<dd>運転免許証があれば基本的にはどなたでも配達の仕事をはじめていただけます。<br>その他ご不安なことがあればお気軽にお問い合わせください。</dd>
									</div>
									<div class="qa-item">
										<dt>週払いや日払いの制度はありますか？<span></span></dt>
										<dd>はい。週払いは可能です。※諸条件あり。日払いに関しては、勤務実績などを考慮の上決めさせていただいておりますので一度ご相談ください。</dd>
									</div>
									<div class="qa-item">
										<dt>女性で初心者ですが重い荷物などあるか不安です。<span></span></dt>
										<dd>弊社には数名女性ドライバーも在籍しておりますが、軽い荷物を中心とした案件もございますのでご安心ください。女性ドライバーの方々もしっかりと稼げるような環境を作っておりますので一度ご相談ください。</dd>
									</div>
									<div class="qa-item">
										<dt>車のレンタルは可能でしょうか？<span></span></dt>
										<dd>車のレンタルは可能です。月々の料金についてなどの情報は一度お問い合わせくださいませ。</dd>
									</div>
									<!-- <div class="qa-item">
										<dt>車のレンタルは可能でしょうか？<span></span></dt>
										<dd>車のレンタルは可能です。月々の料金についてなどの情報は一度お問い合わせくださいませ。</dd>
									</div> -->
								</dl>
							</div>
					</section>
					<section id="contact" class="contact">
						<p class="section-ttl">お問い合わせ</p>
						<p class="contact-sub">求人応募もこちらから</p>
						<p class="tel-txt">お電話でも受け付けております。<br>
							ご質問などもお気軽にお問い合わせください。</p>
							<a class="tel-link" href="tel:044-244-0727">お電話番号 : 044-244-0727</a>
						<div class="contact-inner">
							
							<?php if( $page_flag === 1 ): ?>
							<!-- confirm -->
							<p class="confirm-alart-txt">以下の内容で送信します。<br>内容をご確認ください。</p>
							<form  class="form h-adr" method="post" action=""  name="myform" >
								<dl>
									<dt class="required">お名前</dt>
									<dd><p><?php echo $post_your_name; ?></p></dd>
								</dl>
								<dl>
									<dt class="required">メールアドレス</dt>
									<dd><p><?php echo $post_email; ?></p></dd>
								</dl>
								<dl>
									<dt class="required">お電話番号</dt>
									<dd><p><?php echo $post_tel; ?></p></dd>
								</dl>
								<dl class="flex-dl">
									<dt class="">お問い合わせ内容</dt>
									<dd><?php	echo nl2br($post_details); ?></dd>
								</dl>
								<div class="submit-btn-area">
									<input type="submit" class="prev-btn" name="btn_prev"  onclick="history.back()" value="戻る">
									<input type="submit" class="submit-btn"  name="btn_submit" value="送信">
								</div>

								<input type="hidden" name="your_name" value="<?php echo $post_your_name; ?>">
								<input type="hidden" name="email" value="<?php echo $post_email; ?>">
								<input type="hidden" name="tel" value="<?php echo $post_tel; ?>">
								<input type="hidden" name="details" value="<?php echo $post_details; ?>">
								<input type="hidden" name="scroll_top" value="<?php echo $post_scroll_top; ?>" class="st">


							</form>

						<?php elseif( $page_flag === 2 ): ?>
								<!-- thanks -->
								<div class="">
								<p class="thanks-txt">お問い合わせを受け付けました。<br>
								ご入力いただきましたメールアドレスへ、<br>自動返信メールを送信しておりますのでご確認ください。</p>
							</div>
						<?php else: ?>

							<!-- 入力 -->
							<form  class="form h-adr" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8'); ?>"  name="myform" >
								<dl>
									<dt class="required">お名前</dt>
									<dd><input type="text" name="your_name" placeholder="お名前を入力してください。" required value="<?php if( isset($post_your_name) ){ echo ($post_your_name); } ?>"></dd>
								</dl>
								<dl>
									<dt class="required">メールアドレス</dt>
									<dd><input type="email" name="email" placeholder="メールアドレスを入力してください。" required value="<?php if( isset($post_email) ){ echo $post_email; } ?>"></dd>
								</dl>
								<dl>
									<dt class="required">お電話番号</dt>
									<dd><input type="tel" name="tel" placeholder="電話番号を入力してください。"　required value="<?php if( isset($post_tel) ){ echo ($post_tel); } ?>"></dd>
								</dl>
								<dl class="flex-dl">
									<dt class="">お問い合わせ内容</dt>
									<dd class="dd-textarea"><textarea type="text" name="details" placeholder="例：求人についての質問をさせていただきたいです。" ><?php if( isset($post_details) ){ echo $post_details; } ?></textarea></dd>
								</dl>
								<div class="confirm-btn-area">
									<input type="submit" name="btn_confirm" id="confirmBtn" class="confirm-btn" value="内容を確認する"></input>
									<input type="hidden" name="scroll_top" value="" class="st">
									
								</div>
							</form>

						<?php endif; ?>
						
						</div>
					</section>
				</div>
			</div>
		</main>
		<?php require "footer.php";?> 
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/js/cmn.js"></script>
<script src="/js/rellax.min.js"></script>
<script src="/slick/slick.min.js"></script>
<script>var rellax = new Rellax('.rellax');</script>
<script>
	$(document).ready(function () {
      $('.hero-image').slick({
        fade:true,
        arrows : false,
        autoplay: true,
        dots: true,
        infinite: true,
        autoplaySpeed: 4000,
        speed:1000,
      });

    });
</script>
<script>
	var webStorage = function(){
	if(sessionStorage.getItem('access')){
		console.log('2回目以降のアクセスです');
		$("body").removeClass("scroll-stop");
		$("#loding").css("display","none");
	} else {
		console.log('初回アクセスです');
		sessionStorage.setItem('access', 0);
		$(window).on('load',function(){
			$("#loding").delay(5000).fadeOut('slow');
			$(".thanks-span-pre").addClass('thanks-span-active');
			setTimeout(function(){
				$("body").removeClass("scroll-stop");
			},5500);
			});

			function GlowAnimeControl() {
				$('.loding-ttl').each(function () {
					var elemPos = $(this).offset().top - 50;
					var scroll = $(window).scrollTop();
					var windowHeight = $(window).height();
					if (scroll >= elemPos - windowHeight) {
					$(this).addClass("glow");

					} else {
					$(this).removeClass("glow");
					}
				});
			}
	}
	}

	webStorage();
</script> 


<!-- テスト用 -->
<!-- <script>
	var webStorage = function(){

		console.log('初回アクセスです');
		sessionStorage.setItem('access', 0);
		$(window).on('load',function(){
			$("#loding").delay(4000).fadeOut('slow');
			$(".thanks-span-pre").addClass('thanks-span-active');
			setTimeout(function(){
				$(".loding-ttl").addClass("glow");
			},2000);
			setTimeout(function(){
				$("body").removeClass("scroll-stop");
			},4500);
			
			});
			
	}

	webStorage();
</script> -->


<!-- バリデーション -->
<script>
	function check_contactform() {
		var name = $('input[name="your_name"]').val();
		var email = $('input[name="email"]').val();
		var tel = $('input[name="tel"]').val();
		var contens = $('textarea[name="details"]').val();
		var errmsg = "";
		if(name == "") {
			errmsg = "お名前を入力して下さい\n";
		}
		if(email == "") {
			errmsg = errmsg + "メールアドレスを入力して下さい\n";
		}
		if(!email.match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)) {
			errmsg = errmsg + "メールアドレスをご確認下さい\n";
		}
		if(tel == "") {
			errmsg = errmsg + "電話番号を入力して下さい\n";
		}
		if(contents == "") {
			errmsg = errmsg + "お問い合わせ内容を入力して下さい\n";
		}
		if(errmsg != "") {
			alert(errmsg);
			return false;
		}
		$('form[name="myform"]').submit();


	}
</script>
<!-- フォーム送信時位置調整 -->
<script>
	$('form').submit(function(){
		var scroll_top = $(window).scrollTop();  
		$('input.st',this).prop('value',scroll_top); 
	});
 
	window.onload = function(){
	$(window).scrollTop(<?php echo @$_REQUEST['scroll_top']; ?>);
	}

</script>
</body>
</html>