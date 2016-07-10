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


 <h1><?php echo '<i style="color:red;"> EDIT YOUR PROFILE: STEP 1 </i>'; ?><br></h1>
</head>


<body background ="http://wallpaperlayer.com/img/2015/7/outer-space-wallpaper-5232-5477-hd-wallpapers.jpg">



{{ Form::open( array('url' => 'edit2') ) }}   
{{Form::label('password','Enter current password')}}
{{Form::password('password')}} <br> <br> <br>

{{Form::submit('continue')}}
	{{Form::close()}}
</body>


</html>