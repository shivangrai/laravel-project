<!DOCTYPE html>
<html>


<head>





<style type= "text/css">

body{
	margin-top:200px;
	text-align :center;
	color:blue;
	
}





</style>


 <h1><?php echo '<i style="color:red;"> Welcome : Your Acccount created successfully !! </i>'; ?><br></h1>
</head>


<body background ="http://wallpaperlayer.com/img/2015/7/outer-space-wallpaper-5232-5477-hd-wallpapers.jpg">
<br><br>

<p align="center"> <font size="10"> Sign Into Your Account </font></p>

{{ Form::open( array('url' => 'login1') ) }}   

{{ Form::label('name','Username')}}
 {{ Form:: text('username')}} <br>
 <?php echo '<i style="color:red;">'. $errors->first('username').'</i>'; ?><br>
 
 
 {{ Form::label('password','Password')}}
{{ Form:: password('password')}} <br>
<?php echo '<i style="color:red;">'. $errors->first('password').'</i>'; ?><br>

<input type="image" name ="submit" src="http://findicons.com/files/icons/2017/free_button/40/login.png" />

 {{Form::close()}}
	

</body>


</html>