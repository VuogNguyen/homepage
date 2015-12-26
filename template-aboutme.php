<?php
/**
 * Template Name: About Me
 *
 */

get_header(); ?>

<section class="aboutme-block container-block">
	<div class="title-page">
		<h3>Introduction</h3>
		<p>A Close Friend, A Software Engineer and A Travel Fan</p>
	</div>

	<div class="quote-block">
		<div class="about-intro-text">
			<div class="title">
				<h5>Hello everyone!</h5>
			</div>

			<div class="content">
				<p class="avatar" style="background-image: url('<?php the_field('avatar_image', 'option'); ?>')"></p>
				<?php the_field('content'); ?>
			</div>
		</div>
	</div>

	<div class="title-page">
		<h3>My Contact</h3>
		<p>Get In Touch</p>
	</div>

	<div class="contact-block">
		<?php echo do_shortcode( '[contact-form-7 id="96" title="Contact Form"]' ); ?>	
	</div>
</section>

<?php get_footer(); ?>