<?php
class Connection{
	public function connect(){
		$conn = mysql_connect("localhost","root","");
		mysql_select_db("usercontrol",$conn);
	}
}
?>
