<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>home</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<script type="text/javascript" src="http://localhost/wordpress/wp-content/themes/photopholio/js/jquery.js"></script>
<script type="text/javascript" src="http://localhost/wordpress/wp-content/themes/photopholio/js/easySlider1.5.js"></script>
<script type="text/javascript" charset="utf-8">
// <![CDATA[
$(document).ready(function(){	
	$("#slider").easySlider({
		controlsBefore:	'<p id="controls">',
		controlsAfter:	'</p>',
		auto: true, 
		continuous: true
	});	
});
// ]]>
</script>
<style type="text/css">
#slider { margin:0; padding:0; list-style:none; }
#slider ul,
#slider li { margin:0; padding:0; list-style:none; }
/* 
    define width and height of list item (slide)
    entire slider area will adjust according to the parameters provided here
*/
#slider li { width:906px; height:386px; overflow:hidden; }
p#controls { margin:0; position:relative; }
#prevBtn,
#nextBtn { display:block; margin:0; overflow:hidden; width:44px; height:44px; position:absolute; left:0; top:-250px; }
#nextBtn { left:862px; }
#prevBtn a { display:block; width:44px; height:44px; background:url(http://localhost/wordpress/wp-content/themes/photopholio/images/l_arrow.gif) no-repeat 0 0; }
#nextBtn a { display:block; width:44px; height:44px; background:url(http://localhost/wordpress/wp-content/themes/photopholio/images/r_arrow.gif) no-repeat 0 0; }
</style>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="block_header">
      <div class="logo"><a href="index.html"><img src="http://localhost/wordpress/wp-content/themes/photopholio/images/logo.gif" width="401" height="145" border="0" alt="logo" /></a></div>
      <div class="menu">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="services.html">About us</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>
      <div class="clr"> </div>
    </div>
  </div>
  <div class="slider">
    <div class="slice1">
      <div id="slider">
        <ul>
          <li>
            <div class="top" style="background:url(http://localhost/wordpress/wp-content/themes/photopholio/images/sliser_bg_img_1.jpg) top no-repeat;">
              <h2>Dummy text of the printing and typesetting industry.</h2>
              <p>Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer. <a href="#">Simply dummy text of the printing</a> and typesetting industry. Lorem Ipsum has been the industry's </p>
            </div>
            <div class="bot">
            <div class="lister">
                <p class="active">1</p>
                <p>2</p>
                <p>3</p>
              </div>
              <h2>Simply dummy text</h2>
              <p>Lorem Ipsum has been the industries standard dummy text ever since.</p>
            </div>
          </li>
          <li>
            <div class="top" style="background:url(http://localhost/wordpress/wp-content/themes/photopholio/images/sliser_bg_img_2.jpg) top no-repeat;">
              <h2>Dummy text of the printing and typesetting industry.</h2>
              <p>Lorem Ipsum has been the industries standard dummy text ever since the when an unknown printer. <a href="#">Simply dummy text of the printing</a> and typesetting industry. Lorem Ipsum has been the industry's </p>
            </div>
            <div class="bot">
            <div class="lister">
                <p>1</p>
                <p class="active">2</p>
                <p>3</p>
              </div>
              <h2>Simply dummy text</h2>
              <p>Lorem Ipsum has been the industry's standard dummy text ever since.</p>
            </div>
          </li>
          <li>
            <div class="top" style="background:url(http://localhost/wordpress/wp-content/themes/photopholio/images/sliser_bg_img_3.jpg) top no-repeat;">
              <h2>Dummy text of the printing and typesetting industry.</h2>
              <p>Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer. <a href="#">Simply dummy text of the printing</a> and typesetting industry. Lorem Ipsum has been the industry's </p>
            </div>
            <div class="bot">
            <div class="lister">
                <p>1</p>
                <p>2</p>
                <p class="active">3</p>
              </div>
              <h2>Simply dummy text</h2>
              <p>Lorem Ipsum has been the industry's standard dummy text ever since.</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>  