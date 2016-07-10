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


	{{ Form::open( array('url' => 'logout') ) }}


	<p align="right" > {{Form :: submit('logout')}} </p>
	{{Form::close()}} </p>




<?php
$a = Session::get('username');  ?>


 <h1><?php echo '<i style="color:red;"> '.$a. ': Your  Profile Updated  Successfully </i>'; ?><br></h1>
</head>


<body background ="http://wallpaperlayer.com/img/2015/7/outer-space-wallpaper-5232-5477-hd-wallpapers.jpg">



{{ Form::open( array('url' => 'viewpro') ) }}   

{{Form::submit('view profile')}}
	{{Form::close()}}
</body>


</html>