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


 <h1><?php echo '<i style="color:red;"> Change Your Password </i>'; ?><br></h1>
</head>


<body background ="http://wallpaperlayer.com/img/2015/7/outer-space-wallpaper-5232-5477-hd-wallpapers.jpg">
<br><br>




{{Form::open(array('url' => 'changepass') ) }}
			   
                  {{ Form :: label('password','Type New Password')}}	
				   {{Form:: password('password')}}			   <br>
				    <?php echo '<i style="color:red;">'. $errors->first('password').'</i>'; ?><br><br>
					   {{Form :: label('pass','Confirm New Password')}}
					   
					   {{Form::password('pass')}} <br>
					    <?php echo '<i style="color:red;">'. $errors->first('pass').'</i>'; ?><br><br>
					   
					   {{Form::submit ('Submit')}}
					   
					   {{Form::close()}}

</body>


</html>






























			 