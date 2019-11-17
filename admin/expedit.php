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

// exp
$expData1 = $_POST['data1'];
$expData2 = $_POST['data2'];
$expData3 = $_POST['data3'];
$expData4 = $_POST['data4'];
$expData5 = $_POST['data5'];
$expData6 = $_POST['data6'];
$expData7 = $_POST['data7'];
$expData8 = $_POST['data8'];

$expsql1 = "UPDATE exp SET date = '$expData1', firm= '$expData2', title = '$expData3', description = '$expData4' WHERE expid= 1";
$expsql2 = "UPDATE exp SET date = '$expData5', firm= '$expData6', title = '$expData7', description = '$expData8' WHERE expid= 2";

$expeditresult = mysqli_query($db, $expsql1);
$expeditresult = mysqli_query($db, $expsql2);

echo 'Content Edited';
?>