<?php
error_reporting(0);
session_start();
if(!isset($_SESSION["uname"])){
  header("Location: login.html");
}

include_once('db.php');

$db = new MyDB();

?>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/CSS/home.css">
<script src="js/dontback.js"></script>
</head>

<body background="photos/gym back.jpg">

<center>
<img src ="photos/Ultimate Gym Logo png.png" border"0" alt="Gym" width="150" height="150">
<br>
<br>

<?php if($_SESSION["type"]=="manager"){ ?>
<a href="coach.php" class="button">Add Coach</a>
<br>
<a href="cancelmembership.php" class="button">Cancel Membership</a>
<br>

<?php } ?>
<a href="newmembership.php" class="button">New Membership</a>
<br>

<a href="members.php" class="button">Members</a>
<br>
<a href="renew.php" class="button">Renew</a>
<br>
<a href="logout.php" class="button">Logout</a>


</center>
</html>
