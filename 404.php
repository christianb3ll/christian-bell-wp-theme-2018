<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Christian_Bell
 */

get_header();
?>
<?php get_template_part('template-parts/content', 'leftcolumn'); ?>

	<div class="col-right">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">

				<div id="banner-post-title" class="fullheight vcenterbox align-center">
					<div class ="splash-title">
						<h1 class="banner-title">? 404 ?</h1>
					</div>


					<a class="read-more-book arrow-container animated fadeInDown" href="#main">
	  					<div class="arrow-2">
	    					<i class="fa fa-question"></i>
	  					</div>
	  					<div class="arrow-1 animated hinge infinite zoomIn"></div>
					</a>

				</div><!-- banner-post-title -->

			<section class="error-404 not-found">
				<header class="page-header">
					<h2 class="page-title"><?php esc_html_e( 'Oops!', 'christian-bell' ); ?></h2>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'There\'s nothing here... Did you take a wrong turn?', 'christian-bell' ); ?></p>

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h3 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'christian-bell' ); ?></h3>
						<ul>
							<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
					$christian_bell_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'christian-bell' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$christian_bell_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</div><!-- container -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- col-left -->

<?php
get_footer();
