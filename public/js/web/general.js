var ajax = function(file, ajaxUrl){
	var xhttp = new XMLHttpRequest();
	xhttp.open("POST", "/ge/ajax/index/"+file, true);
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=UTF-8');
	xhttp.send(ajaxUrl);
	return xhttp;
};

var openFloor = (flat, title, floor) => {
	document.getElementById("flat-title").innerHTML = flat;
	document.getElementById("floor-title").innerHTML = title;


	document.getElementsByClassName("content")[0].classList.remove("content-up");
	document.getElementsByClassName("custom-modal-popup")[0].style.display = "block";
	setTimeout(function(){
		var xhttp = ajax("loadfloor", "flat="+flat+"&floor="+floor);
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var responseText = JSON.parse(this.responseText);

				if(responseText.Error.Code==1){
					console.log(responseText.Error.Text);
				}else{
					document.getElementById("g-image-container").innerHTML = responseText.Success.Html;

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

					$("#maphilighted2").on('load', function() { 
    					$(".kv-box").show();
    					document.getElementsByClassName("custom-modal-popup")[0].classList.add("show-up");
    					setTimeout(function(){
    						document.getElementsByClassName("content")[0].classList.add("content-up");
    					}, 1000);    					
    				});					
				}
				
			}
		};

	}, 200);	
};

var closeFloor = () => {
	document.getElementsByClassName("custom-modal-popup")[0].classList.remove("show-up");
	setTimeout(function(){
		document.getElementsByClassName("custom-modal-popup")[0].style.display = "none";	
	}, 500);
	
};

var detectmob = () => { 
 if( navigator.userAgent.match(/Android/i)
 || navigator.userAgent.match(/webOS/i)
 || navigator.userAgent.match(/iPhone/i)
 || navigator.userAgent.match(/iPad/i)
 || navigator.userAgent.match(/iPod/i)
 || navigator.userAgent.match(/BlackBerry/i)
 || navigator.userAgent.match(/Windows Phone/i)
 ){
    return true;
  }
 else {
    return false;
  }
}

(function(){

	if(
		detectmob() && 
		typeof document.getElementsByClassName("mobile-order")[0] !== "undefined"
	){
		var orders = document.getElementsByClassName("mobile-order");

		for(var i = 0; i < orders.length; i++){
			if(typeof orders[i] !== "undefined"){
				let order = orders[i].getAttribute("data-order");
				orders[i].classList.add("order-"+order);
			}
		}
	};

	if(typeof document.getElementsByClassName("content")[0] !== "undefined"){
		setTimeout(function(){
			document.getElementsByClassName("content")[0].classList.add("content-up");
		}, 1500);
	};

	if(typeof document.getElementsByClassName("sliderText")[0] !== "undefined"){
		// setTimeout(function(){
		// 	document.getElementsByClassName("sliderText")[0].classList.add("sliderText-open");
		// }, 2000);
	};

	if(typeof document.getElementsByClassName("nav-btn")[0] !== "undefined"){
		document.getElementsByClassName("nav-btn")[0].addEventListener("click", (e) => {
			var opned = document.getElementsByClassName("nav-btn")[0].getAttribute("data-opened");

			if(opned=="false"){
				document.getElementsByClassName("nav-btn")[0].classList.add("line-clicked");
				document.getElementsByClassName("nav-btn")[0].setAttribute("data-opened", "true");
				document.getElementsByClassName("nav")[0].classList.add("nav-open");
			}else{
				document.getElementsByClassName("nav-btn")[0].classList.remove("line-clicked");
				document.getElementsByClassName("nav-btn")[0].setAttribute("data-opened", "false");
				document.getElementsByClassName("nav")[0].classList.remove("nav-open");
			}
		});
	};

})();