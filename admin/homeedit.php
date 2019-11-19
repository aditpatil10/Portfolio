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

$hsql = "UPDATE home SET nameid = '$editData1', bio= '$editData2' WHERE homeid= 1";
$editresult = mysqli_query($db, $hsql);

echo 'Content Edited';

// Edu
?>