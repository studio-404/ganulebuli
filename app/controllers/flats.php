<?php
class Flats extends Controller
{
	public $apartment; 
	public function __construct()
	{
		require_once 'app/functions/request.php'; 

		$this->apartment = (int)functions\request::index("GET", "aprt"); 

		if($this->apartment<=0){
			header("Location: /en/home");
			exit;
		}
	}

	public function index($name = '')
	{ 
		

		/* DATABASE */
		$db_langs = new Database("language", array(
			"method"=>"select"
		)); /* # */

		$db_navigation = new Database("page", array(
			"method"=>"select", 
			"cid"=>0, 
			"nav_type"=>0,
			"lang"=>$_SESSION['LANG'],
			"status"=>0 
		));

		$s = (isset($_SESSION["URL"][1])) ? $_SESSION["URL"][1] : Config::MAIN_CLASS;
		$db_pagedata = new Database("page", array(
			"method"=>"selecteBySlug", 
			"slug"=>$s,
			"lang"=>$_SESSION['LANG'], 
			"all"=>true
		));

		/* HEDARE */
		$header = $this->model('_header');
		$header->public = Config::PUBLIC_FOLDER; 
		$header->lang = $_SESSION["LANG"]; 
		$header->pagedata = $db_pagedata; 

		/* NAVIGATION */
		$navigation = $this->model('_navigation');
		$navigation->data = $db_navigation->getter();


		$db_contactdetails = new Database("modules", array(
			"method"=>"selectModuleByType", 
			"type"=>"contactdetails"
		));

		$db_socialnetworks = new Database("modules", array(
			"method"=>"selectModuleByType", 
			"type"=>"socialnetworks"
		));

		$db_floors1 = new Database("page", array(
			"method"=>"selecteByCid",
			"cid"=>136,
			"lang"=>$_SESSION["LANG"]
		));

		$db_floors2 = new Database("page", array(
			"method"=>"selecteByCid",
			"cid"=>137,
			"lang"=>$_SESSION["LANG"]
		));

		$selectById = new Database("modules", array(
			"method"=>"selectById",
			"idx"=>$this->apartment,
			"lang"=>$_SESSION["LANG"]
		));
		$fetch = $selectById->getter();

		$photos = new Database('photos', array(
			'method'=>'selectByParent', 
			'idx'=>$fetch["idx"], 
			'lang'=>$_SESSION["LANG"], 
			'type'=>$fetch["type"]
		));

		$db_flatsfrom54 = new Database("modules", array(
			"method"=>"selectModuleByType", 
			"type"=>"flatsfrom54",
			'order'=>"CAST(`usefull`.`title` AS UNSIGNED INTEGER)",
			'by'=>"ASC"
		));

		$db_cover = new Database("modules", array(
			"method"=>"selectByTypeTitle",
			"title"=>$fetch["classname"],
			"type"=>"flatsfrom54",
			"lang"=>$_SESSION["LANG"]
		));

		$db_floorlist = new Database("modules", array(
			"method"=>"selectModuleByType",
			"type"=>$fetch["type"],
			'order'=>"CAST(`usefull`.`classname` AS UNSIGNED INTEGER)",
			'by'=>"ASC"
		));

		// echo $fetch["type"];

		// echo "<pre>";
		// print_r($db_cover);
		// echo "</pre>";

		/* view */
		$this->view('flats/index', [
			"header"=>array(
				"website"=>Config::WEBSITE,
				"public"=>Config::PUBLIC_FOLDER
			),
			"headerModule"=>$header->index(), 
			"contactdetails"=>$db_contactdetails->getter(),  
			"social"=>$db_socialnetworks->getter(),  
			"pageData"=>$db_pagedata->getter(),
			"cover"=>$db_cover->getter(),
			"flatsfrom54"=>$db_flatsfrom54->getter(),
			"floor1"=>$db_floors1->getter(),
			"floor2"=>$db_floors2->getter(), 
			"fetch"=>$fetch, 
			"floorlist"=>$db_floorlist->getter(), 
			"apartment"=>$this->apartment, 
			"photos"=>$photos->getter() 
		]);
	}

}