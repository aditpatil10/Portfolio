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

$editData = $_POST['data'];
$editDataa = $_POST['dataa'];

$esql = "UPDATE personal SET age = '$editData', email= '$editDataa' WHERE pid= 1";
$editresult = mysqli_query($db, $esql);

echo $editData;



?>