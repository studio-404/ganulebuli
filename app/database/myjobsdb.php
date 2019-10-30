<?php 
class myjobsdb
{
	private $conn;

	public function __construct(){

	}

	public function index($conn, $args)
	{
		$out = 0;
		$this->conn = $conn;
		if(method_exists("myjobsdb", $args['method']))
		{
			$string = "\$this->".$args['method']."(\$args);";
			$out = eval("return $string");
		}
		return $out;
	}

	private function updates($args)
	{
		$update = "SELECT * FROM `usefull` WHERE `type`=:type AND `status`=0";
		$prepare = $this->conn->prepare($update);
		$prepare->execute(array(
			":type"=>$args['type'],
		));		
		$fetch = $prepare->fetchAll(PDO::FETCH_ASSOC);
		return $fetch;
	}

}