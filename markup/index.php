<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
	<title>Garden</title>
	<link rel="stylesheet" type="text/css" href="/markup/css/general.css" />
</head>
<body>

<div class="loader">
	<img src="/markup/img/loader.gif" alt="" />
</div>

<div class="content">
	<div id="go-top" style="position: absolute; top: 0; left: 0; width: 100%; height: 1px; opacity: 0;"></div>
	<div class="slider-box">		
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active" style="background-image: url('img/slide.jpg');">
					<div class="sliderText">
						<div class="text">თანამედროვე ტიპის სახლი<br>მეტრო წერეთელთან</div>
						<div class="nums">
							<span>01</span>
							<span class="line"></span>
							<span>03</span>
						</div>
					</div>
				</div>
				
				<div class="carousel-item" style="background-image: url('img/slide.jpg');">
					<div class="sliderText">
						<div class="text">თანამედროვე ტიპის სახლი<br>მეტრო წერეთელთან 2</div>
						<div class="nums">
							<span>02</span>
							<span class="line"></span>
							<span>03</span>
						</div>
					</div>
				</div>
				
				<div class="carousel-item" style="background-image: url('img/slide.jpg');">
					<div class="sliderText">
						<div class="text">თანამედროვე ტიპის სახლი<br>მეტრო წერეთელთან 3</div>
						<div class="nums">
							<span>03</span>
							<span class="line"></span>
							<span>03</span>
						</div>
					</div>
				</div>
			</div>

			<ol class="carousel-indicators">
			    <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleControls" data-slide-to="1"></li>
			    <li data-target="#carouselExampleControls" data-slide-to="2"></li>
			 </ol>
		</div>
	</div>

	<header>
		<div class="logo">
			<a href="#">logo</a>
		</div>

		<div class="contact">
			<div class="info phone">+995 532 100 2000</div>
			<div class="info address">დიდუბე, ვანის ქუჩა 4, თბილისი</div>
		</div>

		<div class="right">
			<div class="nav-btn" data-opened="false">
				<div class="line line1"></div>
				<div class="line line2"></div>
				<div class="line line3"></div>
			</div>

			<div class="hor-line"></div>

			<ul class="social">
				<li><a href="#" class="instagram">i</a></li>
				<li><a href="#" class="facebook">f</a></li>
			</ul>
		</div>

		<nav class="nav">
			<ul class="main">
				<li class="active"><a href="#">მთავარი</a></li>
				<li>
					<a href="#">ბინები</a>
					 <ul class="sub">
					 	<li><a href="#">ბინა 50კვ</a></li>
					 	<li><a href="#">ბინა 55კვ</a></li>
					 	<li><a href="#">ბინა 60კვ</a></li>
					 	<li><a href="#">ბინა 65კვ</a></li>
					 	<li><a href="#">ბინა 70კვ</a></li>
					 </ul>
				</li>
				<li><a href="#">მშენებლობა</a></li>
			</ul>
		</nav>
	</header>

	<section class="yourhouse" id="yourhouse">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 mobile-hide">
					<div class="g-img" style="background-image: url('img/17.jpg') ">
					</div>
				</div>
				<div class="col-md-8 col-sm-12">
					<div class="g-text">
						<h2>ეს სახლი არის განკუთვნილი ზუსტად შენთვის, რადგან</h2>
						<p>მშენებლობა უსაფრთხოების წესების მაღალი სტანდარტის დაცვითმშენებლობა უსაფრთხოების წესების მაღალი სტანდარტის დაცვითმშენებლობა უსაფრთხოების წესების მაღალი სტანდარტის დაცვითმშენებლობა უსაფრთხოების წესების მაღალი სტანდარტის დაცვითმშენებლობა...</p>
						<a href="#">გაიგე მეტი</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 mobile-show">
					<div class="g-img" style="background-image: url('img/17.jpg') ">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="advantage homepage-advantage" id="advantage">
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<h2>უპირატესობები</h2>

				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="pill" href="#pills-home" role="tab">
							<i class="home"></i>
							<span>უსაფრთხოება<br>უპირველესყოვლისა</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="pill" href="#pills-location">
							<i class="location"></i>
							<span>საუკეთესო<br>ლოკაცია</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="pill" href="#pills-yard">
							<i class="yard"></i>
							<span>შენი<br>ეზო</span>
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" data-toggle="pill" href="#pills-comfort">
							<i class="comfort"></i>
							<span>შეეგუე<br>კომფორტს</span>
						</a>
					</li>
				</ul>
			</div>

			<div class="col-md-8 col-sm-12">
				<div class="adv-content">
					<div class="top1"></div>
					<div class="top2"></div>
					
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-home">
							<h3>უსაფრთხოება უპირველესყოვლისა</h3>
							<p>მშენებლობა უსაფრთხოების წესების მაღალი სტანდარტის დაცვითმშენებლობა უსაფრთხოების წესების მაღალი სტანდარტის დაცვითმშენებლობა უსაფრთხოების წესების მაღალი სტანდარტის დაცვითმშენებლობა უსაფრთხოების წესების მაღალი სტანდარტის დაცვითმშენებლობა...</p>
						</div>
						<div class="tab-pane fade" id="pills-location">
							<h3>საუკეთესო ლოკაცია</h3>
							<p>მშენებლობა უსაფრთხოების წესების მაღალი სტანდარტის დაცვითმშენებლობა უსაფრთხოების წესების მაღალი სტანდარტის დაცვითმშენებლობა უსაფრთხოების წესების მაღალი სტანდარტის დაცვითმშენებლობა უსაფრთხოების წესების მაღალი სტანდარტის დაცვითმშენებლობა...</p>
						</div>
						<div class="tab-pane fade" id="pills-yard">
							<h3>შენი ეზო</h3>
							<p>მშენებლობა უსაფრთხოების წესების მაღალი სტანდარტის დაცვითმშენებლობა უსაფრთხოების წესების მაღალი სტანდარტის დაცვითმშენებლობა უსაფრთხოების წესების მაღალი სტანდარტის დაცვითმშენებლობა უსაფრთხოების წესების მაღალი სტანდარტის დაცვითმშენებლობა...</p>
						</div>
						<div class="tab-pane fade" id="pills-comfort">
							<h3>შეეგუე კომფორტს</h3>
							<p>მშენებლობა უსაფრთხოების წესების მაღალი სტანდარტის დაცვითმშენებლობა უსაფრთხოების წესების მაღალი სტანდარტის დაცვითმშენებლობა უსაფრთხოების წესების მაღალი სტანდარტის დაცვითმშენებლობა უსაფრთხოების წესების მაღალი სტანდარტის დაცვითმშენებლობა...</p>
						</div>
					</div>

					<div class="bottom1"></div>
					<div class="bottom2"></div>
					<div class="bottom3"></div>
					<div class="bottom4"></div>
				</div>
			</div>
		</div>
	</section>

	<section class="flats" id="flats">
		<h2>ბინები 55 კვ მეტრიდან</h2>
		<div class="row">
			<div class="col-md-3 col-sm-12">
				<div class="boxphoto">
					<div class="in">
						<div class="flats-photo" style="background-image: url('/markup/img/render.jpg');">
							<p>55 კვბ</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-12">
				<div class="boxphoto">
					<div class="in">
						<div class="flats-photo" style="background-image: url('/markup/img/render.jpg');">
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
						<div class="flats-photo" style="background-image: url('/markup/img/render.jpg');">
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
				<img src="img/original.png" id="maphilighted" class="maphilighted" usemap="#features" style="opacity: 1e-10; position: absolute; left: 0px; top: 0px; padding: 0px; border: 0px; width:1350px; height: 900px;">
			</div>
			<map name="features">
				<area shape="poly" coords="290,224,304,212,574,46,668,110,706,93,781,149,784,188,826,218,824,300,586,179,292,309,291,306" class="masterTooltip" size="<i>A</i> სართული 8" onclick="openFloor(8)" /> 

				<area shape="poly" coords="292,372,581,256,824,368,824,305,577,172,292,308" class="masterTooltip" size="<i>A</i> სართული 7" onclick="openFloor(7)" /> 

				<area shape="poly" coords="292,436,291,370,578,256,825,366,824,429,576,343" class="masterTooltip" size="<i>A</i> სართული 6" onclick="openFloor(6)" /> 

				<area shape="poly" coords="293,497,582,429,824,492,824,429,581,343,292,436" class="masterTooltip" size="<i>A</i> სართული 5" onclick="openFloor(5)" /> 

				<area shape="poly" coords="293,559,576,515,825,558,825,492,581,430,292,497" class="masterTooltip" size="<i>A</i> სართული 4" onclick="openFloor(4)" /> 

				<area shape="poly" coords="293,622,571,603,824,621,826,558,580,516,292,558" class="masterTooltip" size="<i>A</i> სართული 3" onclick="openFloor(3)" /> 

				<area shape="poly" coords="291,683,825,682,826,622,575,604,292,622" class="masterTooltip" size="<i>A</i> სართული 2" onclick="openFloor(2)" /> 
				<!-- B Block -->
				<area shape="poly" coords="847,681,848,635,1142,626,1209,638,1208,684,1142,684" class="masterTooltip" size="<i>B</i> სართული 2" onclick="openFloor(2)" /> 
				
				<area shape="poly" coords="1210,589,1145,576,849,594,848,637,1145,625,1210,637" class="masterTooltip" size="<i>B</i> სართული 3" onclick="openFloor(3)" /> 
				
				<area shape="poly" coords="1210,589,1145,575,848,594,849,550,1142,520,1209,548" class="masterTooltip" size="<i>B</i> სართული 4" onclick="openFloor(4)" /> 
				
				<area shape="poly" coords="849,507,1140,471,1210,501,1210,548,1141,519,849,548" class="masterTooltip" size="<i>B</i> სართული 5" onclick="openFloor(5)" /> 
				
				<area shape="poly" coords="1208,457,1141,417,847,463,848,509,1139,472,1209,498" class="masterTooltip" size="<i>B</i> სართული 6" onclick="openFloor(6)" /> 
				
				<area shape="poly" coords="847,418,1144,362,1209,409,1209,458,1140,418,848,463" class="masterTooltip" size="<i>B</i> სართული 7" onclick="openFloor(7)" /> 
				
				<area shape="poly" coords="847,356,1142,283,1208,353,1209,410,1144,362,848,418" class="masterTooltip" size="<i>B</i> სართული 8" onclick="openFloor(8)" /> 
			</map>
		</div>

		<div class="the2">
			<div class="title">A სართული <span id="floor-title">0</span></div>
			<p>აირჩიეთ სასურველი ბინის ზომა</p>
			<div class="image">
				<div class="img">
					<img src="img/floor.php?sold=1,2,3" alt="" usemap="#features2" id="maphilighted2" class="maphilighted" style="opacity: 1e-10; position: absolute; left: calc(50% - 300px); top:170px; padding: 0px; border: 0px; width:600px; height: 578px;" />
				</div>
				<map name="features2">	
					<area shape="poly" coords="10,37,30,35,30,9,99,9,100,36,125,37,127,8,178,9,179,37,203,40,204,263,171,263,103,262,104,290,39,284,39,265,11,264" /> 

					<area shape="poly" coords="223,9,274,10,273,38,301,37,300,10,369,9,367,37,387,39,388,264,204,263,203,38,222,37" /> 

					<area shape="poly" coords="581,38,469,35,469,8,401,9,401,38,388,39,389,264,582,261" /> 

					<area shape="poly" coords="12,311,9,539,29,539,28,566,98,566,97,539,124,539,125,567,177,566,177,534,203,535,205,310,103,310,103,284,41,286,40,310" /> 

					<area shape="poly" coords="578,423,581,538,558,539,559,567,461,568,460,537,275,539,275,568,222,567,222,535,204,536,206,312,437,313,434,426" /> 
				</map>

				<div class="kv kv1">55<sup>კვმ</sup></div>
				<div class="kv kv2">55<sup>კვმ</sup></div>
				<div class="kv kv3">75<sup>კვმ</sup></div>
				<div class="kv kv4">57<sup>კვმ</sup></div>
				<div class="kv kv5">102<sup>კვმ</sup></div>
			</div>
			
			<div class="close2">
				<i onclick="closeFloor()"></i>
			</div>
		</div>
	</section>

	<section class="map">
		<h3>Google Map</h3>
		<div id="google-map" class="overlay"></div>
	</section>

	<section class="nearobjects">
		<div class="objsbox">
			<h2>ახლომდებარე ობიექტები</h2>

			<div class="row">
				<div class="col-md-5 mobile-order" data-order="2">
					<div class="box1" style="background-image: url('img/megalainiR.png');">
						<div class="top">
							<h4>მეგალაინი</h4>
							<p>800მ ფეხით</p>
						</div>
					</div>
					<div class="box1" style="background-image: url('img/vagzaliR.png');">
						<div class="top">
							<h4>ცენტრალური სადგური</h4>
							<p>600მ ფეხით</p>
						</div>
					</div>
				</div>
				<div class="col-md-7 mobile-order" data-order="1">
					<div class="box2" style="background-image: url('img/metroR.png');">
						<div class="top">
							<h4>წერეთლის მეტრო</h4>
							<p>500მ ფეხით</p>
						</div>
					</div>
					<div class="box2" style="background-image: url('img/gamofenaR.png');">
						<div class="top">
							<h4>გამოფენა</h4>
							<p>500მ ფეხით</p>
						</div>
					</div>

					<div class="box2" style="background-image: url('img/macR.png');">
						<div class="top">
							<h4>მაკ დონალდსი</h4>
							<p>300მ ფეხით</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="rules">
		<div class="boxes">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="box">
						<div class="icon" style="background-image: url('img/key.svg')"></div>
						<h3>ჩაბარების პირობები</h3>
						<p>მშენებლობნის ჩაბარების პირობები და ა.შ. მშენებლობაზე მოხდა ყიდვა რაღაცმშენებლობნის ჩაბარების პირობები და ა.შ. მშენებლობაზე მოხდა ყიდვა რაღაც</p>
						<div class="clear"></div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="box">
						<div class="icon" style="background-image: url('img/coin.svg')"></div>
						<h3>გადახდის პირობები</h3>
						<p>მშენებლობნის ჩაბარების პირობები და ა.შ. მშენებლობაზე მოხდა ყიდვა რაღაცმშენებლობნის ჩაბარების პირობები და ა.შ. მშენებლობაზე მოხდა ყიდვა რაღაც</p>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="aboutus">
		<div class="inner">
			<div class="row">
				<div class="col-md-7 col-sm-12">
					<h3>ჩვენს შესახებ</h3>
					<p>საქართველოს ტურიზმის ეროვნული ადმინისტრაცია არის საქართველოს ეკონომიკისა და მდგრადი განვითარების სამინისტროს სისტემაში შემავალი საჯარო სამართლის იურიდიული პირი და სახელმწიფო კონტროლით დამოუკიდებლად ახორციელებს თავის საქმიანობას.</p><br>
					<p>საქართველოს ტურიზმის ეროვნული ადმინისტრაციის მიზნები და ამოცანებია საქართველოს ტურიზმის განვითარების სახელმწიფო პოლიტიკის ჩამოყალიბება და განხორციელება, მდგრადი ტურიზმის განვითარების ხელშეწყობა, ტურიზმის განვითარების საფუძველზე ქვეყანაში მაღალმიანური რესურსების განვითარების ხელშეწყობა. </p>
					<div class="clear"></div>
				</div>
				<div class="col-md-1 mobile-hide"></div>
				<div class="col-md-4 col-sm-12">
					<form action="?" method="post">
						<h4>დაგვიკავშირდით</h4>

						<div class="input">
							<input type="text" placeholder="თქვენი სახელი*" />
						</div>

						<div class="input">
							<input type="email" placeholder="ელ-ფოსტა*" />
						</div>

						<div class="input">
							<input type="text" placeholder="საკონტაქტო ნომერი*" />
						</div>

						<div class="input input-select">
							<i></i>
							<select>
								<option value="">აირჩიე სასურველი ბინა</option>
								<option value="1">ბინა 50კვ</option>
								<option value="2">ბინა 55კვ</option>
								<option value="3">ბინა 60კვ</option>
								<option value="4">ბინა 65კვ</option>
							</select>
						</div>

						<div class="input">
							<textarea cols="30" rows="10" onfocus="(this.value=='შეტყობინება' ? this.value='' : '')" onblur="(this.value=='' ? this.value='შეტყობინება' : '')">შეტყობინება</textarea>
						</div>

						<div class="input">
							<label for="">
								<input type="checkbox" id="agree" name="agree" value="1" />
								ვეთანხმები კონფიდენციალურობის პოლიტიკას ბლა-ბლა
							</label>
						</div>

						<button type="button">გაგზავნა</button>
					</form>
				</div>
			</div>

			<div class="scrollup">
				<div class="icon"></div>
				<span>თავში დაბრუნება</span>
			</div>
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
						<div class="info call"><a href="tel:995599623555">+995 599 62 35 55</a></div>
						<div class="info address">დიდუბე ვანის ქუჩა 4, თბილისი, საქართველო</div>
					</div>

					<a href="http://getsadze.ge/" class="design" target="_blank"></a>
				</div>
			</div>
		</div>
	</footer>
</div>


<script src="/markup/js/jquery.js?v=<?=time()?>"></script>
<script src="/markup/js/bootstrap.js?v=<?=time()?>"></script>
<script src="/markup/js/jquery.maphilight.js?v=<?=time()?>"></script> 
<script src="/markup/js/imageMapResizer.min.js?v=<?=time()?>"></script> 
<script src="/markup/js/generalJquery.js?v=<?=time()?>"></script>
<script src="/markup/js/general.js?v=<?=time()?>"></script>
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
			fillColor: '000000',
			fillOpacity: 0.10,
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
	
	var marker;
	var map;

function initMap() {
    var myLatlng = new google.maps.LatLng(41.735161, 44.785228);
  	map = new google.maps.Map(document.getElementById('google-map'), {
    zoom: 16,
    center: myLatlng,
    disableDefaultUI: true,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
	panControl:false,
	zoomControl:false,
	mapTypeControl:false,
	scaleControl:false,
	streetViewControl:false,
	overviewMapControl:false,
	rotateControl:false,
	styles:[
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
]
  });

  marker = new google.maps.Marker({
    position: myLatlng,
    map: map,
    icon:{
    	url:'/markup/img/marker.svg',
    	scaledSize: new google.maps.Size(60, 60), // scaled size
    },
    title: 'Hello World!'
  });
}      
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfLSXv1i5iAG3WdJzqWsVOaFddXAxiDUQ&amp;callback=initMap"></script>

</body>
</html>