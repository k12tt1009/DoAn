<!-- banner -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		</ol>
		<div class="carousel-inner">
			<?php
			$sql_slider = mysqli_query($con, "SELECT * FROM tbl_slider WHERE slider_active = '1' ORDER BY slider_id");
			while ($row_slider = mysqli_fetch_array($sql_slider)){
			?>
			<div class="carousel-item item1 active">
				<div class="container">
					<div class="w3l-space-banner">
								
						</div>
					</div>
				</div>
			</div>
			<?php
			}
			?>

		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			
			<span class="sr-only">Next</span>
		</a>
</div>
<!-- //banner -->