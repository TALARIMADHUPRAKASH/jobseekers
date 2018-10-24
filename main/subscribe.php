<?php
//Initializing connection variable with server_name, user_name, password.
$con = mysqli_connect('localhost','root','','subscribe');
//Fetching values from url and storing it in PHP variables.
$name=$_POST['name'];
$email=$_POST['email'];
if(($_POST['name']=='')
||($_POST['email']==''))
{
echo "Please fill all fields....." ;
} else{
// My-SQL query for inerting PHP variable values in table of selected database.
$ch="INSERT INTO subscribe VALUES ('".$name."','".$email."')";
if(mysqli_query($con,$ch)){
echo "You're Successfully Subscribed to Our Website....";
}else{
echo "Error...!!" ;
}
}
?>