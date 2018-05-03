<?php get_header(); ?>

<?php if ( have_posts() ) { while ( have_posts() ) {  the_post();  ?>

		<section>
			<h1><?php echo get_the_title(); ?></h1>
			<div>
				<?php the_content(); ?>
				
				<div class="grid">
					<?php get_template_part('grid_item'); ?>
					<?php get_template_part('grid_item'); ?>
					<?php get_template_part('grid_item'); ?>
					<?php get_template_part('grid_item'); ?>
					<?php get_template_part('grid_item'); ?>
					<?php get_template_part('grid_item'); ?>
					<?php get_template_part('grid_item'); ?>
					<?php get_template_part('grid_item'); ?>
				</div>
				
			</div>
		</section>
<?php } } ?>

<script>
	$(document).ready(function(){
		$('.grid').masonry({
		  // options
		  itemSelector: '.grid-item',
		  columnWidth: '.grid-item',
		  percentPosition: true
		});
	});
</script>

<?php get_footer(); ?>