  <div class="slider">
    <div class="slice1">
      <div id="slider">
        <ul>

			<?php 
			$args = array( 
				'post_parent' => 2, 
				'post_type' => 'attachment',
				'mime_type' => 'image' 
			);			
			$images = get_children( $args );
			foreach( $images as $image_id => $image ) :
				
				$img = wp_get_attachment_image_src( $image_id, 'full' ); 
				$image_src = $img[0]; ?>
				
	
	         <li>
	            <div class="top" style="background:url(<?php echo $image_src; ?>) top no-repeat;">
	              <h2><?php echo $image->post_title; ?></h2>
	              <p><?php echo $image->post_excerpt; ?></p>
	            </div>
	            <div class="bot">
	            <div class="lister">
	                <p class="active">1</p>
	                <p>2</p>
	                <p>3</p>
	              </div>
	              <h2><?php echo $image->post_title; ?></h2>
	              <p><?php echo $image->post_content; ?></p>
	            </div>
	          </li>

			<?php endforeach;	?>

        </ul>
      </div>
    </div>
  </div>  