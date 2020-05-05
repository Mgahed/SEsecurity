<?php
session_start();

include_once('db.php');
$db = new MyDB();

$uname = $_POST["uname"];
$psw = $_POST["psw"];

$UserInfo = " SELECT * FROM userr WHERE uname = '$uname'";

$result = $db->query($UserInfo);

$row = $result->fetchArray(SQLITE3_ASSOC);


if($uname != $row["uname"]){header("Location: notlogin.html") ;}

else if($psw != $row["psw"]){

header("Location: notlogin.html") ;
}

else{

	session_start();
	$_SESSION["uname"]= $row["uname"];
  $_SESSION["type"]= $row["type"];
	header("Location:home.php");
}

?>
