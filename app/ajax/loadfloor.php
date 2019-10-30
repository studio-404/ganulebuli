<?php
class loadfloor
{
	public $out; 
	
	public function __construct()
	{

	}
	
	public function index(){
		require_once 'app/core/Config.php';
		require_once 'app/functions/request.php';

		$this->out = array(
			"Error" => array(
				"Code"=>1, 
				"Text"=>"მოხდა შეცდომა !",
				"Details"=>"!"
			)
		);

		$flat = functions\request::index("POST","flat");
		$floor = functions\request::index("POST","floor");

		if($flat=="" || $floor=="")
		{
			$this->out = array(
				"Error" => array(
					"Code"=>1, 
					"Text"=>"ყველა ველი სავალდებულოა !",
					"Details"=>"!"
				),
				"Success"=>array(
					"Code"=>0, 
					"Text"=>"",
					"Html"=>"",
					"Details"=>""
				)
			);
		}else{
			$Database = new Database('page', array(
				'method'=>'selectById', 
				'idx'=>$floor, 
				'lang'=>"ge"
			));
			$fetch = $Database->getter();
			$usefull_type = @$fetch["usefull_type"];

			$Database2 = new Database('modules', array(
				'method'=>'selectModuleByType', 
				'order'=>"CAST(`usefull`.`title` AS UNSIGNED INTEGER)",
				'by'=>"ASC",
				'type'=>$usefull_type
			));
			$fetchAll = $Database2->getter();

			$sold = array();
			$x=1;
			foreach ($fetchAll as $v) {
				if($v["additional10"]==2){
					$sold[] = $x; 
				}
				$x++;
			}

			$solded = "";
			if(!empty($sold)){
				$solded = implode(",", $sold);
			}

			$area = "";
			if($flat=="A"){
				$imageSrc = "/public/img/web/floor.php?sold=".$solded;

				if(in_array(1, $sold)){
					$area .= "<area shape=\"poly\" coords=\"10,37,30,35,30,9,99,9,100,36,125,37,127,8,178,9,179,37,203,40,204,263,171,263,103,262,104,290,39,284,39,265,11,264\" />";
				}else{
					$area .= "<area shape=\"poly\" coords=\"10,37,30,35,30,9,99,9,100,36,125,37,127,8,178,9,179,37,203,40,204,263,171,263,103,262,104,290,39,284,39,265,11,264\" onclick=\"location.href='/ge/flats/?floor=".$floor."&aprt=".(int)$fetchAll[0]["idx"]."'\" />";
				}
				
				if(in_array(2, $sold)){
					$area .= "<area shape=\"poly\" coords=\"223,9,274,10,273,38,301,37,300,10,369,9,367,37,387,39,388,264,204,263,203,38,222,37\" />";
				}else{
					$area .= "<area shape=\"poly\" coords=\"223,9,274,10,273,38,301,37,300,10,369,9,367,37,387,39,388,264,204,263,203,38,222,37\" onclick=\"location.href='/ge/flats/?floor=".$floor."&aprt=".(int)$fetchAll[1]["idx"]."'\" />";
				}

				if(in_array(3, $sold)){
					$area .= "<area shape=\"poly\" coords=\"581,38,469,35,469,8,401,9,401,38,388,39,389,264,582,261\" /> ";
				}else{
					$area .= "<area shape=\"poly\" coords=\"581,38,469,35,469,8,401,9,401,38,388,39,389,264,582,261\" onclick=\"location.href='/ge/flats/?floor=".$floor."&aprt=".(int)$fetchAll[2]["idx"]."'\" /> ";
				}

				if(in_array(4, $sold)){
					$area .= "<area shape=\"poly\" coords=\"12,311,9,539,29,539,28,566,98,566,97,539,124,539,125,567,177,566,177,534,203,535,205,310,103,310,103,284,41,286,40,310\" />";
				}else{
					$area .= "<area shape=\"poly\" coords=\"12,311,9,539,29,539,28,566,98,566,97,539,124,539,125,567,177,566,177,534,203,535,205,310,103,310,103,284,41,286,40,310\" onclick=\"location.href='/ge/flats/?floor=".$floor."&aprt=".(int)$fetchAll[3]["idx"]."'\" />";
				}

				if(in_array(5, $sold)){
					$area .= "<area shape=\"poly\" coords=\"578,423,581,538,558,539,559,567,461,568,460,537,275,539,275,568,222,567,222,535,204,536,206,312,437,313,434,426\" />";
				}else{
					$area .= "<area shape=\"poly\" coords=\"578,423,581,538,558,539,559,567,461,568,460,537,275,539,275,568,222,567,222,535,204,536,206,312,437,313,434,426\" onclick=\"location.href='/ge/flats/?floor=".$floor."&aprt=".(int)$fetchAll[4]["idx"]."'\" />";
				}

				$kv = "";
				if(!in_array(1, $sold)){
					$kv = "<div class=\"kv kv1\">58.4<sup>კვმ</sup></div>";
				}
				if(!in_array(2, $sold)){
					$kv .= "<div class=\"kv kv2\">54.6<sup>კვმ</sup></div>";
				}
				if(!in_array(3, $sold)){
					$kv .= "<div class=\"kv kv3\">55.05<sup>კვმ</sup></div>";
				}
				if(!in_array(4, $sold)){
					$kv .= "<div class=\"kv kv4\">58.4<sup>კვმ</sup></div>";
				}
				if(!in_array(5, $sold)){
					$kv .= "<div class=\"kv kv5\">88.35<sup>კვმ</sup></div>";
				}
			}else if($flat=="B"){
				$imageSrc = "/public/img/web/floor2.php?sold=".$solded;

				if(in_array(1, $sold)){
					$area .= "<area shape=\"poly\" coords=\"20,36,131,36,131,8,201,9,200,37,212,38,213,262,20,261\" />";
				}else{
					$area .= "<area shape=\"poly\" coords=\"20,36,131,36,131,8,201,9,200,37,212,38,213,262,20,261\" onclick=\"location.href='/ge/flats/?floor=".$floor."&aprt=".(int)$fetchAll[0]["idx"]."'\" />";
				}
				
				if(in_array(2, $sold)){
					$area .= "<area shape=\"poly\" coords=\"214,37,231,37,231,8,300,9,300,38,327,38,326,9,378,9,379,39,396,39,398,265,214,263\" />";
				}else{
					$area .= "<area shape=\"poly\" coords=\"214,37,231,37,231,8,300,9,300,38,327,38,326,9,378,9,379,39,396,39,398,265,214,263\" onclick=\"location.href='/ge/flats/?floor=".$floor."&aprt=".(int)$fetchAll[1]["idx"]."'\" />";
				}
				
				if(in_array(3, $sold)){
					$area .= "<area shape=\"poly\" coords=\"400,37,423,36,423,9,476,9,476,37,502,38,501,8,571,8,571,38,589,37,587,265,559,264,559,289,496,288,496,264,399,264\" />";
				}else{
					$area .= "<area shape=\"poly\" coords=\"400,37,423,36,423,9,476,9,476,37,502,38,501,8,571,8,571,38,589,37,587,265,559,264,559,289,496,288,496,264,399,264\" onclick=\"location.href='/ge/flats/?floor=".$floor."&aprt=".(int)$fetchAll[2]["idx"]."'\" />";
				}
				
				if(in_array(4, $sold)){
					$area .= "<area shape=\"poly\" coords=\"560,290,560,310,587,312,587,538,570,538,570,569,502,568,501,538,475,536,476,567,423,567,422,537,397,537,394,312,495,311,497,289\" />";
				}else{
					$area .= "<area shape=\"poly\" coords=\"560,290,560,310,587,312,587,538,570,538,570,569,502,568,501,538,475,536,476,567,423,567,422,537,397,537,394,312,495,311,497,289\" onclick=\"location.href='/ge/flats/?floor=".$floor."&aprt=".(int)$fetchAll[3]["idx"]."'\" />";
				}
				
				if(in_array(5, $sold)){
					$area .= "<area shape=\"poly\" coords=\"165,311,394,311,396,539,378,537,378,567,326,568,325,537,138,536,139,568,42,567,43,537,18,537,18,425,165,424\" />";
				}else{
					$area .= "<area shape=\"poly\" coords=\"165,311,394,311,396,539,378,537,378,567,326,568,325,537,138,536,139,568,42,567,43,537,18,537,18,425,165,424\" onclick=\"location.href='/ge/flats/?floor=".$floor."&aprt=".(int)$fetchAll[4]["idx"]."'\" />";
				}

				$kv = "";
				if(!in_array(1, $sold)){
					$kv = "<div class=\"kv kv1\">55.05<sup>კვმ</sup></div>";
				}
				if(!in_array(2, $sold)){
					$kv .= "<div class=\"kv kv2\">54.6<sup>კვმ</sup></div>";
				}
				if(!in_array(3, $sold)){
					$kv .= "<div class=\"kv kv3\">58.4<sup>კვმ</sup></div>";
				}
				if(!in_array(4, $sold)){
					$kv .= "<div class=\"kv kv6\">58.4<sup>კვმ</sup></div>";
				}
				if(!in_array(5, $sold)){
					$kv .= "<div class=\"kv kv5\">88.35<sup>კვმ</sup></div>";
				}
			}


			$html = "";
			$html .= "<div class=\"img\">";
			$html .= sprintf("<img src=\"%s\" alt=\"\" usemap=\"#features2\" id=\"maphilighted2\" class=\"maphilighted\" style=\"opacity: 1e-10; position: absolute; left: calc(%s - 300px); top:170px; padding: 0px; border: 0px; width:600px; height: 578px;\" />",
				$imageSrc ,
				"50%"
			);
			$html .= "</div>";
			$html .= "<map name=\"features2\">";
			$html .= $area;
			$html .= "</map>";

			$html .= "<div class=\"kv-box\" style=\"display: none\">";
			$html .= $kv;
			$html .= "</div>";

			
			$this->out = array(
				"Error" => array(
					"Code"=>0, 
					"Text"=>"",
					"Details"=>""
				),
				"Success"=>array(
					"Code"=>1, 
					"Text"=>"ოპერაცია შესრულდა წარმატებით !",
					"Html"=>$html,
					"Details"=>""
				)
			);
			
		}

		return $this->out;
	}
}