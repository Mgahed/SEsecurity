<?php
session_start();
if(!isset($_SESSION["uname"])){
  header("Location: login.php");}
if(isset($_SESSION["id"])){
  unset($_SESSION["id"]);
}
?>
<html>
<head>
<title>Cancel Membership</title>
<script src="JS/dontback.js"></script>
</head>
<body>
  <center>
 <fieldset>
<img src ="photos/Ultimate Gym Logo png.png" border"0" alt="Gym" width="180" height="220">
<br>
<form method="post" action="cancelmembership1.php" >
		    <label for="uname"><b>Membership number</b></label>
    <input type="number" placeholder="Membership NO." name="id" autofocus required>

			<br>
			<br>
			<br>
    <input type="submit" value="Ok" >

 </form>
</fieldset>
  <a href="home.php"> <input type="button" value="Back"></a>
</center>
</body>
</html>
