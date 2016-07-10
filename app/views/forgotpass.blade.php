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


 <h1><?php echo '<i style="color:red;"> Forgot Password ? </i>'; ?><br></h1>
</head>


<body background ="http://wallpaperlayer.com/img/2015/7/outer-space-wallpaper-5232-5477-hd-wallpapers.jpg">
<br><br>

<p align="center"> Enter following details : </p>

{{ Form::open( array('url' => 'fpass') ) }}


{{ Form::label('username','Enter Username')}}
 {{ Form:: text('username')}} <br>   <br>

{{ Form::label('email','Enter email')}}
 {{ Form:: text('email')}} <br> <br>
 

 {{Form::submit('Submit')}}

 {{Form::close()}}
	

</body>


</html>