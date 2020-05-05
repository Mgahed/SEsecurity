<?php
error_reporting(0);
session_start();
if(!isset($_SESSION["uname"])){
  header("Location: login.php");
}

include_once('db.php');
if(!isset($_SESSION["id"])){
$id = $_POST["id"];
$_SESSION["id"] = $id;
}

$id = $_SESSION["id"];

$db = new MyDB();

$UserInfo = " SELECT * FROM mems WHERE id = '$id'";

$result = $db->query($UserInfo);

$row = $result->fetchArray(SQLITE3_ASSOC);

$_SESSION["rec"]=$row["rec"];
$_SESSION["val"]=$row["val"];


if($id != $row["id"]){echo "user not exist" . "<a href='home.php'> <input type='button' value='Back'></a>";}


else {

?>

<html>
<head>
<title>Cancel Membership</title>
<script src="JS/dontback.js"></script>
</head>
<body>
   <center>

<form>
 <fieldset>
<img src ="photos/Ultimate Gym Logo png.png" border"0" alt="Gym" width="180" height="220">

   <div class="container">
          <label for="uname"><b>Membership number:</b></label>
    <?php echo " ".$row["id"];  ?>&nbsp; &nbsp;
    <label for="uname"><b>Full Name:</b></label>
    <?php echo " ".$row["name"];  ?> <br><br>
   <label for="uname"><b>Beginning Date:</b></label>
   <?php echo " ".$row["bdate"];  ?> &nbsp; &nbsp;
   <label for="uname"><b>Ending Date:</b></label>
   <?php echo " ".$row["edate"];  ?><br><br>

   <?php
////////////////////AGE/////////////
$age=$row["age"];
$today=date("Y-m-d");
$agee=date_diff(date_create($age), date_create($today))->format('%y');
/////////AGE//////////////////

?>
      <label for="uname"><b>Age:</b></label>
    <?php echo " ".$agee;  ?> &nbsp; &nbsp;
      <label for="uname"><b>Job:</b></label>
    <?php echo " ".$row["job"];  ?>&nbsp; &nbsp;
        <label for="uname"><b>Gender:</b></label>
    <?php echo " ".$row["gender"];  ?>
    <br>
      <br>
          <label for="uname"><b>Mobile Number:</b></label>
    <?php echo " ".$row["mnum"];  ?> &nbsp; &nbsp;
        <label for="uname"><b>Phone Number:</b></label>
    <?php echo " ".$row["pnum"];  ?> &nbsp; &nbsp;
        <label for="uname"><b>Phone\Mobile Number For Emergency:</b></label>
    <?php echo " ".$row["enum"];  ?>

<br>
<br>


  <label for="uname"><b>Membership type:</b></label>
<?php echo " ".$row["memtype"];  ?> <br><br>

</select>
        <label for="uname"><b>Value:</b></label>
    <?php echo " ".$row["val"];  ?> &nbsp; &nbsp;
          <label for="uname"><b>Offers:</b></label>
    <?php echo " ".$row["off"];  ?> &nbsp; &nbsp;
        <label for="uname"><b>Reciept Number:</b></label>
    <?php echo " ".$row["rec"];  ?><br><br>
    <label for="uname"><b>Coach:</b></label>
    <?php echo " ".$row["coach"];  ?>

  <br>
<br>
<label for="uname"><b>Reception:</b></label>
<?php echo " ".$row["who"]; ?>
<br>
<br>

</fieldset>

 <a href="cancelmembership.php"> <input type="button" value="Back"></a>
 <a href="cancelmembership2.php"> <input type="button" value="Cancel Membership"></a>
</center>
</body>
</html>
<?php } ?>
