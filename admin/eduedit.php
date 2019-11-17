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

// Edu
$eduData1 = $_POST['data1'];
$eduData2 = $_POST['data2'];
$eduData3 = $_POST['data3'];
$eduData4 = $_POST['data4'];
$eduData5 = $_POST['data5'];
$eduData6 = $_POST['data6'];
$eduData7 = $_POST['data7'];
$eduData8 = $_POST['data8'];
$eduData9 = $_POST['data9'];
$eduData10 = $_POST['data10'];
$eduData11 = $_POST['data11'];
$eduData12 = $_POST['data12'];

$edusql1 = "UPDATE edu SET date = '$eduData1', edutype= '$eduData2', title = '$eduData3', institution = '$eduData4' WHERE eduid= 1";
$edusql2 = "UPDATE edu SET date = '$eduData5', edutype= '$eduData6', title = '$eduData7', institution = '$eduData8' WHERE eduid= 2";
$edusql3 = "UPDATE edu SET date = '$eduData9', edutype= '$eduData10', title = '$eduData11', institution = '$eduData12' WHERE eduid= 3";

$edueditresult = mysqli_query($db, $edusql1);
$edueditresult = mysqli_query($db, $edusql2);
$edueditresult = mysqli_query($db, $edusql3);

echo 'Content Edited';
?>