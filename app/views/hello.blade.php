<!DOCTYPE html>
<html>


<head>





<style type= "text/css">

body{
	margin-top:10px;
	text-align :right;
	color:white;
	
}

p1{
	margin-right:500px;
	margin-top:50;
	text-align :center;
	color : blue;
	
}





p{
	margin-bottom:0px;
	text-align :center;
	color : red;
	
}

h2
{
	margin-right:1500px;
	
}
h2
{
	text-align:center;
	
}




</style>
</head>


<body background ="http://wallpaperlayer.com/img/2015/7/outer-space-wallpaper-5232-5477-hd-wallpapers.jpg">






{{ Form::open( array('url' => 'login') ) }}   

{{ Form::label('name','Username')}}
 {{ Form:: text('username')}} <br>
 <?php echo '<i style="color:red;">'. $errors->login->first('username').'</i>'; ?><br>
 
 
 {{ Form::label('password','Password')}}
{{ Form:: password('password')}} <br>
<?php echo '<i style="color:red;">'. $errors->login->first('password').'</i>'; ?><br>
 
<input type="image" name ="submit" src="http://findicons.com/files/icons/2017/free_button/40/login.png" />

 {{Form::close()}}
 
   
   {{HTML::link('forgotpass','Forgot password ?') }}
	
	
	<h2><img src= "https://media.licdn.com/mpr/mpr/shrink_200_200/AAEAAQAAAAAAAAVpAAAAJDI0OTM5NDk0LWIxYzQtNDcyOC1iNTRlLTk2NzIwZTJkNWQzNQ.png" > </h2>
	

<p1 >

<h3> <font size="10"> Create new Account</font> </h3>

{{ Form::open( array('url' => 'signup') ) }}   

{{ Form::label('fname','First Name')}}
 {{ Form:: text('fname')}}    <br>
 
 
<?php echo '<i style="color:red;">'. $errors->signup->first('fname').'</i>'; ?><br>
 
 {{ Form::label('lname','last Name')}}
 {{ Form:: text('lname')}}   <br>
 <?php echo '<i style="color:red;">'. $errors->signup->first('lname').'</i>'; ?><br>
 
 {{ Form::label('email','email id')}}
 {{ Form:: text('email')}}   <br>
<?php echo '<i style="color:red;">'. $errors->signup->first('email').'</i>'; ?><br>
 
 {{ Form::label('username','username')}}
 {{ Form:: text('username')}}   <br>
 <?php echo '<i style="color:red;">'. $errors->signup->first('username').'</i>'; ?><br>
 
 {{ Form::label('password','Password')}}
{{ Form:: password('password')}}  <br>
<?php echo '<i style="color:red;">'. $errors->signup->first('password').'</i>'; ?><br>
 
 {{Form::submit('Signup')}}

	{{Form::close()}}
	
	</p1>
	
	
	


	
	
	
	
	
	<p><font size="5" ><marquee>Thank you for visiting</marquee> </font></p>

	

</body>


</html>