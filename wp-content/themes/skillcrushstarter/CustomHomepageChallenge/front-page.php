<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<div class="social-btns">  <!-- populate or remove as many of these as you want -->
					<a href="https://twitter.com/gerilynmhayes" class="soc-icon tw"><span class="screen-reader-text"></span>Twitter</a>
					<a href="https://www.facebook.com/thecodingcopywriter" class="soc-icon fb"><span class="screen-reader-text">Facebook</span></a>
					<a href="https://www.linkedin.com/in/gerilynmhayes/" class="soc-icon ln"><span class="screen-reader-text"><LinkedIn</span></a>
					<a href="https://dribbble.com/" class="soc-icon db"><span class="screen-reader-text">Dribble</span></a>
					<a href="https://github.com/gerilynmhayes" class="soc-icon gh"><span class="screen-reader-text">GitHub</span></a>
					<a href="https://www.instagram.com/gerilynhayes/" class="soc-icon in"><span class="screen-reader-text">Instagram</span></a>
				</div>
				<a href="<?php echo site_url('/blog/'); ?>" class="btn">View My Blog</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
