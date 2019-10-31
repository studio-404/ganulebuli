<?php
class changeapartment
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

		$block = functions\request::index("POST","block");
		$floor = functions\request::index("POST","floor");
		$room = functions\request::index("POST","room");

		if($block=="" || $floor=="" || $room=="")
		{
			$this->out = array(
				"Error" => array(
					"Code"=>1, 
					"Text"=>"ყველა ველი სავალდებულოა !",
					"Details"=>"!"
				)
			);
		}else{
			if($block=="a"){ $idx = 136; }
			if($block=="b"){ $idx = 137; }

			// $block = new Database('page', array(
			// 	'method'=>'selectById', 
			// 	'idx'=>$idx, 
			// 	'lang'=>$_SESSION["LANG"]
			// ));

			// $blockFetch = $block->getter();

			

			$selectTitle = new Database("page", array(
				"method"=>"selectTitle",
				"cid"=>$idx,
				"title"=>$floor,
				"lang"=>$_SESSION["LANG"]
			));

			$floorx = $selectTitle->getter();

			// $floorx = 147 - 7 sarTuli

			// $room = 58.4

			$Database = new Database("modules", array(
				"method"=>"selectModuleByType",
				"type"=>$block.$floor,
				"lang"=>$_SESSION["LANG"]
			));

			$roomx = 0;
			foreach ($Database->getter() as $v) {
				if($v["classname"]==$room){
					$roomx = $v["idx"];
				}
			}

			$goto = "/ge/flats/?floor=".$floorx["idx"]."&aprt=".$roomx;
			
			$this->out = array(
				"Error" => array(
					"Code"=>0, 
					"Text"=>"",
					"Details"=>""
				),
				"Success"=>array(
					"Code"=>1, 
					"Text"=>"ოპერაცია შესრულდა წარმატებით !",
					"Goto"=>$goto,
					"Details"=>""
				)
			);
			
		}

		return $this->out;
	}
}