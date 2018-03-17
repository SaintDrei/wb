
<?php 
	$page_title = "Room Maintenance Delete";
//	include_once('../includes/header_admin.php');
    $mysqli = mysqli_connect('localhost', 'admin', 'enter', 'learndb') or die("Please, die");
    $query = "DELETE FROM roommaintenance WHERE RoomID=" . $_REQUEST['id']. ";";
    $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    
    header('location:/RM_display.php');
    
?>
