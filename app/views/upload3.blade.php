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


	<br><br>
	

	
	
	<img style= "width:100px; height:100px;"     src = "<?php echo Session::get('picpath') ?>"  >
		<p><font size="5" color = "blue" >Profile Picture Added Successfully !</font></p> <br>
	
	<p><font size="10" color = "blue" >User information</font></p> <br>
	

	
	
	
	<br><br>
	
	First Name: {{Session::get('fname')}} <br><br>
	Last Name :{{Session::get('lname')}} <br><br>
	Email Id : {{Session::get('email')}} <br><br>
	
<br> <br>


	{{ Form::open( array('url' => 'edit1') ) }}


	 {{Form :: submit('edit profile')}} 
	{{Form::close()}}


{{ Form::open( array('url' => 'upload1') ) }}


	 {{Form :: submit('change profile picture')}} 
	{{Form::close()}}	</p>
	
	
	
	

	
</body>


</html>