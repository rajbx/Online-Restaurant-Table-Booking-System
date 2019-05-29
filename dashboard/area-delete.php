<!-- area-delete.php -->
<?php 
	$id =$_GET['area_id'];
	$sql ="DELETE FROM `locations` WHERE id = '$id';";
	include_once 'dbCon.php';
	$con = connect();
	if ($con->query($sql) === TRUE) {
	echo '<script>alert("Location Deleted")</script>';
	echo '<script>window.location="restaurant-area-list.php"</script>';
    } else {
		echo "Error: " . $sql . "<br>" . $con->error;
	} 
?>