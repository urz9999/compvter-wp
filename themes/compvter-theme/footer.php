			</div><!-- container -->
		
		<footer>
			<div class="oblique oblique-footer">
				<div class="sub-oblique container">
					<br>
					<h1 class="text-white"><?php echo get_the_title(); ?></h1>
				</div>
			</div>
		</footer>
		</div><!-- container-fluid -->

		<script>
			$(document).ready(function(){
				var grid = $('.grid');
						grid.on( 'layoutComplete', function() {
					$(".loader").remove();
					$('.grid').removeClass("invisible");
				}).masonry({
				  // options
				  itemSelector: '.grid-item',
				  columnWidth:  '.grid-item',
				  percentPosition: true,
				  isAnimated: true
				});
				
				Waves.attach('.menu-item a');
				Waves.attach('.btn');
				Waves.init();
			});
		</script>

	</body>
</html>