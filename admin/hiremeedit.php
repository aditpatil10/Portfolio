<?php


include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}

// ser
$serData1 = $_POST['data1'];
$serData2 = $_POST['data2'];
$serData3 = $_POST['data3'];
$serData4 = $_POST['data4'];
$serData5 = $_POST['data5'];
$serData6 = $_POST['data6'];
$serData7 = $_POST['data7'];
$serData8 = $_POST['data8'];
$serData9 = $_POST['data9'];
$hirecost1 = $_POST['data10'];
$hirecost2 = $_POST['data12'];
$hirecost3 = $_POST['data14'];
$hiredescrip1 = $_POST['data11'];
$hiredescrip2 = $_POST['data13'];
$hiredescrip3 = $_POST['data15'];


$sersql1 = "UPDATE services SET services = '$serData1' WHERE serid= 1";
$sersql2 = "UPDATE services SET services = '$serData2' WHERE serid= 2";
$sersql3 = "UPDATE services SET services = '$serData3' WHERE serid= 3";
$sersql4 = "UPDATE services SET services = '$serData4' WHERE serid= 4";
$sersql5 = "UPDATE services SET services = '$serData5' WHERE serid= 5";
$sersql6 = "UPDATE services SET services = '$serData6' WHERE serid= 6";
$sersql7 = "UPDATE services SET services = '$serData7' WHERE serid= 7";
$sersql8 = "UPDATE services SET services = '$serData8' WHERE serid= 8";
$sersql9 = "UPDATE services SET services = '$serData9' WHERE serid= 9";

$hiresql1 = "UPDATE hireme SET cost = '$hirecost1', description= '$hiredescrip1' WHERE hireid= 1";
$hiresql2 = "UPDATE hireme SET cost = '$hirecost2', description= '$hiredescrip2' WHERE hireid= 2";
$hiresql3 = "UPDATE hireme SET cost = '$hirecost3', description= '$hiredescrip3' WHERE hireid= 3";

$sereditresult1 = mysqli_query($db, $sersql1);
$sereditresult2 = mysqli_query($db, $sersql2);
$sereditresult3 = mysqli_query($db, $sersql3);
$sereditresult4 = mysqli_query($db, $sersql4);
$sereditresult5 = mysqli_query($db, $sersql5);
$sereditresult6 = mysqli_query($db, $sersql6);
$sereditresult7 = mysqli_query($db, $sersql7);
$sereditresult8 = mysqli_query($db, $sersql8);
$sereditresult9 = mysqli_query($db, $sersql9);

$sereditresult10 = mysqli_query($db, $hiresql1);
$sereditresult11 = mysqli_query($db, $hiresql2);
$sereditresult12 = mysqli_query($db, $hiresql3);


?>