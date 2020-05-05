<?php
session_start();
if(!isset($_SESSION["uname"])){
  header("Location: new 1.php");}
  ?>

<html>
<head>
<title> Members</title>
<script src="JS/dontback.js"></script>
</head>
<body>
  <center>
 <fieldset>

<img src ="photos/Ultimate Gym Logo png.png" border"0" alt="Gym" width="180" height="220">
<br>
<form method="post" action="renew1.php" >
		    <label for="uname"><b>Membership number</b></label>
    <input autofocus="true" type="number" placeholder="Membership NO." name="id"  required>
			<br>
			<br>
			<br>
 <input type="submit" value="search" >

 </form>

</fieldset>

  <a href="home.php"> <input type="button" value="Back"></a>
</center>

</body>
</html>
