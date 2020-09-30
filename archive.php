<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Christian_Bell
 */

get_header();
?>

<?php get_template_part('template-parts/content', 'leftcolumn'); ?>

	<div class="col-right">

	<div id="primary" class="content-area">
		<main id="main" class="site-main fullheight">
			<div class="container">

		<?php if ( have_posts() ) : ?>

				<div id="banner-post-title" class="fullheight vcenterbox align-center">
					<div class ="splash-title">
						<?php
						single_cat_title( '<h1 class="banner-title">', '</h1>' );
						?>
					</div>

					<a class="read-more-book arrow-container animated fadeInDown" href="#main">
	  					<div class="arrow-2">
	  						<?php if ( is_category( 'film') ) : ?>
	  							<i class="fa fa-film"></i>
	  						<?php elseif ( is_category( 'writing') ) : ?>
	  							<i class="fa fa-pen-nib"></i>
	  						<?php elseif ( is_category( 'design') ) : ?>
	  							<i class="fa fa-drafting-compass"></i>
	  						<?php elseif ( is_category( 'web') ) : ?>
	  							<i class="fa fa-code"></i>
	  						<?php else : ?>
	    						<i class="fa fa-book-open"></i>
	    					<?php endif; ?>
	  					</div>
	  					<div class="arrow-1 animated hinge infinite zoomIn"></div>
					</a>

				</div><!-- banner-post-title -->

			<header class="page-header">
				
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
			</div><!-- container -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- col-right -->

<?php
get_footer();
