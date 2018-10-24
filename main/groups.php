<?php
echo "<html>";
echo "<style>
/* width */
::-webkit-scrollbar {
    width:15px;
}

/* Track */
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px transparent; 
    border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background:red; 
    border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background:skyblue; 
}
</style>";
echo " <body background='25.jpg' style='overflow:hidden;background-attachment:fixed;background-size:100%;'> ";
if(isset($_POST['group1']))
{
	$sql = "SELECT * FROM `search1` WHERE companyname='group1'";
}
elseif(isset($_POST['group2']))
{
$sql = "SELECT * FROM `search1` WHERE  companyname='group2'";
}
elseif(isset($_POST['group3']))
{
$sql = "SELECT * FROM `search1` WHERE companyname='group3'";
}
elseif(isset($_POST['group4']))
{
$sql = "SELECT * FROM `search1` WHERE companyname='group4'";
}
$db = mysqli_connect('localhost','root','','search');
$result = mysqli_query($db, $sql); 
echo " <div style='margin-left:100px;margin-top:50px;overflow:auto;position:scroll;width:90%;height:600px;background:transparent;border:2px solid blue;'>";
echo "<br>";
while($a = $result->fetch_assoc())
{
	echo " <div style='margin-left:170px;width:75%;height:150px;border:1px solid ;background:rgba(255,255,255,0);'>";
	printf("<p style='color:violet;font-size:25px;font-family:sans-serif'>&nbsp&nbsp<strong>%s</strong>&nbsp;&nbsp;&nbsp;&nbsp</p><p><span style='font-weight:bold;color:white;'>&nbsp%s&nbsp-&nbsp%s<br><br>&nbsp&nbsp<b>.</b>&nbsp%s years&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;\t&nbsp;&nbsp;&nbsp;&nbsp<a href='http://www.monsterindia.com/%s-jobs.html'><input type='button' style='background-color:orange;' value='Get details'></a></p><br></p>",$a['jobtitle'],$a['companyname'],$a['location'],$a['experience'],$a['jobtitle']);
	echo "</div>";
	echo "<br><br>";
}
echo "</div>";
echo "</body>";
echo "</html>";
?>	