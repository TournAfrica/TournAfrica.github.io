<?php
//database connection code
//$con=mysqli_connect('localhost','root','','test');

$con = mysqli_connect('localhost', 'root','','test');

//get post records
$txtGamingName = $_POST['txtGamingName'];
$txtEmail = $_POST['txtEmail'];
$txtPhoneNumber = $_POST['txtPhoneNumber'];

//database insert SQL code 
$sql = "INSERT INTO 'tbl_user' ('Id','fldGamingName','fldEmail','fldPhoneNumber') VALUES ('0', '$txtGamingName','$txtEmail','$txtPhoneNumber')";

//insert in database
$rs = mysqli_query($con,$sql);
if ($rs)
{
    echo "user Records Inserted";
}
?>