<?php
	$jobtitle=$_POST['title'];
	$location=$_POST['location'];
	$experience=$_POST['experience'];
	$db = mysqli_connect('localhost','root','','search');
	if (!$db)
	{
	die("Connection failed: " . mysqli_connect_error());
	echo "<script>";
	echo "alert('Error...')";
	echo "</script>";
	echo("<script>
	<!--
	location.replace('home.html');
	-->
	</script>");
	}
if(empty($_POST['title'])||empty($_POST['location'])||empty($_POST['experience']))
{
echo "<script>";
echo "alert('Please fill all fields.....')" ;
echo "</script>";
echo("<script>
<!--
location.replace('home.html');
-->
</script>");

} else {
	$sql = "SELECT * FROM `search1` WHERE (jobtitle='$jobtitle')AND(location='$location')AND(experience='$experience')";
$re=mysqli_query($db,$sql);
if(mysqli_num_rows($re)>0)
{
echo "<html>";
echo("<style>
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
</style>");
echo " <body background='25.jpg' style='overflow:hidden;background-attachment:fixed;background-size:100%;'> ";
echo "<h2 align='center'>Search Results</h2>";
	echo " <div style='margin-left:100px;margin-top:50px;overflow:auto;position:scroll;width:90%;height:600px;background:transparent;border:2px solid blue;'>";
	echo "<br>";
	while($a=mysqli_fetch_assoc($re))
	{
	echo " <div style='margin-left:170px;width:75%;height:150px;border:1px solid ;background:rgba(255,255,255,0);'>";
	printf("<p style='color:violet;font-size:25px;font-family:sans-serif'>&nbsp&nbsp<strong>%s</strong>&nbsp;&nbsp;&nbsp;&nbsp</p><p><span style='font-weight:bold;color:white;'>&nbsp%s&nbsp-&nbsp%s<br><br>&nbsp&nbsp<b>.</b>&nbsp%s years</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;\t&nbsp;&nbsp;&nbsp;&nbsp<a href='http://www.monsterindia.com/%s-%s-jobs.html'><input type='button' style='background-color:orange;' value='Get details'></a><br>",$a['jobtitle'],$a['companyname'],$a['location'],$a['experience'],$a['jobtitle'],$a['location']);
	echo "</div>";
	echo "<br><br>";
	}
echo "</div>";
echo "</body>";
echo "</html>";
} else {
echo "<html>";
echo "<head>";
echo("<style>
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
</style>");
echo "</head>";
echo " <body background='25.jpg' style='overflow:hidden;background-attachment:fixed;background-size:100%;'> ";
echo "<h2 align='center'>Search Results</h2>";
echo("<script>
alert('Sorry.....Please modify or broaden your search with new keywords');
location.replace('home.html');
</script>");
echo "</body>";
echo "</html>";
}
}
?>	