<?php 
class _top
{
	public  $data;

	public function index()
	{
		require_once("app/functions/l.php"); 

		$out = "";
		$out .= $this->data["navigationModule"];

		return $out;
	}
}