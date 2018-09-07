
<!-- <link rel="stylesheet" href="css/headstyle.css"> -->


<header class="page-header" style="position: fixed;">
			<div class="head_ui toggle">
				<p class="head_ui_text"></p>
				<div class="head_ui_wrap">
					<div class="toggle_area">
						<span class="bar01"></span>
						<span class="bar02"></span>
						<span class="bar03"></span>
					</div>
				</div>
			</div>
			<h1 class="head_wrap">
				<p class="head_logo">
					<a href="https://artie.co.jp/">
                                <img src="" alt="">
					</a>
				</p>
			</h1>
			<div class="navigation">
				<nav class="back_img5">
					<ul>
                        <li class="nav1" style="height: 304.96px;">
							<a href="index.php">
								<div class="nav_inner">
									<p class="main">Home</p>
								</div>
							</a>
						</li>
						<li class="nav2" style="height: 304.96px;">
							<a href="about.php">
								<div class="nav_inner">
									<p class="main">About Us</p>
								</div>
							</a>
						</li>
						<li class="nav3" style="height: 304.96px;">
							<a href="products.php">
								<div class="nav_inner">
									<p class="main">Products</p>
								</div>
							</a>
						</li>
						<li class="nav4" style="height: 304.96px;">
							<a href="news.php">
								<div class="nav_inner">
								  <p class="main">News</p>
								</div>
							</a>
						</li>
						 <li class="nav5" style="height: 304.96px;">
							<a href="contact.php">
								<div class="nav_inner">
									<p class="main">Contact</p>
								</div>
							</a>
						</li>
						<li class="nav6" style="height: 304.96px;">
							<a href="#">
								<div class="nav_inner">
									<p class="main">♡♡♡</p>
								</div>
							</a>
						</li>
						 <li class="nav7" style="height: 304.96px;">
							<a href="https://artie.co.jp/faq/">
								<div class="nav_inner">
									<p class="main">FAQ</p>
								</div>
							</a>
						</li>
						<li class="nav8" style="height: 304.96px;">
							<a href="https://artie.co.jp/company/">
								<div class="nav_inner">
									<p class="main">会社概要</p>
								</div>
							</a>
						</li>
						<!--<li class="nav9" style="height: 304.96px;">
							<a href="https://artie.co.jp/contact/">
								<div class="nav_inner">
									<p class="main">お問い合わせ</p>
								</div>
							</a>
						</li>  -->
					</ul>
				</nav>
				<div class="nav_bg"></div>
			</div>
        </header>

<div id="loading" style="display: none;">
    <span id="loader"><span style="width: 100%;"></span></span>
</div>


<script src="../js/header.js"></script>
<script src="../js/script.js"></script>
<script>
    $(function(){
    // 設定
        var $interval = 10000; // 切り替わりの間隔（ミリ秒）
        var $fade_speed = 2000; // フェード処理の早さ（ミリ秒）
        $("#KvFade ul li").css({"position":"relative","overflow":"hidden"});
        $("#KvFade ul li").hide().css({"position":"absolute","top":0,"left":0});
        $("#KvFade ul li:first").addClass("active").show();
            setInterval(function(){
            var $active = $("#KvFade ul li.active");
            var $next = $active.next("li").length?$active.next("li"):$("#KvFade ul li:first");
            $active.fadeOut($fade_speed).removeClass("active");
            $next.fadeIn($fade_speed).addClass("active");
        },$interval);
    });
</script>