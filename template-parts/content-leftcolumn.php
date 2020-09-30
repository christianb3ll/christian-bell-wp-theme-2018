<?php
/**
 * Template part for the left featured image column
 *
 *
 * @package Christian_Bell
 */

?>

<div class="col-left fullheight" style="background-image: url('<?php if (is_front_page() ) :
	bloginfo('stylesheet_directory'); ?>/assets/img/christian-bell-overlay.gif'), url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/christian-bell.jpg<?php elseif (is_home() && !is_front_page()):
	bloginfo('stylesheet_directory'); ?>/assets/img/vhs-tape-overlay.gif'), url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/vhs-tape.jpg<?php elseif ( is_category( $category ='film') or in_category( $category ='film') ):
	bloginfo('stylesheet_directory'); ?>/assets/img/camera-overlay.gif'), url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/camera.jpg<?php elseif ( is_category( $category ='writing') or in_category( $category ='writing') ):
	bloginfo('stylesheet_directory'); ?>/assets/img/writing-overlay.gif'), url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/writing.jpg<?php elseif ( is_category( $category ='design') or in_category( $category ='design') ):
	bloginfo('stylesheet_directory'); ?>/assets/img/model-overlay.gif'), url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/model.jpg<?php elseif ( is_category( $category ='web') or in_category( $category ='web') ):
	bloginfo('stylesheet_directory'); ?>/assets/img/web-code-overlay.gif'), url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/web-code.jpg<?php elseif ( is_404() ):
	bloginfo('stylesheet_directory'); ?>/assets/img/construction-overlay.gif'), url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/construction.jpg<?php else :
	bloginfo('stylesheet_directory'); ?>/assets/img/christian-bell-overlay.gif'), url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/christian-bell.jpg<?php endif; ?>');" data-type="background" data-speed="2">
			
</div><!-- col-left -->

