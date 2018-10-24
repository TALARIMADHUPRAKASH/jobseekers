<?php
//Initializing connection variable with server_name, user_name, password.
$con = mysqli_connect('localhost','root','','contact');
//Fetching values from url and storing it in PHP variables.
$n=$_POST['name'];
$e=$_POST['email'];
$q=$_POST['query'];
$m=$_POST['message'];
if(empty($_POST['name'])||empty($_POST['email'])||empty($_POST['query'])||empty($_POST['message']))
{
echo "<script>";
echo "alert('Please fill all fields.....')" ;
//echo "location.replace('home.html')";
echo "</script>";
echo("<script>
<!--
location.replace('home.html');
-->
</script>");

} 
else{
// My-SQL query for inerting PHP variable values in table of selected database.
$ch="INSERT INTO contact VALUES ('".$n."','".$e."','".$q."','".$m."')";
if(mysqli_query($con,$ch)){
echo "<script>";
echo "alert('Your Query Saved Successfully....We Will reach U As Soon AS Possible')";
echo "</script>";
echo("<script>
<!--
location.replace('home.html');
-->
</script>");
}else{
echo "<script>";
echo "alert('Error...!!')" ;
echo "</script>";
echo("<script>
<!--
location.replace('home.html');
-->
</script>");
}
}
?>
