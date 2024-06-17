<html>
    <head>
        <title> Display Records </title>
        <style>
                body
                {
                    background-image:url('https://www.readz.com/image/8359264.1620928269000/gradient-backgrounds.webp');
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: cover;
                }
                table
                {
                    color:white;
                    border-radius:25px;
                }
                #editbtn,#delbtn
                {
                    background-color:green;
                    color:white;
                    width:130px;
                    font-size:18px;
                    height:25px;
                }
                #editbtn:hover
                {
                    background-color:darkgreen;
                }

                #delbtn
                {
                    background-color:brown;
                }
                #delbtn:hover
                {
                    background-color:red;
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
    <body>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <table border="2" cellspacing="10" align="center">
            <tr>
            <th>ROLL NO.</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>GENDER</th>
            <th>EDIT</th>
            <th>DELETE</th>
            </tr>

<?php
include("connection.php");
error_reporting(0); 
$query="select * from student";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);

if($total!=0)
{
    while (($result=mysqli_fetch_assoc($data)))
    {
        echo "
        <tr>
        <td>".$result['rollnum']."</td> 
        <td>".$result['firstname']."</td> 
        <td>".$result['lastname']."</td> 
        <td>".$result['gender']."</td> 
        <td><a href = 'update.php?rn=$result[rollnum]&fn=$result[firstname]&ln=$result[lastname]&gender=$result[gender]'>
        <input type='submit' value='EDIT' id='editbtn'></td>
        <td><a href = 'delete.php?rn=$result[rollnum]' onclick='return checkdelete()'>
        <input type='button' value='DELETE' id='delbtn'></td>
        ";
    }
}

?>

<tr><td align="center" colspan="6"><a href = 'index.html'><input type="button" id="homebtn" value="HOME"></td></tr>

</table>
</body>
</html>