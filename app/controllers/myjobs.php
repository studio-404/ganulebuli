<?php 
class Myjobs extends Controller
{
	public function __construct()
	{
		exit();
	}

	public function index($name = "")
	{
		$Database = new Database("myjobsdb", array(
			"method"=>"updates",
			"type"=>"b2"
		));

		$fetch = $Database->getter();

		// echo "<pre>";
		// print_r($fetch);
		// echo "</pre>";
		// exit();
		echo "Start: ".time()."<br />";
		$x = 35;
		foreach ($fetch as $value) {
			$x++;
			$Database2 = new Database("modules", array(
				"method"=>"add",
				"date"=>"2019-10-30",
				"moduleSlug"=>"b8",
				"title"=>$x." ბინა",
				"pageText"=>$value["description"],
				"link"=>$value["url"],
				"additional1"=>$value["additional1"],
				"additional2"=>$value["additional2"],
				"additional3"=>$value["additional3"],
				"additional4"=>$value["additional4"],
				"additional5"=>$value["additional5"],
				"additional6"=>$value["additional6"],
				"additional7"=>$value["additional7"],
				"additional8"=>$value["additional8"],
				"additional9"=>$value["additional9"],
				"additional10"=>$value["additional10"],
				"classname"=>$value["classname"],
				"map_coordinates"=>$value["map_coordinates"],
				"serialPhotos"=>array(),
				"serialFiles"=>array()
			));
		}

		echo "Done: ".time();
	}

}