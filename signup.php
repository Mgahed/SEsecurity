<?php
error_reporting(0);
include_once('db.php');
$db = new MyDB();

$uname = $_POST["uname"];
$fn = $_POST["fn"];
$ln = $_POST["ln"];
$type = $_POST["type"];
$psw = $_POST["psw"];

$UserInfo = " INSERT INTO userr(uname,psw,first,last,type) VALUES('$uname','$psw','$fn','$ln','$type')";

$result = $db->query($UserInfo);
// echo $result;
if ($result) {
  echo "<center><h2>signup successfully</center></h2>" . "<META http-equiv='refresh' content='2;login.html'>";
}

else {
  echo "<center><h2>Eroor happend maybe username already taken</center></h2>" . "<META http-equiv='refresh' content='2;signup.html'>";
}

?>
