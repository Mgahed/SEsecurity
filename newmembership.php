<?php
session_start();
if(!isset($_SESSION["uname"])){
  header("Location: login.html");
}
?>

<html>
<head>
<title>New Membership</title>

<meta charset="utf-8">

<script src="JS/dontback.js"></script>

</head>

<form method="post" action="newmembership1.php" enctype="multipart/form-data">
 <fieldset>
 <center>
<img src ="photos/Ultimate Gym Logo png.png" border"0" alt="Gym" width="180" height="220">
 </center>

   <div class="container">
   		    <!--<label for="uname"><b>Membership number</b></label>
    <input type="number" placeholder="Membership NO." name="id"  required>		<br><br>-->
    <!-- <input type="file" accept="image/*" name="file" required> -->
   <label for="uname"><b>Beginning Date:</b></label><input type="date" name="bdate" required>
   <br><br>
    <label for="uname"><b>Full Name</b></label>
    <input type="text" placeholder="Client's Name"  name="name" required>
	    <label for="uname"><b>Birth Date</b></label>
    <input type="date" placeholder="Client's Birth Date " name="age" min="1930-01-01" max="2015-12-30" required>
	    <label for="uname"><b>Job</b></label>
    <input type="text" placeholder="Client's Job " name="job" required>
		<br>
			<br>
			    <label for="uname"><b>Mobile Number</b></label>
    <input type="number" placeholder="Client's Mobile Number" name="mnum" required>
		    <label for="uname"><b>Phone Number</b></label>
    <input type="number" placeholder="Client's Number " name="pnum" required>
		    <label for="uname"><b>Phone\Mobile Number For Emergency</b></label>
    <input type="number" placeholder="Client's Number for Emergency " name="enum" required>
		<br>
			<br>


    <label for="uname"><b>Gender:</b></label>

<input type="radio" name="gender" value="male">Male</input>
<input type="radio" name="gender" value="female">Female</input>&nbsp; &nbsp; &nbsp; &nbsp;


  <label for="uname"><b>Membership type:</b></label>
<select name="a" required>
    <?php $i=1;
   for($i=1;$i<=100;$i++){ ?>
    <option value="<?php echo $i ; ?>"><?php echo $i; ?></option>
    <?php } ?>
</select>
  <select name="b" required>
    <option value="days">Session(s)</option>
  <option value="months">Month(s)</option>
  <option value="years">Year(s)</option>
  </select>





<select name="c" required>
  <option value="Gym">Gym</option>
  <option value="Private">Private</option>
  <option value="Gym + 4 Sauna or steam/Month">Gym + 4 Sauna or steam/Month</option>
  <option value="Cross Fit">Cross Fit</option>
  <option value="Kickboxing">Kickboxing</option>
    <option value="Gym + 12 Session Cross Fit">Gym + 12 Session Cross Fit</option>
    <option value="Gym + 8 Kickboxing">Gym + 8 Kickboxing</option>
        <option value="Fitness for kids">Fitness for kids</option>
        <option value="Others ">Others</option>
</select>
    <input name="d" type="text" placeholder="Remarks "  >
  <br><br>
        <label for="uname"><b>Coach</b></label>
<select name="coach1" required>
  <option value="None">None</option>
  <option value="Abdelrahman">Abdelrahman</option>
  <option value="Hesham">Hesham</option>
  <option value="Nader">Nader</option>
    <option value="Manar">Manar</option>
    <option value="Ibrahim">Ibrahim</option>
      <option value="Amr & Ali">Amr & Ali</option>
     <option value="Nader & Manar">Nader & Manar</option>
     <!-- ////////////////////////////////////////////////////////////////////////// -->
</select>

		    <label for="uname"><b>Value</b></label>
    <input type="number" placeholder="Money Value " name="val1" required>

<label for="uname"><b>Coach</b></label>
<select name="coach2" required>
  <option value="None">None</option>
  <option value="Abdelrahman">Abdelrahman</option>
  <option value="Hesham">Hesham</option>
  <option value="Nader">Nader</option>
    <option value="Manar">Manar</option>
    <option value="Ibrahim">Ibrahim</option>
      <option value="Amr & Ali">Amr & Ali</option>
     <option value="Nader & Manar">Nader & Manar</option>
     </select>
     <label for="uname"><b>Value</b></label>
    <input type="number" placeholder="Money Value " name="val2" value="0" required></input>


			    <label for="uname"><b>Offers</b></label>
    <input type="text" placeholder="Offers " name="off" >
		    <label for="uname"><b>Reciept Number.</b></label>
    <input type="number" placeholder="Recp. No. " name="rec"  required>

<br>
<br>
<br>
<br>

 <center>
 <input type="submit" name="submit" value="Save" >
 </div>
 </form>
 </fieldset>
  <center>
<a href="home.php"><button "Button">Back</button></a>
  </center>
<html>
