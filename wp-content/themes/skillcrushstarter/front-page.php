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
					<a href="" class="soc-icon tw"><span class="screen-reader-text"><a href="https://twitter.com/gerilynmhayes" target="_blank">Twitter</span></a>
					<a href="" class="soc-icon fb"><span class="screen-reader-text"><a href="https://www.facebook.com/thecodingcopywriter" target="_blank">Facebook</span></a>
					<a href="" class="soc-icon ln"><span class="screen-reader-text"><a href="https://www.linkedin.com/in/gerilynmhayes/" target="_blank">LinkedIn</span></a>
					<a href="" class="soc-icon db"><span class="screen-reader-text"><a href="https://dribbble.com/" target="_blank">Dribble</span></a>
					<a href="" class="soc-icon gh"><span class="screen-reader-text"><a href="https://github.com/gerilynmhayes" target="_blank">GitHub</span></a>
					<a href="" class="soc-icon in"><span class="screen-reader-text"><a href="https://www.instagram.com/gerilynhayes/" target="_blank">Instagram</span></a>
				</div>
				<a href="<?php echo site_url('/blog/'); ?>" class="btn">View My Blog</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
