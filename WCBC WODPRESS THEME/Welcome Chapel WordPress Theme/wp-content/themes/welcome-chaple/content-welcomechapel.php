<?php

 $visit_us_url = get_field('visit_us_url');
 $visit_us_icon = get_field('visit_us_icon');
 $visit_us_header = get_field('visit_us_header');
 $visit_us_description = get_field('visit_us_description');
 $visit_us_button_text = get_field('visit_us_button_text');
 $visit_us_button_url = get_field('visit_us_button_url');
 $service_icon = get_field('service_icon');
 $service_icon_url = get_field('service_icon_url');
 $service_header = get_field('service_header');
 $services_description = get_field('services_description');
 $services_button_text = get_field('services_button_text');
 $services_button_url = get_field('services_button_url');
 $mission_icon_url = get_field('mission_icon_url');
 $mission_icon = get_field('mission_icon');
 $mission_icon_header = get_field('mission_icon_header');
 $mission_icon_discription = get_field('mission_icon_discription');
 $mission_button_text = get_field('mission_button_text');
 $mission_button_text_url = get_field('mission_button_text_url');
?>

	<!-- Welcome Chaple
	================================================== -->
	<section id="welcomechaple">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<a href="<?php echo $visit_us_url; ?>"><?php echo $visit_us_icon; ?></a>
					<h3><?php echo $visit_us_header; ?></h3>
					<p><?php echo $visit_us_description; ?></p> <a href="<?php echo $visit_us_button_url; ?>" class="btn btn-success" target="_blank"><?php echo $visit_us_button_text; ?></a>
				</div><!-- col -->
				<div class="col-sm-4">
					<a href="<?php echo $service_icon_url; ?>"><?php echo $service_icon; ?></a>
					<h3><?php echo $service_header; ?></h3>
					<p><?php echo $services_description; ?></p> <a href="<?php echo $services_button_url; ?>" class="btn btn-success" target="_blank"><?php echo $services_button_text; ?></a>
				</div><!-- col -->
				<div class="col-sm-4">
					<a href="<?php echo $mission_icon_url; ?>"><i class="fa fa-4x fa-file-word-o" aria-hidden="true"></i></a>
					<h3><?php echo $mission_icon_header; ?></h3>
					<p><?php echo $mission_icon_discription; ?></p> <a href="<?php echo $mission_button_text_url; ?>" class="btn btn-success"><?php echo $mission_button_text; ?></a>
				</div><!-- col -->
				
			</div><!-- row -->
			
		</div><!-- container -->
	</section><!-- project-features -->
	