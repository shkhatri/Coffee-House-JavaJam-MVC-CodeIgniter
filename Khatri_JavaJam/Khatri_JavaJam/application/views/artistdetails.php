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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/music.js"></script>
</style>
</head>	
  <body onload="sendRequest()"; method="GET">
  <h2>&nbsp &nbsp &nbsp &nbsp Artist's Details</h2>
    <input type="hidden" id="form-input" value="<?php $name = $_GET['a_name']; echo"$name"?>"/></label>
	<table>
  <tr> 
  <td><b>Name:</b></td>  <td id="name" colspan="2"></td>
  </tr>
  <tr> 
  <td><b>Link:</b></td>  <td colspan="2"><a href="link" id ="link" ></a></td>
  </tr>
  <tr> 
  <td><b>Image:</b></td>  <td id="pic" colspan="2"></td>
  </tr>
  <tr > 
  <td><b>Summary:</b></td>  <td id="info" colspan="2"></td>
  </tr>

  <tr> 
  <td colspan="3"><b>Top 3 Albums:</b></td>
  </tr>
  <tr> 
  <td>1:</td>  <td id="album1"></td> <td id="pic1"></td>
  </tr>
  <tr> 
  <td>2:</td>  <td id="album2"></td>  <td id="pic2"></td>
  </tr>
  <tr> 
  <td>3:</td>  <td id="album3"></td>  <td id="pic3"></td>
  </tr>
  <tr> 
  <td colspan="3"><b>Similar Artists are:</b></td>  
  </tr>
  <tr> 
  <td colspan="3">
  <ol>
  <li id="simiArtist1"></li>
  <li id="simiArtist2"></li>
  <li id="simiArtist3"></li>
</ol>
  </table>
  </div>

<footer>
  <p>Copyright © 2016 JavaJam Coffee House</br><a href="mailto:shweta@khatri.com">shweta@khatri.com</a></p>
</footer>
</div>
</body>
</html>

