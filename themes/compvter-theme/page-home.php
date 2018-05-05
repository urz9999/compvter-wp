<?php get_header(); ?>

<?php if ( have_posts() ) { while ( have_posts() ) {  the_post();  ?>

		<section>
			<h1><?php echo get_the_title(); ?></h1>
			<div>
				<?php the_content(); ?>
				
				<div class="grid">
				
					<?php 
						for($i = 0; $i < 12; $i+=1) {
							$par = rand(2,6);
							$content = file_get_contents('http://loripsum.net/api/'.$par.'/short/headers');
							set_query_var( 'item_text', $content);
							get_template_part('grid_item'); 
						}
					?>
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
		Waves.attach('.btn');
		Waves.init();
	});
</script>

<?php get_footer(); ?>