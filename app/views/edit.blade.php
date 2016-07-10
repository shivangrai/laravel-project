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


 <h1><?php echo '<i style="color:red;"> EDIT YOUR PROFILE :STEP 2 </i>'; ?><br></h1>
</head>


<body background ="http://wallpaperlayer.com/img/2015/7/outer-space-wallpaper-5232-5477-hd-wallpapers.jpg">



{{Form::open(array('url' => 'edit3') )}}

{{Form::label('email','Change email')}}
{{Form::text('email')}} <br>
<?php echo '<i style="color:red;">'. $errors->first('email').'</i>'; ?><br><br>
 

{{Form::label('username','Change username')}}
{{Form::text('username')}} <br> 
<?php echo '<i style="color:red;">'. $errors->first('username').'</i>'; ?><br>
<br> 

{{Form::label('password','Change password')}}
{{Form::password('password')}} <br> <br> 
<?php echo '<i style="color:red;">'. $errors->first('password').'</i>'; ?><br><br>



{{Form::submit('continue')}}
	{{Form::close()}}
</body>


</html>