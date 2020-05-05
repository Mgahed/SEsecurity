<?php
error_reporting(0);
include_once('db.php');

$search = $_POST["search"];
$type = $_POST["type"];

$db = new MyDB();

if($type == "id"){
$UserInfo = " SELECT * FROM mems WHERE id = '$search'";

$result = $db->query($UserInfo);

$row = $result->fetchArray(SQLITE3_ASSOC);

if($search != $row["id"]){echo "user not exist" . "<a href='members.php'> <input type='button' value='Back'></a>";}


else {
	session_start();
	$_SESSION["id"] = $row["id"];
	$_SESSION ["bdate"] = $row["bdate"];
	$_SESSION ["edate"] = $row["edate"];
	$_SESSION ["coach"] = $row["coach"];
	$_SESSION ["name"] = $row["name"];
	$_SESSION ["age"] = $row["age"];
	$_SESSION ["job"] = $row["job"];
	$_SESSION ["mnum"] = $row["mnum"];
	$_SESSION ["pnum"] = $row["pnum"];
	$_SESSION ["enum"] = $row["enum"];
	$_SESSION ["gender"] = $row["gender"];
	$_SESSION ["memtype"] = $row["memtype"];
	$_SESSION ["val"] = $row["val"] ;
	$_SESSION ["off"]= $row["off"];
	$_SESSION ["rec"] = $row["rec"];
	$_SESSION ["who"] = $row["who"];
	header("Location: membersearch1.php");
	}

}


else if($type == "mnum"){
$UserInfo = " SELECT * FROM mems WHERE mnum = '$search'";

$result = $db->query($UserInfo);

$row = $result->fetchArray(SQLITE3_ASSOC);

if($search != $row["mnum"]){echo "user not exist" . "<a href='members.php'> <input type='button' value='Back'></a>";}


else {
	session_start();
	$_SESSION["id"] = $row["id"];
	$_SESSION ["bdate"] = $row["bdate"];
	$_SESSION ["edate"] = $row["edate"];
	$_SESSION ["coach"] = $row["coach"];
	$_SESSION ["name"] = $row["name"];
	$_SESSION ["age"] = $row["age"];
	$_SESSION ["job"] = $row["job"];
	$_SESSION ["mnum"] = $row["mnum"];
	$_SESSION ["pnum"] = $row["pnum"];
	$_SESSION ["enum"] = $row["enum"];
	$_SESSION ["gender"] = $row["gender"];
	$_SESSION ["memtype"] = $row["memtype"];
	$_SESSION ["val"] = $row["val"] ;
	$_SESSION ["off"]= $row["off"];
	$_SESSION ["rec"] = $row["rec"];
	$_SESSION ["who"] = $row["who"];
	header("Location: membersearch1.php");
	}

}


else if($type == "name"){
$UserInfo = " SELECT * FROM mems WHERE name = '$search'";

$result = $db->query($UserInfo);

$row = $result->fetchArray(SQLITE3_ASSOC);

if($search != $row["name"]){echo "user not exist" . "<a href='members.php'> <input type='button' value='Back'></a>";}


else {
	session_start();
	$_SESSION["id"] = $row["id"];
	$_SESSION ["bdate"] = $row["bdate"];
	$_SESSION ["edate"] = $row["edate"];
	$_SESSION ["coach"] = $row["coach"];
	$_SESSION ["name"] = $row["name"];
	$_SESSION ["age"] = $row["age"];
	$_SESSION ["job"] = $row["job"];
	$_SESSION ["mnum"] = $row["mnum"];
	$_SESSION ["pnum"] = $row["pnum"];
	$_SESSION ["enum"] = $row["enum"];
	$_SESSION ["gender"] = $row["gender"];
	$_SESSION ["memtype"] = $row["memtype"];
	$_SESSION ["val"] = $row["val"] ;
	$_SESSION ["off"]= $row["off"];
	$_SESSION ["rec"] = $row["rec"];
	$_SESSION ["who"] = $row["who"];
	header("Location: membersearch1.php");
	}

}

else {echo "Error happened or customer not exist try again " . "<a href='home.php'> <input type='button' value='Back'></a>";}

?>
