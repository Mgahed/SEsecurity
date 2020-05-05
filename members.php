<?php
session_start();
if(!isset($_SESSION["uname"])){
  header("Location: login.php");}
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
<form method="post" action="membersearch.php" >
		    <select name="type">
		    	<option value="id">ID</option>
		    	<option value="mnum">Mobile Number</option>
		    	<option value="name">Name</option>
		    </select>
    <input autofocus="true" type="text" name="search" required>

			<br>
			<br>
	    <br>
			<br>
 <input type="submit" value="search" >

 </form>

</fieldset>

  <a href="home.php" > <input type="button" value="Back" ></a>
</center>
</body>
</html>
