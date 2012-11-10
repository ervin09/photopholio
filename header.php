<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>home</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/easySlider1.5.js"></script>
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
#prevBtn a { display:block; width:44px; height:44px; background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/l_arrow.gif) no-repeat 0 0; }
#nextBtn a { display:block; width:44px; height:44px; background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/r_arrow.gif) no-repeat 0 0; }
</style>
</head>
<body>
<div class="main">

  <div class="header">
    <div class="block_header">
      <div class="logo"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.gif" width="401" height="145" border="0" alt="logo" /></a></div>
      <div class="menu">
       <?php wp_nav_menu( array( 'container' => '', ) ); ?>
        </ul>
      </div>
      <div class="clr"> </div>
    </div>
  </div>

	<?php get_template_part('part', 'slider');?>

