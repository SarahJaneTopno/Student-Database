<?php
$server = "localhost";
$username = "root";
$pwd = "";
$db = "mproj4";

$con = mysqli_connect($server,$username,$pwd,$db);
if ($con)
{
    // echo "Connection successful";
}
else
{
    echo "Connection failed".mysqli_connect_error();
}
?>
<!-- <META HTTP-EQUIV="Refresh" CONTENT="0; URL= form"> -->