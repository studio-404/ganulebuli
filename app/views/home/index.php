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

	<div class="slider-box">		
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<?php 
				$x = 1;
				foreach($data["slider"] as $value):
				?>
				<div class="carousel-item<?=($x==1) ? ' active' : ''?>" style="background-image: url('/public/img/web/slide.jpg');">
					<div class="sliderText">
						<div class="text">თანამედროვე ტიპის სახლი<br>მეტრო წერეთელთან</div>
						<div class="nums">
							<span>01</span>
							<span class="line"></span>
							<span>03</span>
						</div>
					</div>
				</div>
				<?php 
				$x = 2;
				endforeach; 
				?>
			</div>

			<ol class="carousel-indicators">
				<?php 
				$x = 1;
				foreach($data["slider"] as $value):
				?>
			    <li data-target="#carouselExampleControls" data-slide-to="<?=$x?>" class="<?=($x==1) ? 'active' : ''?>"></li>
			    <?php 
				$x++;
				endforeach; 
				?>
			 </ol>
		</div>
	</div>

	<header>
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

		<nav class="nav">
			<ul class="main">
				<li class="active"><a href="/<?=$_SESSION["LANG"]?>/home">მთავარი</a></li>
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
				<li><a href="/<?=$_SESSION["LANG"]?>/construction">მშენებლობა</a></li>
			</ul>
		</nav>
	</header>

	<section class="yourhouse" id="yourhouse">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 mobile-hide">
					<div class="g-img" style="background-image: url('/public/img/web/17.jpg') ">
					</div>
				</div>
				<div class="col-md-8 col-sm-12">
					<div class="g-text">
						<h2><?=@$data["yourhouse"][0]["title"]?></h2>
						<p><?=@$string->cut(strip_tags($data["yourhouse"][0]["description"]), 280)?></p>
						<a href="/<?=$_SESSION["LANG"]?>/construction">გაიგე მეტი</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 mobile-show">
					<div class="g-img" style="background-image: url('/public/img/web/17.jpg') ">
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
					<?php 
					$x=1;
					foreach ($data["advanteges"] as $value):
					?>
					<li class="nav-item">
						<a class="nav-link<?=($x==1) ? ' active' : ''?>" data-toggle="pill" href="#pills-<?=$value["classname"]?>" role="tab">
							<i class="<?=$value["classname"]?>"></i>
							<span><?=$value["title"]?></span>
						</a>
					</li>
					<?php 
					$x=2;
					endforeach; 
					?>
					
				</ul>
			</div>

			<div class="col-md-8 col-sm-12">
				<div class="adv-content">
					<div class="top1"></div>
					<div class="top2"></div>
					
					<div class="tab-content" id="pills-tabContent">
						<?php 
						$x=1;
						foreach ($data["advanteges"] as $value):
						?>
						<div class="tab-pane fade show<?=($x==1) ? ' active' : ''?>" id="pills-<?=$value["classname"]?>">
							<h3><?=$value["title"]?></h3>
							<p><?=$string->cut(strip_tags($value["description"]), 320)?></p>
						</div>
						<?php 
						$x=2;
						endforeach; 
						?>
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
				<area shape="poly" coords="<?=$value["cssclass"]?>" class="masterTooltip" size="<i>A</i> <?=$value["title"]?>" onclick="openFloor(<?=$value["idx"]?>)" /> 
				<?php endforeach; ?>

				<?php foreach($data["floor2"] as $value): ?>
				<area shape="poly" coords="<?=$value["cssclass"]?>" class="masterTooltip" size="<i>B</i> <?=$value["title"]?>" onclick="openFloor(<?=$value["idx"]?>)" /> 
				<?php endforeach; ?>
			</map>
		</div>

		<div class="the2">
			<div class="title">A სართული <span id="floor-title">0</span></div>
			<p>აირჩიეთ სასურველი ბინის ზომა</p>
			<div class="image">
				<div class="img">
					<img src="/public/img/web/floor.php?sold=1,2,3" alt="" usemap="#features2" id="maphilighted2" class="maphilighted" style="opacity: 1e-10; position: absolute; left: calc(50% - 300px); top:170px; padding: 0px; border: 0px; width:600px; height: 578px;" />
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
			
			<?php 
			$left = array();
			$right = array();
			foreach ($data["nearobjects"] as $key => $value) {
				if($value["url"]=="left"){
					$left[] = $value; 
				}else{
					$right[] = $value; 
				}
			}

			// echo "<pre>";
			// print_r($left);
			// echo "</pre>";
			?>
			<div class="row">
				<div class="col-md-5 mobile-order" data-order="2">
					<?php foreach($left as $v): ?>
					<div class="box1" style="background-image: url('<?=$v["photo"]?>');">
						<div class="top">
							<h4><?=$v["title"]?></h4>
							<p><?=$v["classname"]?></p>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
				<div class="col-md-7 mobile-order" data-order="1">
					<?php foreach($right as $v): ?>
					<div class="box2" style="background-image: url('<?=$v["photo"]?>');">
						<div class="top">
							<h4><?=$v["title"]?></h4>
							<p><?=$v["classname"]?></p>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="rules">
		<div class="boxes">
			<div class="row">
				<?php foreach($data["conditions"] as $value):?>
				<div class="col-md-6 col-sm-12">
					<div class="box">
						<div class="icon" style="background-image: url('/public/img/web/<?=$value["classname"]?>.svg')"></div>
						<h3><?=$value["title"]?></h3>
						<p><?=$string->cut(strip_tags($value["description"]), 180)?></p>
						<div class="clear"></div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="aboutus">
		<div class="inner">
			<div class="row">
				<div class="col-md-7 col-sm-12">
					<h3><?=$data["aboutus"][0]["title"]?></h3>
					<p><?=strip_tags($data["aboutus"][0]["description"], "<br>")?></p>
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
	<?php $mapcoords = strip_tags($data["map"][0]["map_coordinates"]); ?>
    var myLatlng = new google.maps.LatLng(<?=$mapcoords?>);
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
    	url:'/public/img/web/marker.svg',
    	scaledSize: new google.maps.Size(60, 60), 
    },
    title: 'Hello World!'
  });
}      
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfLSXv1i5iAG3WdJzqWsVOaFddXAxiDUQ&amp;callback=initMap"></script>


<?
//$data['footer']
?>


</body>
</html>