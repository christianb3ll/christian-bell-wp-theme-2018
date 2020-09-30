<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Christian_Bell
 */

?>

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
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		
		if ( 'post' === get_post_type() ) :
			?>

		<?php endif; ?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php
		the_excerpt();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'christian-bell' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
<hr>

