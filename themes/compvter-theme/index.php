<?php get_header(); ?>

<?php if ( have_posts() ) { while ( have_posts() ) {  the_post();  ?>

		<section>
			<h1><?php echo get_the_title(); ?></h1>
			<div>
				<?php the_content(); ?>
			</div>
		</section>
<?php } } ?>

<?php get_footer(); ?>