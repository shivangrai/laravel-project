<!DOCTYPE html>
<html>


<head>

<p align="right" ><font size = 20 color= "red"> Welcome :  {{Session::get('username')}} </font>
  </p>
  
<style type= "text/css">

body{
	margin-top:50px;
	text-align :center;
	background-color : green;
	color:white;
	
}


       
</style>
</head>


	{{ Form::open( array('url' => 'logout') ) }}


	<p align="right" > {{Form :: submit('logout')}} </p>
	{{Form::close()}} </p>

<body>

     <img style= "width:100px; height:100px;"     src = "<?php echo Session::get('path') ?>"  >
	<br><br>
	<p><font size="10" color = "blue" >User information</font></p> <br><br>
	

	
	
	
	<br><br>
	
	First Name: {{Session::get('fname')}} <br><br>
	Last Name :{{Session::get('lname')}} <br><br>
	Email Id : {{Session::get('email')}} <br><br>
	
<br> <br>


	{{ Form::open( array('url' => 'edit1') ) }}


	 {{Form :: submit('edit profile')}} 
	{{Form::close()}} </p>  <br><br><br>
	
	
	
	

	
</body>


</html>