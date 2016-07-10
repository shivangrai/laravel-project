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


 <h1><?php echo '<i style="color:red;"> Upload Your Profile Picture </i>'; ?><br></h1>
</head>


<body background ="http://wallpaperlayer.com/img/2015/7/outer-space-wallpaper-5232-5477-hd-wallpapers.jpg">


<form action = "<?= URL::to('upload2') ?>"  method="post" enctype="multipart/form-data">

File :  <input type = "file" name= "file"> 	
<input type = "submit" name= "save" value="upload"> <br> <br> <br>
<?php echo '<i style="color:red;">'. $errors->first('file').'</i>'; ?><br>

</form>


</body>


</html>