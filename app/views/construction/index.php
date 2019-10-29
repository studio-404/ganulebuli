<?php 
require_once("app/functions/l.php"); 
require_once("app/functions/strings.php"); 
require_once("app/functions/strip_output.php"); 
$l = new functions\l(); 
$string = new functions\strings(); 
echo $data['headerModule'];// assets
// echo $data['headertop'];
?>

<div class="loader">
	<img src="/public/img/web/loader.gif" alt="" />
</div>

<div class="content">
	<div id="go-top" style="position: absolute; top: 0; left: 0; width: 100%; height: 1px; opacity: 0;"></div>
	

	<section class="slider-box inside-image" style="background-image: url('/public/img/web/msheneblobaR.png');">
		<div class="inside-title">
			<h1>მშენებლობა</h1>
		</div>
	</section>
	
	<header class="inside">
		<div class="logo">
			<a href="/<?=$_SESSION["LANG"]?>/home">logo</a>
		</div>

		<div class="contact">
			<div class="info phone"><a href="tel:<?=str_replace(array("+", " "), '', strip_tags($data["contactdetails"][0]["description"]))?>"><?=strip_tags($data["contactdetails"][0]["description"])?></a></div>
			<div class="info address"><?=strip_tags($data["contactdetails"][1]["description"])?></div>
		</div>

		<div class="right">
			<div class="nav-btn" data-opened="false">
				<div class="line line1"></div>
				<div class="line line2"></div>
				<div class="line line3"></div>
			</div>

			<div class="hor-line"></div>

			<ul class="social">
				<?php foreach($data["social"] as $value): ?>
				<li><a href="<?=$value["url"]?>" class="<?=$value["classname"]?>" target="_blank">i</a></li>
				<?php endforeach; ?>
			</ul>
		</div>

		<nav class="nav inside-nav">
			<ul class="main">
				<li><a href="/<?=$_SESSION["LANG"]?>/home">მთავარი</a></li>
				<li>
					<a href="/<?=$_SESSION["LANG"]?>/flats">ბინები</a>
					 <ul class="sub">
					 	<li><a href="#">ბინა 50კვ</a></li>
					 	<li><a href="#">ბინა 55კვ</a></li>
					 	<li><a href="#">ბინა 60კვ</a></li>
					 	<li><a href="#">ბინა 65კვ</a></li>
					 	<li><a href="#">ბინა 70კვ</a></li>
					 </ul>
				</li>
				<li class="active"><a href="/<?=$_SESSION["LANG"]?>/construction">მშენებლობა</a></li>
			</ul>
		</nav>
	</header>

	<section class="mshenebloba">
		<div class="row">
			<div class="col-md-6 col-sm-12 m-black m-left-blank">
				<h2><?=$data["section1"][0]["title"]?></h2>
				<div class="text">
					<?=strip_tags($data["section1"][0]["description"], "<h3><p>")?>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 m-white">
				<div class="m-image-centered" style="background-image: url('<?=$data["section1"][0]["photo"]?>');"></div>
			</div>
		</div>
	</section>

	<section class="fullimage" style="background-image: url('<?=$data["seperate1"][0]["photo"]?>');">
		<h2><?=$data["seperate1"][0]["title"]?></h2>
	</section>
	
	<section class="mshenebloba">
		<div class="row">
			<div class="col-md-6 col-sm-12 m-white m-text">
				<h2><?=$data["section2"][0]["title"]?></h2>

				<div class="text">
					<?=strip_tags($data["section2"][0]["description"], "<h3><p>")?>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 m-white">
				<div class="m-bigimage" style="background-image: url('<?=$data["section2"][0]["photo"]?>');"></div>
			</div>
		</div>
	</section>

	<section class="mshenebloba">
		<div class="row">
			<div class="col-md-6 col-sm-12 m-white mobile-hide">
				<div class="m-bigimage m-left-grow" style="background-image: url('<?=$data["section3"][0]["photo"]?>');"></div>
			</div>

			<div class="col-md-6 col-sm-12 m-white m-text" id="mobile-margin-top0">
				<h2><?=$data["section3"][0]["title"]?></h2>

				<div class="text">
					<?=strip_tags($data["section3"][0]["description"], "<h3><p>")?>
				</div>
			</div>
		</div>
	</section>

	<section class="fullimage" style="background-image: url('<?=$data["seperate2"][0]["photo"]?>');">
		<h2><?=$data["seperate2"][0]["title"]?></h2>
	</section>

	<section class="mshenebloba">
		<div class="row">
			<div class="col-md-6 col-sm-12 m-white">
				<div class="m-image-centered m-float-right" style="background-image: url('<?=$data["section4"][0]["photo"]?>');"></div>
			</div>

			<div class="col-md-6 col-sm-12 m-black m-right-blank m-padding-left100 m-padding-right0">
				<h2><?=$data["section4"][0]["title"]?></h2>
				<div class="text">
					<?=strip_tags($data["section4"][0]["description"], "<h3><p>")?>
				</div>
			</div>
			
		</div>
	</section>

	<section class="scroll">
		<div class="scrollup">
			<div class="icon"></div>
			<span>თავში დაბრუნება</span>
		</div>
	</section>

	<footer class="m-shadow">
		<div class="box">
			<div class="row">
				<div class="col-md-3 col-sm-12">
					<div class="footerlogo"></div>
				</div>
				<div class="col-md-9 col-sm-12">
					<div class="infos">
						<div class="info call"><a href="tel:<?=str_replace(array("+", " "), '', strip_tags($data["contactdetails"][0]["description"]))?>"><?=strip_tags($data["contactdetails"][0]["description"])?></a></div>
						<div class="info address"><?=strip_tags($data["contactdetails"][1]["description"])?></div>
					</div>

					<a href="http://getsadze.ge/" class="design" target="_blank"></a>
				</div>
			</div>
		</div>
	</footer>
</div>


<script src="/public/js/web/jquery.js?v=<?=time()?>"></script>
<script src="/public/js/web/bootstrap.js?v=<?=time()?>"></script>
<script src="/public/js/web/generalJquery.js?v=<?=time()?>"></script>
<script src="/public/js/web/general.js?v=<?=time()?>"></script>