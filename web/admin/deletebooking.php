<?php 
 	include "config.php";

 	if (isset($_GET['id'])) 
 	{
 		$delete2 = mysqli_query($conn,"delete from booknow where id='".$_GET['id']."'");

 		if ($delete2) 				
		{
			echo "<script>;";
			echo "alert('Record Delete....!');";
			echo 'window.location.href = "booking.php";';
			echo "</script>;";
		}
		else
		{
			echo "<script>;";
			echo "alert('Data error....!');";
			echo 'window.location.href = "booking.php";';
			echo "</script>;";
		}
 	}

  ?>