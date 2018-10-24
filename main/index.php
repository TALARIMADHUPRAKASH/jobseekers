<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location:login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location:login.php");
  }
?>

<html>
<head>
<title>Home</title>
<link rel="StyleSheet" href="home.css" type="text/css">
<link rel="StyleSheet" href="search.css" type="text/css">
<link rel="StyleSheet" href="contact.css" type="text/css">
<link rel="stylesheet" href="subscribe.css" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'><!-- Including google font-->
<script src="contact.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="subscribe.js"></script>
<script src="contactsubmit.js"></script>
</head>
<body class="body">
<!--subscribe Form -->
<form align="right" name="form1" method="post" action="index1.php" target="_blank">
  <label class="logoutLblPos">
  <input type="submit" value="logout" >
  </label>
</form>
<div id="contactdiv">
<form class="subscribeform" action="#" id="contact">
<img src="x.png" class="img" id="cancel"/>
<img src="thumsup.gif" id="thumsup"/>
<img src="subscribe.png" id="subscribe"/>
<h1 id="font">Subscribe to our website</h1>
<p id="font">Sign up here to get the latest Jobs news and updates directly to your inbox.</p>
<table cellspacing="5px">
<tr>
<td><input type="text" id="subscribename" placeholder="Name" size="15px;"/></td>
<td><input type="text" id="subscribeemail" placeholder="Email address" size="40px"/></td>
<td><input id="subscribebutton"type="button"  value="Send"/></td>
<td><img src="loading.gif" id="loading"/></td>
</tr>
</table>
<p style="color:white;"><b>You can unsubscribe at any time</b></p>
</form>
</div>
<!-- Sliding div starts here -->
<form action="contact.php" method="post">
<div id="slider" style="right:-342px;">
<div id="sidebar" onclick="open_panel()"><img src="b.png"></div>
<div id="header" class="form-group new-input">
<h2 style="color:cyan;">Contact Form</h2>
<p id="cp">If You Have Any Query... Please Let Us Know !!!</p>
<input type="text" name="name" placeholder="Name">
<input name="email" type="text" placeholder="Email">
<h4>Query type</h4>
<select id="select" name="query">
<option value="" selected>SELECT UR QUERY</option>
<option value="General Query">General Query</option>
<option value="Job Search">Job Search</option>
<option value="Technical">Technical</option>
<option value="Others">Others</option>
</select>
<textarea name="message" placeholder="Message"></textarea>
<input type="submit" id="contactsubmit" value="Send Message"/>
</div>
</div>
</form>
<!-- Sliding div ends here -->
 <div id="name">
<center>
<h3 style="-webkit-text-stroke-color:olive; -webkit-text-fill-color:green; -webkit-text-stroke-width:3px;"><strong><i>Job Seekers</i></strong></h3>
</center>
</div>
<!--scrolling text -->
<div style="padding-bottom: 6px">
	<div class="scroll">
	<table style="width:100%">
	<tr>
		<td align="left">
		<span style="float: left; margin-top: -2.2%;background-color:pink;">
			<img src="new.gif" style="border: none;height:30px;" />
		</span>
		</td>
		<td align="left" style="margin-left: auto">
		<marquee scrollAmount="5" style="color:#000;">
		<span style="font:14px arial;font-weight:bold;">
		<a target="_self" href="notifications.html">click me to get job alerts of this week</a>
		</span>
		</marquee>
		</td>
	</tr>
	</table>
	</div>
</div>
<!--scrolling text End -->
<div class="trans" style="margin-left:350px;margin-top:10px;width:800px;height:100px;background: rgba(255,255,255,0.2);">
<center><br>
<form action="search.php" method="post">
<table cellspacing="5px" cellpadding="5px">
<tr>
  <td>
  <div class="form-group new-input">
    <input  type="text" name="title" placeholder="JobTitle">
    <label class="control-label float-label">JobTitle</label>
  </div>
  </td>
  <td>
  <div class="form-group new-input">
    <input type="text" name="location" placeholder="Location">
    <label class="control-label float-label">Location</label>
  </div>
  </td>
  <td>
<div id="myForm">
<select name="experience"style="max-width:100%;">
<option value="" selected>Experience</option>
 <option value="0">0 Yr</option>
 <option value="0">&lt;1 Yr</option>
 <option value="1">1 Yr</option>
 <option value="2">2 Yrs</option>
 <option value="3">3 Yrs</option>
 <option value="4">4 Yrs</option>
 <option value="5">5 Yrs</option>
 <option value="6">6 Yrs</option>
 <option value="7">7 Yrs</option>
 <option value="8">8 Yrs</option>
 <option value="9">9 Yrs</option>
 <option value="10">10 Yrs</option>
 <option value="11">&gt; 10 Yrs</option>
</select>
</td>
</div>
<td><input type="submit" class="search"></input></td> 
</tr>
 </table>
 </form>
</div>
<div style="margin-left:350px; margin-top:40px;position:fixed;">
<ul class="ch-grid">
  <li>
    <div class="ch-item ch-img-1" >
      <div class="ch-info">
        <h3><br>Government Jobs</h3>
        <p><a href="govtjobs.html">Read more</a></p>
      </div>
    </div>
  </li>
  <li>
    
  </li>
  <li>
    <div class="ch-item ch-img-2">
      <div class="ch-info">
        <h3></br>Private Jobs</h3>
        <p><a href="privatejobs.html">Read more</a></p>
      </div>
    </div>
  </li>
</ul>
</div>
</body>
</html>