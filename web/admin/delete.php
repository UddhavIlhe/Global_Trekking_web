<?php
     include "config.php";

     if (isset($_GET['stud_id']))
     {
        $delete1 = mysqli_query($conn,"delete from contact where id='".$_GET['stud_id']."'");

        if($delete1)
        {
            echo "<script>;";
            echo "window.alert('Record Deleted Successfully.....!');";
            echo 'window.location.href = "contactview.php";';
            echo "</script>;";
        }
        else
        {
            echo "<script>;";
            echo "window.alert('Data Error....!');";
            echo 'window.location.href="contactview.php";';
            echo "</script>;";
        }
    }
?>