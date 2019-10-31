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

	<section class="slider-box inside-image" style="background-image: url('<?=strip_tags($data["cover"]["photo"])?>');">
		<div class="inside-title">
			<h1>ბინები</h1>
			<p><?=strip_tags($data["fetch"]["classname"])?> კვმ</p>
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
					 	<?php foreach($data["flatsfrom54"] as $value): ?>
					 	<li><a href="<?=$value["url"]?>"><?=$value["title"]?></a></li>
					 	<?php endforeach; ?>
					 </ul>
				</li>
				<li><a href="/<?=$_SESSION["LANG"]?>/construction">მშენებლობა</a></li>
			</ul>
		</nav>
	</header>

	<section class="yourhouse inside-flat-description" id="yourhouse" style="min-height: auto;">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-12">
					<h2>ბინის შესახებ</h2>
					<p><?=strip_tags($data["fetch"]["description"])?></p>
				</div>
				<div class="col-md-7 col-sm-12">					
					<div class="inside-form">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<h3>ბინის კატეგორია</h3>
								<p><?=strip_tags($data["fetch"]["url"])?></p>
							</div>

							<div class="col-md-3 col-sm-6">
								<h3>ბლოკი</h3>
								<div class="inside-select">
									<select class="inside-select block gs-block">
										<option value="a"<?=($data["fetch"]["type"][0]=="a") ? ' selected="selected"' : ''?>>A</option>
										<option value="b"<?=($data["fetch"]["type"][0]=="b") ? ' selected="selected"' : ''?>>B</option>
									</select>
									<i></i>
								</div>
							</div>

							<div class="col-md-3 col-sm-6">
								<h3>სართული</h3>
								<div class="inside-select">
									<select class="inside-select floor gs-floor">
										<?php if($data["fetch"]["type"][0]=="a"): ?>
										<option value="142"<?=($data["fetch"]["type"][1]=="2") ? ' selected="selected"' : ''?>>2</option>
										<option value="143"<?=($data["fetch"]["type"][1]=="3") ? ' selected="selected"' : ''?>>3</option>
										<option value="144"<?=($data["fetch"]["type"][1]=="4") ? ' selected="selected"' : ''?>>4</option>
										<option value="145"<?=($data["fetch"]["type"][1]=="5") ? ' selected="selected"' : ''?>>5</option>
										<option value="146"<?=($data["fetch"]["type"][1]=="6") ? ' selected="selected"' : ''?>>6</option>
										<option value="147"<?=($data["fetch"]["type"][1]=="7") ? ' selected="selected"' : ''?>>7</option>
										<option value="148"<?=($data["fetch"]["type"][1]=="8") ? ' selected="selected"' : ''?>>8</option>
										<?php endif; ?>

										<?php if($data["fetch"]["type"][0]=="b"): ?>
										<option value="149"<?=($data["fetch"]["type"][1]=="2") ? ' selected="selected"' : ''?>>2</option>
										<option value="150"<?=($data["fetch"]["type"][1]=="3") ? ' selected="selected"' : ''?>>3</option>
										<option value="151"<?=($data["fetch"]["type"][1]=="4") ? ' selected="selected"' : ''?>>4</option>
										<option value="152"<?=($data["fetch"]["type"][1]=="5") ? ' selected="selected"' : ''?>>5</option>
										<option value="153"<?=($data["fetch"]["type"][1]=="6") ? ' selected="selected"' : ''?>>6</option>
										<option value="154"<?=($data["fetch"]["type"][1]=="7") ? ' selected="selected"' : ''?>>7</option>
										<option value="155"<?=($data["fetch"]["type"][1]=="8") ? ' selected="selected"' : ''?>>8</option>
										<?php endif; ?>
									</select>
									<i></i>
								</div>
							</div>

							<div class="col-md-3 col-sm-6">
								<h3>სრული ფართი</h3>
								<div class="inside-select">
									<select class="inside-select room gs-room">
										<?php 
										$kvm = strip_tags($data["fetch"]["classname"]);
										foreach($data["floorlist"] as $value): ?>
									 	<option value="<?=$value["idx"]?>" <?php echo ($value["idx"]==$data["apartment"]) ? 'selected="selected"' : ''; ?>><?=$value["classname"]?></option>
									 	<?php endforeach; ?>
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
					<object class="svgClass" data="/public/filemanager/flats/<?=strip_tags($data["fetch"]["classname"])?>.svg" type="image/svg+xml">
					</object>
				</div>
			</div>

			<div class="col-md-6 col-sm-12">
				<div class="adv-content">
					<div class="top1"></div>
					<div class="top2"></div>
					<div class="top3"></div>
					
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-home">
							<?php 
							$additional1 = strip_tags($data["fetch"]["additional1"]);
							$additional2 = strip_tags($data["fetch"]["additional2"]);
							$additional3 = strip_tags($data["fetch"]["additional3"]);
							$additional4 = strip_tags($data["fetch"]["additional4"]);
							$additional5 = strip_tags($data["fetch"]["additional5"]);
							$additional6 = strip_tags($data["fetch"]["additional6"]);
							$additional7 = strip_tags($data["fetch"]["additional7"]);
							$additional8 = strip_tags($data["fetch"]["additional8"]);

							$x = 1;
							?>					
		
							<ul>
								<?php if((float)$data["fetch"]["classname"]=="54.6"){ ?>
									<?php if($additional1!="" && $additional1!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>შემოსასვლელი <?=$additional1?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional2!="" && $additional2!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>მისაღები ოთახი/სამზარეულო <?=$additional2?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional3!="" && $additional3!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>აივანი <?=$additional3?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional4!="" && $additional4!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>აივანი (2) <?=$additional4?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional5!="" && $additional5!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>საძინებელი <?=$additional5?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional6!="" && $additional6!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>საძინებელი (2) <?=$additional6?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional7!="" && $additional7!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>აბაზანა <?=$additional7?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional8!="" && $additional8!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>აბაზანა (2) <?=$additional8?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>
								<?php }elseif ((float)$data["fetch"]["classname"]=="55.05") {?>
									<?php if($additional1!="" && $additional1!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>შემოსასვლელი <?=$additional1?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional5!="" && $additional5!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>საძინებელი <?=$additional5?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional6!="" && $additional6!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>საძინებელი (2) <?=$additional6?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional3!="" && $additional3!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>აივანი <?=$additional3?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional2!="" && $additional2!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>მისაღები ოთახი/სამზარეულო <?=$additional2?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional7!="" && $additional7!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>აბაზანა <?=$additional7?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>
								<?php }else if((float)$data["fetch"]["classname"]=="58.4"){ ?>
									<?php if($additional1!="" && $additional1!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>შემოსასვლელი <?=$additional1?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional2!="" && $additional2!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>მისაღები ოთახი/სამზარეულო <?=$additional2?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional3!="" && $additional3!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>აივანი <?=$additional3?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional4!="" && $additional4!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>აივანი (2) <?=$additional4?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional5!="" && $additional5!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>საძინებელი <?=$additional5?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional7!="" && $additional7!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>აბაზანა <?=$additional7?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>
								<?php }else if((float)$data["fetch"]["classname"]=="88.35"){ ?>
									<?php if($additional1!="" && $additional1!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>შემოსასვლელი <?=$additional1?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional7!="" && $additional7!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>აბაზანა <?=$additional7?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional5!="" && $additional5!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>საძინებელი <?=$additional5?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional3!="" && $additional3!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>აივანი <?=$additional3?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional6!="" && $additional6!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>საძინებელი (2) <?=$additional6?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional2!="" && $additional2!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>მისაღები ოთახი/სამზარეულო <?=$additional2?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional4!="" && $additional4!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>აივანი (2) <?=$additional4?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>

									<?php if($additional8!="" && $additional8!="empty"): ?>
										<li class="datalink" data-link="<?=$x?>"><i><?=$x?></i><span>აბაზანა (2) <?=$additional8?> m<sup>2</sup></span></li>
									<?php $x++; endif; ?>
								<?php } ?>
							</ul>
						</div>
					</div>

					<div class="bottom1"></div>
					<!-- <div class="bottom2"></div> -->
					<div class="bottom3">
						<a href="#">
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
			<?php foreach($data["flatsfrom54"] as $value):  ?>

			<div class="col-md-3 col-sm-12">
				<div class="boxphoto">
					<div class="in">
						<a href="<?=$value["url"]?>" class="flats-photo" style="background-image: url('<?=$value["photo"]?>');">
							<p><?=$value["title"]?></p>
						</a>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
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