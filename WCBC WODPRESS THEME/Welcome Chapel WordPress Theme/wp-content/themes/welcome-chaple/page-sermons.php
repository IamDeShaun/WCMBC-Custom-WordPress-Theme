<?php

 /**
 	Template Name: Sermons Page
 */
 
 
get_header(); 


?>

   <!-- HERO
    ================================================== -->
    <section id="hero" data-type="background" data-speed="5">
    	<article>
    		<div class="container clearfix">
    			<div class="row">
		    		<div class="col-sm-12 hero-text">
			             <h1 class="page-title"> Sermons</h1>
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
	<!-- Video
	================================================== -->
	<section id="audio">
		<div class="container">
			<div class="row">
                <div class="col-sm-4">
				<?php get_template_part('content','latestsermon'); ?>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- Video -->
	
    
	
<?php get_footer(); ?>
