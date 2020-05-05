<?php
session_start();
if(!isset($_SESSION["uname"])){
  header("Location: home.php");
}
?>

<html>
<head>
<title>Youssef/ New Membership</title>
<script src="JS/dontback.js"></script>
</head>




<form>
 <fieldset>
 <center>
<img src ="photos/Ultimate Gym Logo png.png" border"0" alt="Gym" width="180" height="220">
 </center>

   <div class="container">
          <label for="uname"><b>Membership number:</b></label>
    <?php echo " ".$_SESSION["id"];  ?>&nbsp; &nbsp;
    <label for="uname"><b>Full Name:</b></label>
    <?php echo " ".$_SESSION["name"];  ?> <br><br>
   <label for="uname"><b>Beginning Date:</b></label>
   <?php echo " ".$_SESSION["bdate"];  ?> &nbsp; &nbsp;
   <label for="uname"><b>Ending Date:</b></label>
   <?php echo " ".$_SESSION["edate"];  ?><br><br>

   <?php
////////////////////AGE/////////////
$age=$_SESSION["age"];
$today=date("Y-m-d");
$agee=date_diff(date_create($age), date_create($today))->format('%y');
/////////AGE//////////////////

?>
      <label for="uname"><b>Age:</b></label>
    <?php echo " ".$agee;  ?> &nbsp; &nbsp;
      <label for="uname"><b>Job:</b></label>
    <?php echo " ".$_SESSION["job"];  ?>&nbsp; &nbsp;
        <label for="uname"><b>Gender:</b></label>
    <?php echo " ".$_SESSION["gender"];  ?>
    <br>
      <br>
          <label for="uname"><b>Mobile Number:</b></label>
    <?php echo " ".$_SESSION["mnum"];  ?> &nbsp; &nbsp;
        <label for="uname"><b>Phone Number:</b></label>
    <?php echo " ".$_SESSION["pnum"];  ?> &nbsp; &nbsp;
        <label for="uname"><b>Phone\Mobile Number For Emergency:</b></label>
    <?php echo " ".$_SESSION["enum"];  ?>

<br>
<br>


  <label for="uname"><b>Membership type:</b></label>
<?php echo " ".$_SESSION["memtype"];  ?> <br><br>

</select>
        <label for="uname"><b>Value:</b></label>
    <?php echo " ".$_SESSION["val"];  ?> &nbsp; &nbsp;
          <label for="uname"><b>Offers:</b></label>
    <?php echo " ".$_SESSION["off"];  ?> &nbsp; &nbsp;
        <label for="uname"><b>Reciept Number:</b></label>
    <?php echo " ".$_SESSION["rec"];  ?><br><br>
    <label for="uname"><b>Coach:</b></label>
    <?php echo " ".$_SESSION["coach"];  ?>

  <br>
<br>
<label for="uname"><b>Reception:</b></label>
<?php echo " ".$_SESSION["who"]; ?>
<br>
<br>

 </field>
  <center>
  <!-- <?php if(isset($_SESSION["key"])){ ?>
  <a href="new 2.php"> <input type="button" value="Back"></a>
  <?php } else{ ?> -->
   <a href="home.php"> <input type="button" value="Back"></a>
   <!-- <?php } ?> -->
</center>
