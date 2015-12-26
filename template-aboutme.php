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
				<p>Welcome to my personal website, where you can find my information exclusively here!</p>
				<p>Let me introduce about myself. My name is Vuong Nguyen, a software engineer in Hochiminh City, Vietnam. I believe that I would bring an extremely valuable skill set to this interesting code generation project, along with my results driven focus and exceptional communication skills. Well-prepared at RMIT University, I am confident that I will succeed in the profession I have chosen.</p>
				<p>In this website, you will find my Github Repo, my detailed project experiences, and my contact information. Should you need more information, please feel free to contact me at +84 907 822 788 or via email at me@ngvuong.com. I appreciate your time considering my credentials in this website.</p>
				<p>Best regards</p>
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