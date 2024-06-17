<?php
include("connection.php");
error_reporting(0);

$rn= $_GET['rn'];
$query="delete from student where rollnum='$rn' ";
$data=mysqli_query($con,$query);

if($data)
{
    echo "<script>alert('Record Deleted')</script>Record Deleted";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/display.php">
    <?php
}
else
{
    echo "<font color='red'>Deletion failed";
}
?>