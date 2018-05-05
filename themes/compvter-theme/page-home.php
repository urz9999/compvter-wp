<?php get_header(); ?>
<?php if ( have_posts() ) { while ( have_posts() ) {  the_post();  ?>
		<section>
			<div>
				<div class="loader">
					<svg class="circular" viewBox="25 25 50 50">
					  <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
					</svg>
				</div>
				
				<div class="grid invisible">
				
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

<?php get_footer(); ?>