<?php
/* Template Name: Homepage */

get_header();
?>

	<div id="primary" class="content-area">

			<?php get_template_part('template-parts/content', 'leftcolumn'); ?>

			<div class="col-right">

				<section id="hero" class="fullheight vcenterbox align-center">
					<div class ="splash-title">
						<h1 class="banner-title"><?php bloginfo('name'); ?></h1>

						<p class="lead-text"><?php bloginfo('description'); ?></p>
					</div>


					<a class="arrow-container animated fadeInDown" href="#about">
	  					<div class="arrow-2">
	    					<i class="fa fa-angle-down"></i>
	  					</div>
	  					<div class="arrow-1 animated hinge infinite zoomIn"></div>
					</a>

				</section><!-- hero -->

				<section id="about" class="fullheight vcenterbox align-center">
					<div class="container valign">
						<article>
							<h2 class="section-heading"><?php the_field('about_heading'); ?></h2>

							<?php
							while ( have_posts() ) :
								the_post();

								the_content();

								endwhile; // End of the loop.
							?>

							<a href="#contact"><?php the_field('contact_link'); ?></a>
						</article>

						<a href="#disciplines" class="next-arrow"><i class="fas fa-long-arrow-alt-down"></i></a>

					</div><!-- container -->
				</section>

			
			
			<!-- DISCIPLINES SECTION -->
				<section id="disciplines" class="fullheight vcenterbox align-center">
					<div class="container valign">
						<h2><?php the_field('skills_header'); ?></h2>
						<div class="item-block">
							<div class="item"><i class="fab fa-html5"></i><h4>HTML / CSS</h4></div>
							<div class="item"><i class="fab fa-js"></i><h4>Javascript</h4></div>
							<div class="item"><i class="fab fa-php"></i><h4>PHP</h4></div>
							<div class="item"><i class="fab fa-java"></i><h4>Java</h4></div>
							<div class="item"><i class="fab fa-wordpress"></i><h4>WordPress</h4></div>
							<div class="item"><i class="fab fa-python"></i><h4>Python</h4></div>
						</div><!-- item-block -->
						<a href="#clients" class="next-arrow white"><i class="fas fa-long-arrow-alt-down"></i></a>
					</div><!-- container -->
				</section>
			
			<!-- CLIENTS SECTION -->
				<section id="clients" class="fullheight vcenterbox align-center">
					<div class="container valign">
						<h2 class="section-heading"><?php the_field('worked_with'); ?></h2>
						<div class="item-block">
							<div class="item"><div class="client-logo-img"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/raindance-logo.png"></div><h4>Raindance</h4></div>
							<div class="item"><div class="client-logo-img"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/metropolis-logo.png"></div><h4>Metropolis</h4></div>
							<div class="item"><div class="client-logo-img"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/japan-partnership-logo.png"></div><h4>Japan Partnership</h4></div>
							<div class="item"><div class="client-logo-img"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/metro-homes-logo.png"></div><h4>Metro Homes</h4></div>
							<div class="item"><div class="client-logo-img"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ethical-hedonist-logo.png"></div><h4>Ethical Hedonist</h4></div>
							<div class="item"><div class="client-logo-img"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/elfs-logo.png"></div><h4>ELFS Japan</h4></div>
						</div><!-- item-block -->

						<a href="#contact" class="next-arrow"><i class="fas fa-long-arrow-alt-down"></i></a>
					</div><!-- container -->
				</section>

			<!-- CONTACT SECTION -->
				<section id="contact" class="fullheight vcenterbox align-center">
					<div class="container valign">
						
						<h2 class="section-heading"><?php the_field('contact_heading'); ?></h2>
						<p><?php the_field('contact_text'); ?></p>

						<div class="contact-form">

							<?php echo do_shortcode('[contact-form-7 id="236" title="Contact form 1"]'); ?>
						</div><!-- contact-form -->

					</div><!-- container -->
				</section>

			</div><!-- col-right -->



	</div><!-- #primary -->

<?php
get_footer();
