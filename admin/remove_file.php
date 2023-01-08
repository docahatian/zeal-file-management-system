<?php
	require_once 'conn.php';
	
	if(ISSET($_GET['store_id'])){
		$store_id = $_GET['store_id'];
		$query = mysqli_query($conn, "SELECT * FROM `storage` WHERE `store_id` = '$store_id'") or die(mysqli_error());
		$fetch  = mysqli_fetch_array($query);
		$filename = $fetch['filename'];
		$sub_type = $fetch['stud_category'];
		$stud_no = $fetch['stud_no'];
		if(unlink("../files/".$stud_no."/".$sub_type."/".$filename)){

			mysqli_query($conn, "DELETE FROM `storage` WHERE `store_id` = '$store_id'") or die(mysqli_error());
		}
	}
?>
<script type="text/javascript">
	window.location = "files.php";
</script>