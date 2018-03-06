<html>
<link rel ="stylesheet" href="<?php echo base_url(); ?>assets/css/javajam.css"/>
<div id = "wrapper">
<div id = "sidebar">
<img src="<?php echo base_url(); ?>assets/imgs/javajamlogo.jpg" alt="heroroad" tittle = "heroroad" width = "100%"/>
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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/javascript.js"></script>
</head>	
<body>
<h2>&nbsp &nbsp &nbsp &nbsp &nbsp Jobs at JavaJam</h2>
<p>Want to work at JavaJam? Fill out the form below to start your application. Required fields are marked with an asterisk (*)</p>

<form name="myform" action="index.html" onsubmit="return validateForm()" method="post">
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp*Name: <input type="text" name="name" ><br><br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp *E-mail: <input type="text" name="email" ><br>
<p class="formfield">*Experience: <textarea name="exp" rows="2" cols="30"></textarea></p>
&nbsp &nbsp &nbsp <input type="submit" value="Apply Now">
</form>

</div>
<footer>
  <p>Copyright &copy 2016 JavaJam Coffee House</br><a href="mailto:shweta@khatri.com">shweta@khatri.com</a></p>
</footer>
</div>
</body>
</html>