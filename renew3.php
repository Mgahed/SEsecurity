<?php
include_once('db.php');

session_start();

$count=0;
$id = $_POST["id"];
$bdate = $_POST["bdate"];
//$edate = $_POST["edate"];
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];
$d = $_POST["d"];
$e = $a.",".$b.",".$c.",".$d;
$off= $_POST["off"];
$rec = $_POST["rec"];
$coach1 = $_POST["coach1"];
$val1 = $_POST["val1"];
$coach2 = $_POST["coach2"];
$val2 = $_POST["val2"];
$x=$_SESSION["uname"];
/*$con = mysqli_connect("localhost","root","") or die("Error in Server");*/
/*$db = mysqli_select_db($con,"KAYMNY") or die("Error in DB");*/

if($coach2=="None"){$coach=$coach1;}
else{
$coach=$coach1 . " , " . $coach2;
}
$val=$val1+$val2;

$db = new MyDB();

$sums = "SELECT * FROM tot WHERE total = 'Total'";
$sumss = $db->query($sums);
$rowsu = $sumss->fetchArray(SQLITE3_ASSOC);
$sum = $rowsu["val"]+$val;

$tott = "UPDATE tot set val = '$sum' WHERE total = 'Total'";
$fls = $db->query($tott);


$qu = " SELECT * FROM mems WHERE id = '$id' ";

$flags = $db->query($qu);
$rows = $flags->fetchArray(SQLITE3_ASSOC);
$name = $rows["name"];


if($flags){



$expen = "INSERT INTO value(ddate,vall,recc,type,nname,recep,kind,coach,com) VALUES ('$bdate','$val1','$rec','$e','$name','$x','$c','$coach1','$com')";
$fla = $db->query($expen);


$cc= " + " . $a . " " . $b;
$Date = $bdate;
$edate = date('Y-m-d', strtotime($Date. $cc));


$UserInfo = "UPDATE mems set cnt = 0 , kind = '$c' , bdate = '$bdate' , edate = '$edate' ,  memtype = '$e' ,  val = '$val' ,  off = '$off' ,  rec = '$rec' ,  who = '$x' , coach = '$coach' , count = '$count' , seormo = '$b', nom = '$a'
						 WHERE id = '$id' ";

$flag = $db->query($UserInfo);
$row = $flag->fetchArray(SQLITE3_ASSOC);

/*if($c=="Gym + 4 Sauna or steam/Month"){

	$aa = "UPDATE mems set cnt = 0
						 WHERE id = '$id' ";

$bb = $db->query($aa);
$cc = $bb->fetchArray(SQLITE3_ASSOC);
}*/

if($c=="Gym + 12 Session Cross Fit"||$c=="Gym + 8 Kickboxing"){
	$expenc = "INSERT INTO value(ddate,vall,recc,type,nname,recep,kind,coach,com) VALUES ('$bdate','$val2','$rec','$e','$name','$x','$c','$coach2','$com2')";
$flac = $db->query($expenc);
}


if($flag){

	$_SESSION["id"] = $id;
	$_SESSION ["bdate"] = $row["bdate"];
	$_SESSION ["edate"] = $row["edate"];
	$_SESSION ["name"] = $row["name"];
	$_SESSION ["age"] = $row["age"];
	$_SESSION ["job"] = $row["job"];
	$_SESSION ["mnum"] = $row["mnum"];
	$_SESSION ["pnum"] = $row["pnum"];
	$_SESSION ["enum"] = $row["enum"];
	$_SESSION ["gender"] = $row["gender"];
	$_SESSION ["memtype"] = $row["memtype"];
	$_SESSION ["val"] = $row["val"];
	$_SESSION ["off"]= $row["off"];
	$_SESSION ["rec"] = $row["rec"];
	$_SESSION ["coach"] = $row["coach"];
	$_SESSION ["who"] = $row["who"];
header("Location:home.php");
}
else echo "Error happened :)";
}
?>
