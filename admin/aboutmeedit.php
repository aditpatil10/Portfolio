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
// About me
$editData1 = $_POST['data1'];
$editData2 = $_POST['data2'];
$editData3 = $_POST['data3'];
$editData4 = $_POST['data4'];
$editData5 = $_POST['data5'];
$editData6 = $_POST['data6'];

$esql = "UPDATE personal SET age = '$editData1', email= '$editData2', phone = '$editData3', phone = '$editData3', address = '$editData4', languages = '$editData5', aboutme = '$editData6' WHERE pid= 1";
$editresult = mysqli_query($db, $esql);

echo 'Content Edited';

// Edu
?>