<?php

 $church_timing_heading = get_field('church_timing_heading');
 $church_timing_info = get_field('church_timing_info');
 
 $about_us_header = get_field('about_us_header');
 $about_description = get_field('about_description');
 
 $location_header = get_field('location_header');
 $location_description = get_field('location_description');
 
?>

	<!-- Sub Footer SECTION
	================================================== -->
	<section id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<h3><?php echo  $church_timing_heading; ?></h3>
					<?php echo $church_timing_info; ?>
				</div><!-- col -->
				
				<div class="col-sm-4">
					<h3><?php echo  $about_us_header; ?></h3>
					<p><?php echo $about_description; ?> <a href="#" class="btn btn-success">Read More.....</a></p></div><!-- col -->
                    
                    <div class="col-sm-4">
					<h3><?php echo $location_header; ?></h3>
		<?php echo $location_description ;?></div><!-- col -->
				
			</div><!-- row -->
			
		</div><!-- container -->
	</section><!-- subfooter -->

