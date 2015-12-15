<?php
/**
 * Template Name: Homepage
 *
 */

get_header(); ?>
<div class="animsition" >
	<nav>
		<div class="container">
			<h1 class="nav-title">Harvey</h1>
			
			<div class="menu hamburger-button js-btn" data-action="slide-down">
				<span class="menu-global menu-top"></span>
				<span class="menu-global menu-middle"></span>
				<span class="menu-global menu-bottom"></span>
			</div>
		</div>
	</nav>

	<div class="nav-block pos-f full-height bottom-up">
		<?php if ( has_nav_menu( 'header_menu' ) ) : ?>
				<?php
				// Primary navigation menu.
				wp_nav_menu( array(
						'menu_class'     => 'header-menu pos-a',
						'theme_location' => 'header_menu',
				) );
				?>
		<?php endif; ?>
		<div class="social-menu">
			<ul>
				<a href="<?php the_field('twitter', 'option'); ?>"><li class="fa fa-twitter"></li></a>
				<a href="<?php the_field('linkedin', 'option'); ?>"><li class="fa fa-linkedin"></li></a>
				<a href="<?php the_field('github', 'option'); ?>"><li class="fa fa-github-alt"></li></a>
				<a href="mailto:<?php the_field('mail', 'option'); ?>"><li class="fa fa-envelope"></li></a>
			</ul>
		</div>
	</div>

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

	<div class="porfolio-block full-height pos-f">
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

</div>
<?php get_footer(); ?>
