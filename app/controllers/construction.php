<?php
class Construction extends Controller
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

		$db_section1 = new Database("modules", array(
			"method"=>"selectModuleByType", 
			"type"=>"section1"
		));

		$db_seperate1 = new Database("modules", array(
			"method"=>"selectModuleByType", 
			"type"=>"seperate1"
		));

		$db_section2 = new Database("modules", array(
			"method"=>"selectModuleByType", 
			"type"=>"section2"
		));

		$db_section3 = new Database("modules", array(
			"method"=>"selectModuleByType", 
			"type"=>"section3"
		));

		$db_seperate2 = new Database("modules", array(
			"method"=>"selectModuleByType", 
			"type"=>"seperate2"
		));

		$db_section4 = new Database("modules", array(
			"method"=>"selectModuleByType", 
			"type"=>"section4"
		));

		$db_contactdetails = new Database("modules", array(
			"method"=>"selectModuleByType", 
			"type"=>"contactdetails"
		));

		$db_socialnetworks = new Database("modules", array(
			"method"=>"selectModuleByType", 
			"type"=>"socialnetworks"
		));

		/* view */
		$this->view('construction/index', [
			"header"=>array(
				"website"=>Config::WEBSITE,
				"public"=>Config::PUBLIC_FOLDER
			),
			"headerModule"=>$header->index(), 
			"section1"=>$db_section1->getter(),  
			"seperate1"=>$db_seperate1->getter(),  
			"section2"=>$db_section2->getter(),  
			"section3"=>$db_section3->getter(),  
			"seperate2"=>$db_seperate2->getter(),  
			"section4"=>$db_section4->getter(),  
			"contactdetails"=>$db_contactdetails->getter(),  
			"social"=>$db_socialnetworks->getter(),  
			"pageData"=>$db_pagedata->getter()
		]);
	}

}