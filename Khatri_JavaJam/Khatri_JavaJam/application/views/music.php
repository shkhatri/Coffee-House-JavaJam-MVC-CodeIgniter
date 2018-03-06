<!DOCTYPE html>
<html>
<link rel ="stylesheet" href="<?php echo base_url(); ?>assets/css/javajam.css"/>
<div id = "wrapper">
<div id = "sidebar">
<img src="<?php echo base_url(); ?>assets/imgs/javajamlogo.jpg" alt="logo" tittle = "logo" width = "100%"/>
<div id="nav">
<table>
<tr><td><Strong><?php echo anchor('home','Home'); ?></Strong></td></tr>
<tr><td><Strong><?php echo anchor('home/menu','Menu'); ?></Strong></td></tr>
<tr><td><Strong><?php echo anchor('home/music','Music'); ?></Strong></td></tr>
<tr><td><Strong><?php echo anchor('home/Jobs','Jobs'); ?></Strong></td></tr>
</table>
</div>
</div>

<div id = "main">
<head>
<h1>&nbsp JavaJam Coffee House</h1>
</head>	
<body>
<img src="<?php echo base_url(); ?>assets/imgs/guitar.jpg" alt="guitar" tittle = "guitar" width = "100%" height = "30%"/>
<h2>&nbsp &nbsp &nbsp &nbsp Music at JavaJam</h2>
<p>The first Friday night each month at JavaJam is a special night. Join us from 8 pm to 11 pm for some music you wont't want to miss!</p>
<div id = "music">

<h3>&nbsp &nbsp &nbsp JANUARY</h3>
<?php
foreach ($jan_artist as $object){
	echo"<p><a href='artistdetails.html?a_name=$object->name'>". $object->name ." </a> will entertain us with ". $object->genre." Genre</p>" ;
}
?>
<h3>&nbsp &nbsp &nbsp FEBRUARY</h3>
<?php
foreach ($feb_artist as $object){
	echo"<p><a href='artistdetails.html?a_name=$object->name'>". $object->name ." </a> will entertain us with ". $object->genre." Genre</p>" ;
}
?>


</div>
</div>

<footer>
  <p>Copyright © 2016 JavaJam Coffee House</br><a href="mailto:shweta@khatri.com">shweta@khatri.com</a></p>
</footer>
</div>
</body>
</html>