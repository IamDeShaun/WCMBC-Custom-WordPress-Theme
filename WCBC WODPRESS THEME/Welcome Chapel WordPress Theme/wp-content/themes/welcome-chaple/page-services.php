<?php

 /**
 	Template Name: Services Page
 */
 
 $service_image_a = get_field('service_image_a');
 $service_content_a = get_field('service_content_a');
 $service_image_b = get_field('service_image_b');
 $service_content_b = get_field('service_content_b');
 $service_image_c = get_field('service_image_c');
 $service_content_c = get_field('service_content_c');
 
get_header(); ?>

   <!-- HERO
    ================================================== -->
    <section id="hero" data-type="background" data-speed="5">
    	<article>
    		<div class="container clearfix">
    			<div class="row">
		    		<div class="col-sm-12 hero-text">
			             <h1 class="page-title"> Services</h1>
		    		</div><!-- col -->
		    		
    			</div><!-- row -->
    		</div><!-- container -->
    	</article>
    </section>
	
	
	<!-- OPT IN SECTION
	================================================== -->
    <section id="optin">
		<div class="container">
			<div class="row">
			
				<div class="col-sm-10">
					<p class="lead"><strong>Stay current with our latest events.</strong> We would love to fellowship with you!</p>
				</div><!-- end col -->
				
				<div class="col-sm-2">
					<a href="calendar.html" class="btn btn-success">
						Learn More
					</a>
				</div><!-- end col -->
				
			</div><!-- row -->
		</div><!-- container -->
    </section><!-- optin -->
    
    
	<br />
	<!-- Services
	================================================== -->
	<section id="welcomechaple">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<img src="<?php echo $service_image_a['url']; ?>" alt="Visit" class="featurette-image img-responsive center-block">
					<?php echo $service_content_a; ?>
				</div><!-- col -->
				<div class="col-sm-4">
					<img src="<?php echo $service_image_b['url']; ?>" alt="Service" class="featurette-image img-responsive center-block">
					<?php echo $service_content_b; ?>
				</div><!-- col -->
				<div class="col-sm-4">
					<img src="<?php echo $service_image_c['url']; ?>" alt="Mission" class="featurette-image img-responsive center-block">
					<?php echo $service_content_c; ?>
				</div><!-- col -->
				
			</div><!-- row -->
			
		</div><!-- container -->
	</section><!-- Services -->
	
	
<?php get_footer(); ?>
