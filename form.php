<?php
include("connection.php");
error_reporting(0);
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
            #btn2
            {
                background-color:red;
                color: white;
                height: 35px;
                width:100px; 
                border-radius:25px;
            }
            #btn2:hover
            {
                background-color:rgb(157, 6, 6);
            }
            #homebtn
            {
                background-color:orange;
                color:black;
                height: 35px;
                width: 100px;
                border-radius:25px;
            }
            #homebtn:hover
            {
                background-color:yellow;
            }
        </style>
    </head>
    <body  >
        <br><br><br><br><br>
        <form action="#" autocomplete="off" onsubmit="return validation()">
        <table align="center" cellspacing="35"> 
            <tr>
            <td>First Name <td><input type = "text" placeholder="First Name" name="fname" required></td></tr>
            <tr><td> Last Name <td><input type = "text" placeholder="Last Name" name="lname" required> </td></tr>
            <td>Roll Number <td><input type = "text" placeholder="Roll Number" name="roll" required></td></tr>
            <tr><td>Password <td><input type = "password" id="pass" placeholder="Password" name="pwd" required>
            <br><span id="pwd"></span>
            </td></tr>
            <tr><td> Confirm Password <td><input type = "password"  id="cpass" placeholder="Confirm password" name="cpwd" required>
            <br><span id="cpwd"></span>
            </td></tr> 
            <tr><td> Gender <td><input type="radio" name="r1" value="male" required> Male <input type="radio" name="r1" value="female" required>Female</td></tr>
            <tr><td align="center" colspan="2"><input type="submit" id="btn" name="submit"> <input type="reset" id="btn2" name="reset"></td></tr>
            <tr><td align="center" colspan="2"><a href = 'index.html'><input type="button" id="homebtn" value="HOME"></td></tr>
        </table>
        </form>

        <script type="text/javascript">
            function validation()
            {
                var pass = document.getElementById('pass').value;
                var cpass = document.getElementById('cpass').value; 

                if (cpass != pass)
                {
                    document.getElementById('cpwd').innerHTML="Password not matching";
                }
                else
                {
                    document.getElementById('cpwd').innerHTML="";
                }
            }
        </script>
    </body>
</html>

<?php
$rn=$_GET['roll'];
$fn=$_GET['fname'];
$ln=$_GET['lname'];
$pd=$_GET['pwd'];
$cpd=$_GET['cpwd'];
$gnd=$_GET['r1'];

$query = "insert into student values ('$rn', '$fn', '$ln', '$pd', '$cpd','$gnd')";
$data=mysqli_query($con,$query);

if($data)
{
    echo "<script>alert('Data Inserted')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/display.php">
    <?php
}
else 
{
    echo "<script>alert('Insertion Failed')</script>"; 
}
?>