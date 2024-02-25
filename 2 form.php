<html>
<head> <style>
body{
	background-image:url(images/csk.jpg);
	background-repeat:repeat x;;
	
}
h1{
	color:gray;
	
}
.one{
	border:3px solid black;
	margin-left:200px;
	margin-right:200px;
	margin-bottom:10px;
	margin-top:50px;

    border-radius:30px 0px 30px 0px;
	background-color:gray;
	text-align:center;
	
}
.first{

}
.second{
	border:3px solid white;
    
	margin-left:200px;
	margin-right:200px;
	
background-color:gray;
    border-radius:13px 0px 13px 0px;
	text-align:center;
}
.third{
	border:3px solid white;

	margin-left:200px;
	margin-right:200px;
	
background-color:gray;
    border-radius:13px 0px 13px 0px;
	text-align:center;
}
.fourth{
	border:3px solid white;
	
	margin-left:200px;
	margin-right:200px;
	
background-color:gray;
    border-radius:13px 0px 13px 0px;
	text-align:center;
}
.fifth{
	border:3px solid white;
	
	margin-left:200px;
	margin-right:200px;
	
	
background-color:gray;
text-align:center;
    border-radius:13px 0px 13px 0px;
}
.sixth{
	border:3px solid white;
	margin-left:200px;
	margin-right:200px;
	
	
background-color:gray;
text-align:center;
    border-radius:13px 0px 13px 0px;
	
}
p:hover{color:white;}


 </style> </head>
<body>
<body>

<h1><marquee> Form </marquee></h1>
<form method="post" action ="submit.php">
<div class="one">
<form><center>
<div class="first"><p>First Name:</p>
<input type="text" placeholder="Name" NAME="FN"/>
</div><br>
<div class="second">
<p>Last Name:</p>
<input type="text" placeholder="Last Name" NAME="LN"/>
</div>
<br>
<div class="third">
<p>D.O.B</p>
<input type ="text" placeholder="Date/Month/Year" name="DOB"/>
</div>
<br>
<div class="fourth">
<p>Mobile Number</p>
<input type="text" placeholder="+91" name="MN"/>
</div>
<br>
<div class="fifth">
<p>A/C Number</p>
<input type ="text" placeholder="Account no." name="AC"/>
</div>
<br>
<div class="sixth">
<p>Opening Balance</p>
<input type ="text" placeholder="1000 $" name="OB"/>
</div><br>
<p>Submit </p>
<input type="submit" value="O.K." name="S"/>
</center>
</form>
</div>
</body>



</html>
