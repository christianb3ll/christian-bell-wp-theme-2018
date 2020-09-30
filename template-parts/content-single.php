<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Christian_Bell
 */

?>

				<div id="banner-post-title" class="fullheight vcenterbox align-center">
					<div class ="splash-title">
						<?php the_title( '<h1 class="banner-title">', '</h1>' ); ?>
					</div>


					<a class="read-more-book arrow-container animated fadeInDown" href="#main">
	  					<div class="arrow-2">
	    					<?php if ( in_category( 'film') ) : ?>
	  							<i class="fa fa-film"></i>
	  						<?php elseif ( in_category( 'writing') ) : ?>
	  							<i class="fa fa-pen-nib"></i>
	  						<?php elseif ( in_category( 'design') ) : ?>
	  							<i class="fa fa-drafting-compass"></i>
	  						<?php elseif ( in_category( 'web') ) : ?>
	  							<i class="fa fa-code"></i>
	  						<?php else : ?>
	    						<i class="fa fa-book-open"></i>
	    					<?php endif; ?>
	  					</div>
	  					<div class="arrow-1 animated hinge infinite zoomIn"></div>
					</a>

				</div><!-- banner-post-title -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if (has_post_thumbnail() ) { ?>
		<div class="post-image">
			<?php the_post_thumbnail(); ?>
		</div><!-- post-image -->
	<?php } ?>

	<header class="entry-header">
		<div class="entry-meta">
				<i class="fas fa-calendar-alt"></i><time><?php the_time('F j, Y'); ?></time><i class="fas fa-folder-open"></i><?php the_category( ', '); ?>
			</div><!-- .entry-meta -->
		<?php
			the_title( '<h2 class="entry-title">', '</h2>' );

		if ( 'post' === get_post_type() ) :
			?>
			
		<?php endif; ?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'christian-bell' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

