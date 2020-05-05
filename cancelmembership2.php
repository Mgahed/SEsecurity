<?php
error_reporting(0);
include_once('db.php');
session_start();
$id=$_SESSION["id"];
$rec=$_SESSION["rec"];
$val=$_SESSION["val"];

$db = new MyDB();

$qa = " SELECT val FROM tot " /*"  "SELECT * FROM mems WHERE id = '301'"*/;
$fla = $db->query($qa);
$roa = $fla->fetchArray(SQLITE3_ASSOC);
$fin=$roa["val"]-$val;


$q = " UPDATE tot SET val = '$fin' " /*"  "SELECT * FROM mems WHERE id = '301'"*/;
$fl = $db->query($q);
$ro = $fl->fetchArray(SQLITE3_ASSOC);

$qus = " DELETE FROM value WHERE recc='$rec' " /*"  "SELECT * FROM mems WHERE id = '301'"*/;
$flagss = $db->query($qus);
$rowss = $flagss->fetchArray(SQLITE3_ASSOC);


$qu = " DELETE FROM mems WHERE id='$id' " /*"  "SELECT * FROM mems WHERE id = '301'"*/;
$flags = $db->query($qu);
$rows = $flags->fetchArray(SQLITE3_ASSOC);

if($flags){

	unset($_SESSION["id"]);

	header("Location:home.php");
}
else echo "Error happened :)" . "<a href='home.php'><button 'Button'>Back</button></a>" ;
?>
