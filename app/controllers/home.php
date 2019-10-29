<?php
class Home extends Controller
{
	public function __construct()
	{
		
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

		$db_slider = new Database("modules", array(
			"method"=>"selectModuleByType", 
			"type"=>"slider"
		));

		$db_socialnetworks = new Database("modules", array(
			"method"=>"selectModuleByType", 
			"type"=>"socialnetworks"
		));

		$db_yourhouse = new Database("modules", array(
			"method"=>"selectModuleByType", 
			"type"=>"yourhouse"
		));

		$db_advanteges = new Database("modules", array(
			"method"=>"selectModuleByType", 
			"type"=>"advanteges"
		));

		$db_map = new Database("modules", array(
			"method"=>"selectModuleByType", 
			"type"=>"map"
		));

		$db_nearobjects = new Database("modules", array(
			"method"=>"selectModuleByType", 
			"type"=>"nearobjects"
		));

		$db_conditions = new Database("modules", array(
			"method"=>"selectModuleByType", 
			"type"=>"conditions"
		));

		$db_aboutus = new Database("modules", array(
			"method"=>"selectModuleByType", 
			"type"=>"aboutus"
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

		/* view */
		$this->view('home/index', [
			"header"=>array(
				"website"=>Config::WEBSITE,
				"public"=>Config::PUBLIC_FOLDER
			),
			"headerModule"=>$header->index(), 
			"contactdetails"=>$db_contactdetails->getter(), 
			"slider"=>$db_slider->getter(), 
			"social"=>$db_socialnetworks->getter(), 
			"yourhouse"=>$db_yourhouse->getter(), 
			"advanteges"=>$db_advanteges->getter(), 
			"map"=>$db_map->getter(), 
			"nearobjects"=>$db_nearobjects->getter(), 
			"conditions"=>$db_conditions->getter(), 
			"aboutus"=>$db_aboutus->getter(), 
			"pageData"=>$db_pagedata->getter(),
			"floor1"=>$db_floors1->getter(),
			"floor2"=>$db_floors2->getter()
		]);
	}

}