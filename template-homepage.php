<?php
/**
 * Template Name: Homepage
 *
 */

get_header(); ?>


	<div class="intro-block pos-f full-height slide-up">
		<div class="content-wrapper">
			<p class="quote"><?php the_field('quote'); ?></p>
			<p class="author"><?php the_field('author'); ?></p>
			<a class="nv-btn js-btn" data-action="slide-up">Show projects</a>
		</div>

		<div class="arrow-container bouncing">
			<span class="nv-arrow js-btn" data-action="slide-up"></span>
		</div>
	</div>

	<div class="porfolio-block">
		<ul class="slick-slider">
			<?php
			if( have_rows('porfolio') ):
				while ( have_rows('porfolio') ) : the_row(); ?>
					<li class="project">
						<a href="<?php the_sub_field('url');?>">
							<div class="featured-img" style="background-image: url(<?php the_sub_field('featured_image');?>);"></div>
							<div class="project-info">
								<h6><?php the_sub_field('heading');?></h6>
								<p><?php the_sub_field('description');?></p>
							</div>
						</a>
					</li>
				<?php
				endwhile;
			endif;
			?>
		</ul>
	</div>

<?php get_footer(); ?>
