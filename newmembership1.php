<?php
include_once('db.php');

session_start();

$qu = " SELECT MAX(id) AS id FROM mems" /*"  "SELECT * FROM mems WHERE id = '301'"*/;
$db = new MyDB();
$flags = $db->query($qu);
$rows = $flags->fetchArray(SQLITE3_ASSOC);
$db -> close();
unset($db);
$id = $rows["id"]+1;
if($rows["id"]=="") $id=1;
$bdate = $_POST["bdate"];
//$edate = $_POST["edate"];
$name = $_POST["name"];

$age = $_POST["age"];
$today=date("Y-m-d");
//$age=date_diff(date_create($dateOfBirth), date_create($today))->format('%y');

$job = $_POST["job"];
$mnum = $_POST["mnum"];
$pnum = $_POST["pnum"];
$enum = $_POST["enum"];
$gender= $_POST["gender"];
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];
$d = $_POST["d"];
$e = $a.",".$b.",".$c.",".$d;
$coach1 = $_POST["coach1"];
$val1 = $_POST["val1"];
$coach2 = $_POST["coach2"];
$val2 = $_POST["val2"];
$off= $_POST["off"];
$rec = $_POST["rec"];
$x=$_SESSION["uname"];

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




// $coac = "SELECT * FROM coach WHERE cname = '$coach1'";
// $soac = $db->query($coac);
// $roac = $soac->fetchArray(SQLITE3_ASSOC);
//
// $come = $roac["comm"];
//
// $com = 0;
// $com2 = 0;
// if($c=="Private"){
//
// 	if($coach1=="Manar"){$com=$val1*($come+.1);}
// 	else $com=$val1*$come;
//
// 	/*if($coach=="Abdelrahman"){$com=$val*.4;}
// 	else if($coach=="Hesham"){$com=$val*.5;}
// 	else if($coach=="Nader"){$com=$val*.4;}
// 	else if($coach=="Manar"){$com=$val*.5;}*/
// }
//
// if($c=="Cross Fit"){
//
// 	$com=$val1*$come;
//
// 	/*if($coach=="Amr & Ali"){$com=$val*.4;}
// 	else if($coach=="Nader & Manar"){$com=$val*.4;}
// 	else if($coach=="Manar"){$com=$val*.4;}*/
// }
//
//
// if($c=="Kickboxing"){
//
// 	$com=$val1*$come;
//
// 	//if($coach=="Ibrahim"){$com=$val*.4;}
// }
//
// if($c=="Fitness for kids"){
//
// 	$com=$val1*$come;
//
// 	//if($coach=="Nader & Manar"){$com=$val*.4;}
// }
//
//
// $coacc = "SELECT * FROM coach WHERE cname = '$coach2'";
// $soacc = $db->query($coacc);
// $roacc = $soacc->fetchArray(SQLITE3_ASSOC);
//
// $come2 = $roacc["comm"];
//
//
//
// if($c=="Gym + 12 Session Cross Fit"){
// 	$com2=$val2*$come2;
//
// 	/*if($coach=="Amr & Ali"){$com=450*.4;}
// 	else if($coach=="Nader & Manar"){$com=450*.4;}
// 	else if($coach=="Manar"){$com=450*.4;}*/
// }
//
// if($c=="Gym + 8 Kickboxing"){
//
// 	$com2=$val2*$come2;
//
// 	//if($coach=="Ibrahim"){$com=300*.4;}
// }









$cc= " + " . $a . " " . $b;
$Date = $bdate;
$edate = date('Y-m-d', strtotime($Date. $cc));


$UserInfo = "INSERT INTO mems(kind,cnt,id,bdate,edate,name,age,job,mnum,pnum,enum,gender,memtype,coach,val,off,rec,who,count,seormo,nom)
						VALUES ('$c','0','$id','$bdate','$edate','$name','$age','$job','$mnum','$pnum','$enum','$gender','$e','$coach','$val','$off','$rec','$x','0','$b','$a')";

$flag = $db->query($UserInfo);

if($flag){

	$tott = "UPDATE tot set val = '$sum' WHERE total = 'Total'";
$fls = $db->query($tott);

$expen = "INSERT INTO value(ddate,vall,recc,type,nname,recep,kind,coach,com) VALUES ('$bdate','$val1','$rec','$e','$name','$x','$c','$coach1','$com')";
$fla = $db->query($expen);

if($c=="Gym + 12 Session Cross Fit"||$c=="Gym + 8 Kickboxing"){
	$expenc = "INSERT INTO value(ddate,vall,recc,type,nname,recep,kind,coach,com) VALUES ('$bdate','$val2','$rec','$e','$name','$x','$c','$coach2','$com2')";


$flac = $db->query($expenc);
}


	///////////////////////////////image code//////////////////////////

// 	$targetDir = "uploads/";
// $fileName = basename($_FILES["file"]["name"]);
// $targetFilePath = $targetDir . $fileName;
// $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
//
// if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
//     // Allow certain file formats
//     $allowTypes = array('jpg','png','jpeg','gif','pdf');
//     if(in_array($fileType, $allowTypes)){
//         // Upload file to server
//         if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
//             // Insert image file name into database
//             $insert = $db->query("UPDATE mems set img ='$fileName' WHERE id = '$id'");
//             if($insert){
//                 $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
//             }else{
//                 $statusMsg = "File upload failed, please try again.";
//             }
//         }else{
//             $statusMsg = "Sorry, there was an error uploading your file.";
//         }
//     }else{
//         $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
//     }
// }else{
//     $statusMsg = 'Please select a file to upload.';
// }

////////////////////////////////////////////////////////////

	// $_SESSION["id"] = $id;
	// $_SESSION ["bdate"] = $bdate;
	// $_SESSION["edate"] = $edate;
	// $_SESSION ["name"] = $name;
	// $_SESSION ["age"] = $age;
	// $_SESSION ["job"] = $job;
	// $_SESSION ["mnum"] = $mnum;
	// $_SESSION ["pnum"] = $pnum;
	// $_SESSION ["enum"] = $enum;
	// $_SESSION ["gender"] = $gender;
	// $_SESSION ["memtype"] = $e;
	// $_SESSION ["coach"] = $coach;
	// $_SESSION ["val"] = $val;
	// $_SESSION ["off"]= $off;
	// $_SESSION ["rec"] = $rec;
	// $_SESSION ["who"] = $x;
 header("Location:home.php");
}
else echo "<center><h1>Error happened or inormation already exist :)" . "<a href='new 2.php'><button 'Button'>Back</button></a></h1></center>" ;
?>
