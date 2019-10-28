<?php 
class loadModules
{
	public $out; 

	public function __construct()
	{
		require_once 'app/core/Config.php';
		if(!isset($_SESSION[Config::SESSION_PREFIX."username"]))
		{
			exit();
		}
	}
	
	public function index(){
		require_once 'app/core/Config.php';
		require_once 'app/functions/makeForm.php';
		require_once 'app/functions/request.php';
		require_once 'app/functions/strings.php';

		$this->out = array(
			"Error" => array(
				"Code"=>1, 
				"Text"=>"მოხდა შეცდომა !",
				"Details"=>"!"
			)
		);

		$mods = functions\request::index("POST","mods");
		$lang = functions\request::index("POST","lang");

		$Database = new Database("modules", array(
			"method"=>"selectParentTitlsByIds", 
			"mods"=>$mods,
			"lang"=>$lang
		));

		// $options = array();
		$html = "";
		$html .= "<h4>მოდულები</h4>";
		$html .= "<ul class=\"collection\">";
		foreach ($Database->getter() as $value) {		
			$html .= "<li class=\"collection-item\">";
			$html .= "<a href=\"/ge/dashboard/modules/".$value["type"]."\" style=\"color: #2bbbad; font-family: 'NotoRegular'\">";
			$html .= $value["title"];
			$html .= "</a>";
			$html .= "</li>";
		}
		$html .= "</ul>";

		$this->out = array(
			"Error" => array(
				"Code"=>0, 
				"Text"=>"",
				"Details"=>$Database->getter()
			),
			"Success"=>array(
				"Code"=>1, 
				"Text"=>$html,
				"Details"=>""
			)
		);



		return $this->out;
	}
}