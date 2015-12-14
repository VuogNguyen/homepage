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
				<a href=""><li class="fa fa-twitter"></li></a>
				<a href=""><li class="fa fa-linkedin"></li></a>
				<a href=""><li class="fa fa-github-alt"></li></a>
				<a href=""><li class="fa fa-skype"></li></a>
			</ul>
		</div>
	</div>

	<div class="intro-block pos-f full-height slide-up">
		<div class="content-wrapper">
			<p class="quote">It's not that I'm so smart, it's just that I stay with problems longer.</p>
			<p class="author">Albert Einstein</p>
			<a class="nv-btn js-btn" data-action="slide-up">Show projects</a>
		</div>

		<div class="arrow-container bouncing">
			<span class="nv-arrow js-btn" data-action="slide-up"></span>
		</div>
	</div>

	<div class="porfolio-block full-height pos-f">
		<ul class="slick-slider">
		<?php
			$i = 0;
			while ( $i < 8 ) {
		?>
			<li class="project">
				<a href="">
					<div class="featured-img"></div>
					<div class="project-info">
						<h6>TMA-1 X</h6>
						<p>branding</p>
					</div>
				</a>
			</li>
		<?php
			$i+=1;
		}
		?>
		</ul>
	</div>

</div>
<?php get_footer(); ?>
