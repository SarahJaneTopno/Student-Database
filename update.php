<?php
include("connection.php");
error_reporting(0);
$rn=$_GET['rn'];
$fn=$_GET['fn'];
$ln=$_GET['ln'];
$gender=$_GET['gender'];
?>
<html>
    <head>
        <title> Sign Up Form </title>
        <style>
            body
            {
                background-image:url('https://scontent.fccu10-1.fna.fbcdn.net/v/t39.30808-6/305107112_507602721370775_623435095766433004_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_ohc=19fESzEgBpwAX-X1zmS&_nc_ht=scontent.fccu10-1.fna&oh=00_AfDsFmWwXmbP1kQ_8xnmpob823PCC0740w_ucYUtN2oEtg&oe=655518D0');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
            table
            {
                color:white;
                background-color:black;
                border-radius:25px; 
            }
            #btn
            {
                background-color:green;  
                color:white;
                height: 35px;
                width: 100px;
                border-radius:25px;
            }    
            #btn:hover
            {
                background-color:rgb(0, 99, 0);
            }
        </style>
    </head>
    <body>
        <br><br><br><br><br><br><br>
        <form action="" autocomplete="off" onsubmit="return validation()">
        <table align="center" cellspacing="35"> 
            <tr>
            <td>First Name <td><input type = "text" value="<?php echo "$fn" ?> " placeholder="First Name" name="fname" required></td></tr>
            <tr><td> Last Name <td><input type = "text" value="<?php echo "$ln" ?> " placeholder="Last Name" name="lname" required> </td></tr>
            <tr><td>Roll Number <td><input type = "text" value="<?php echo "$rn" ?> " placeholder="Roll Number" name="roll" required></td></tr>
            <tr><td> Gender <td><input type="radio" name="r1" value="male" required
            <?php
                if($gender == "male")
                {
                    echo "checked";
                }
            ?>
            > Male <input type="radio" name="r1" value="female" required
            <?php
                if($gender == "female")
                {
                    echo "checked";
                }
            ?>
            >Female</td></tr>
            <tr><td align="center" colspan="2"><input type="submit" id="btn" name="submit"></td></tr>
        </table>
        </form>
    </body>
</html>

<?php

if($_GET['submit'])
{
    $roll = $_GET['roll'];
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $gnd = $_GET['r1'];
    $query="update student set rollnum='$roll', firstname='$fname', lastname='$lname', gender='$gnd' where rollnum='$roll' ";

    $data=mysqli_query($con,$query);
    if ($data)
    {
        echo "<script>alert('Record Updated')</script>";
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/display.php">
        <?php
    }
    else 
    {
        echo "Failed";
    }
}
?>