<?php get_header(); ?>

<?php if ( have_posts() ) { while ( have_posts() ) {  the_post();  ?>
	<?php echo get_the_title(); ?>
	<?php the_content(); ?>
<?php } } ?>
<?php get_footer(); ?>