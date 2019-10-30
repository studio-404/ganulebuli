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

<div class="custom-modal-popup">
	<div class="title">
		<span id="flat-title">N/A</span> სართული <span id="floor-title">0</span>
	</div>
	<p>აირჩიეთ სასურველი ბინის ზომა</p>
	<div class="image" id="g-image-container">
		<img src="/public/img/web/loader2.gif" alt="" style="margin: 20px auto; width: 56px; height: 56px; border:0; outline: 0; display: block;" id="g-loader-img" />
	</div>
	
	<div class="close2">
		<i onclick="closeFloor()"></i>
	</div>
</div>

<div class="content">
	<div id="go-top" style="position: absolute; top: 0; left: 0; width: 100%; height: 1px; opacity: 0;"></div>

	<section class="slider-box inside-image" style="background-image: url('/public/img/web/ios.png');">
		<div class="inside-title">
			<h1>ბინები</h1>
			<p>55 კვმ</p>
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
					<a href="/<?=$_SESSION["LANG"]?>/flats" style="color:white; opacity: 1">ბინები</a>
					 <ul class="sub">
					 	<li><a href="#">ბინა 50კვ</a></li>
					 	<li><a href="#">ბინა 55კვ</a></li>
					 	<li><a href="#">ბინა 60კვ</a></li>
					 	<li><a href="#">ბინა 65კვ</a></li>
					 	<li><a href="#">ბინა 70კვ</a></li>
					 </ul>
				</li>
				<li><a href="/<?=$_SESSION["LANG"]?>/construction">მშენებლობა</a></li>
			</ul>
		</nav>
	</header>

	<section class="yourhouse inside-flat-description" id="yourhouse">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-12">
					<h2>ბინის შესახებ</h2>
					<p>მშენებლობა უსაფთხოება და ამბავიმშენებლობა უსაფთხოება და ამბავილორემ იპსუმ ლორენბავილორემ იპსუმ ლორენმშენებლობა უსაფთხოება და ამბავიმშენებლობა უსაფთხოება და ამბავილორემ იპსუმ ლორენბავილორემ იპსუმ ლორენ</p>
				</div>
				<div class="col-md-7 col-sm-12">					
					<div class="inside-form">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<h3>სრული ფართი</h3>
								<p>55 კვმ</p>
							</div>

							<div class="col-md-3 col-sm-6">
								<h3>ბინის კატეგორია</h3>
								<p>2 საძინებელი</p>
							</div>

							<div class="col-md-3 col-sm-6">
								<h3>ბლოგი</h3>
								<div class="inside-select">
									<select class="inside-select block">
										<option value="a">A</option>
										<option value="b">B</option>
									</select>
									<i></i>
								</div>
							</div>

							<div class="col-md-3 col-sm-6">
								<h3>სართული</h3>
								<div class="inside-select">
									<select class="inside-select floor">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
									</select>
									<i></i>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="advantage inside-3d" id="advantage">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<h2>3D ხედი ბინაზე</h2>

				<div class="room-render">
					<div class="the-rander" style="background-image: url('/public/img/web/room.png');">
						<div class="num num1">1</div>
						<div class="num num2">2</div>
						<div class="num num3">3</div>
						<div class="num num4">4</div>
						<div class="num num5">5</div>
						<div class="num num6">6</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-sm-12">
				<div class="adv-content">
					<div class="top1"></div>
					<div class="top2"></div>
					<div class="top3"></div>
					
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-home">
							<ul>
								<li class="datalink" data-link="num1"><i>1</i><span>შემოსასვლელი 24.6 m<sup>2</sup></span></li>
								<li class="datalink" data-link="num2"><i>2</i><span>მისაღები ოთახი/სამზარეულო 14.7 m<sup>2</sup></span></li>
								<li class="datalink" data-link="num3"><i>3</i><span>აივანი 14.4 m<sup>2</sup></span></li>
								<li class="datalink" data-link="num4"><i>4</i><span>აივანი 4.4 m<sup>2</sup></span></li>
								<li class="datalink" data-link="num5"><i>5</i><span>საძინებელი 13.4 m<sup>2</sup></span></li>
								<li class="datalink" data-link="num6"><i>6</i><span>აბაზანა 13.4 m<sup>2</sup></span></li>
							</ul>
						</div>
					</div>

					<div class="bottom1"></div>
					<!-- <div class="bottom2"></div> -->
					<div class="bottom3">
						<a href="">
							<i></i>
							<span>ჩამოტვირთე<br>სართულის გეგმა</span>
						</a>
					</div>
					<div class="bottom4"></div>
				</div>
			</div>
		</div>
	</section>

	<section class="flats" id="flats">
		<h2>სხვა ბინები</h2>
		<div class="row">
			<div class="col-md-3 col-sm-12">
				<div class="boxphoto">
					<div class="in">
						<div class="flats-photo" style="background-image: url('/public/img/web/render.jpg');">
							<p>55 კვბ</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-12">
				<div class="boxphoto">
					<div class="in">
						<div class="flats-photo" style="background-image: url('/public/img/web/render.jpg');">
							<p>60 კვბ</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-12">
				<div class="boxphoto">
					<div class="in">
						<div class="flats-photo" style="background-image: url('/markup/img/render.jpg');">
							<p>65 კვბ</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-12">
				<div class="boxphoto">
					<div class="in">
						<div class="flats-photo" style="background-image: url('/public/img/web/render.jpg');">
							<p>70 კვბ</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="render" id="render">
		<h2>შეარჩიე ბინა</h2>

		<div class="the">
			<div class="image">
				<img src="/public/img/web/original.png" id="maphilighted" class="maphilighted" usemap="#features" style="opacity: 1e-10; position: absolute; left: 0px; top: 0px; padding: 0px; border: 0px; width:1350px; height: 900px;">
			</div>
			<map name="features">
				<?php foreach($data["floor1"] as $value): ?>
				<area shape="poly" coords="<?=$value["cssclass"]?>" class="masterTooltip" size="<i>A</i> სართული <?=(int)$value["title"]?>" onclick="openFloor('A', '<?=(int)$value["title"]?>',<?=$value["idx"]?>)" /> 
				<?php endforeach; ?>

				<?php foreach($data["floor2"] as $value): ?>
				<area shape="poly" coords="<?=$value["cssclass"]?>" class="masterTooltip" size="<i>B</i> სართული <?=(int)$value["title"]?>" onclick="openFloor('B','<?=(int)$value["title"]?>',<?=$value["idx"]?>)" /> 
				<?php endforeach; ?>
			</map>
		</div>
	</section>


	<footer>
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
<!-- <script src="/js/jquery.mousewheel.js?v=<?=time()?>"></script>
<script src="/js/jquery.scrollsteps.js?v=<?=time()?>"></script> -->
<script src="/public/js/web/jquery.maphilight.js?v=<?=time()?>"></script> 
<script src="/public/js/web/imageMapResizer.min.js?v=<?=time()?>"></script> 
<script src="/public/js/web/generalJquery.js?v=<?=time()?>"></script>
<script src="/public/js/web/general.js?v=<?=time()?>"></script>
<script>
	$(document).ready(function(){
		$("#maphilighted").maphilight({
			fill: true,
			fillColor: '71D82C',
			fillOpacity: 0.57,
			stroke: false,
			strokeColor: '',
			strokeOpacity: 0,
			strokeWidth: 0,
			fade: true,
			alwaysOn: false,
			neverOn: false,
			groupBy: false,
			wrapClass: true,
			// plenty of shadow:
			shadow: false,
			shadowX: 0,
			shadowY: 0,
			shadowRadius: 6,
			shadowColor: '000000',
			shadowOpacity: 0.8,
			shadowPosition: 'outside',
			shadowFrom: false
		});

		$('#maphilighted').imageMapResize();

		$("#maphilighted2").maphilight({
			fill: true,
			fillColor: '71D82C',
			fillOpacity: 0.57,
			stroke: false,
			strokeColor: '',
			strokeOpacity: 0,
			strokeWidth: 0,
			fade: true,
			alwaysOn: false,
			neverOn: false,
			groupBy: false,
			wrapClass: true,
			// plenty of shadow:
			shadow: false,
			shadowX: 0,
			shadowY: 0,
			shadowRadius: 6,
			shadowColor: '000000',
			shadowOpacity: 0.8,
			shadowPosition: 'outside',
			shadowFrom: false
		});

		$('#maphilighted2').imageMapResize();

		$('.masterTooltip').hover(function(){ 
			var Size = $(this).attr('Size');
			$(this).data('tipText', Size).removeAttr('Size');
			$('<p class="tooltip"></p>')
			.html(Size)
			.appendTo('body');
		}, function() { 
			$(this).attr('Size', $(this).data('tipText'));
			$('.tooltip').remove();
		})
		.mousemove(function(e){
			var mousex = e.pageX - 75; 
			var mousey = e.pageY - 70; 
			$('.tooltip')
			.css({ top: mousey, left: mousex }).show()
		});
	});
	
</script>

</body>
</html>