<?php
error_reporting(0);
include_once('db.php');

$id = $_POST["id"];

$db = new MyDB();

$UserInfo = " SELECT * FROM mems WHERE id = '$id'";

$result = $db->query($UserInfo);

$row = $result->fetchArray(SQLITE3_ASSOC);


if($id != $row["id"]){echo "Wrong Member or not exist  " . "<a href='home.php'> <input type='button' value='Back'></a>";}


else {
	session_start();
	$_SESSION["id"] = $id;
	$_SESSION ["bdate"] = $row["bdate"];
	$_SESSION ["edate"] = $row["edate"];
	$_SESSION ["name"] = $row["name"];
	$_SESSION ["age"] = $row["age"];
	$_SESSION ["job"] = $row["job"];
	$_SESSION ["mnum"] = $row["mnum"];
	$_SESSION ["pnum"] = $row["pnum"];
	$_SESSION ["enum"] = $row["enum"];
	$_SESSION ["gender"] = $row["gender"];
	$_SESSION ["memtype"] = $row["memtype"];
	$_SESSION ["val"] = $row["val"];
	$_SESSION ["off"]= $row["off"];
	$_SESSION ["rec"] = $row["rec"];
	$_SESSION ["coach"] = $row["coach"];
	$_SESSION ["who"] = $row["who"];
header("Location:renew2.php");
}

?>
