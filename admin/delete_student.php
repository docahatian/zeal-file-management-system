<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['stud_id'])){
		mysqli_query($conn, "DELETE FROM `student` WHERE `stud_id` = '$_POST[stud_id]'") or die(mysqli_error());
	}
?>
