<?php
error_reporting(0);
include_once('db.php');
$db = new MyDB();

$cname = $_POST["cname"];

$UserInfo = " INSERT INTO coach(cname) VALUES('$cname')";

$result = $db->query($UserInfo);
// echo $result;
if ($result) {
  echo "<center><h2>Coach Added successfully</center></h2>" . "<META http-equiv='refresh' content='2;home.php'>";
}

else {
  echo "<center><h2>Eroor happend</center></h2>" . "<META http-equiv='refresh' content='2;coach.php'>";
}

?>
