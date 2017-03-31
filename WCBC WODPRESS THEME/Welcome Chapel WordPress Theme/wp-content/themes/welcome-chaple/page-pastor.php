<?php

 /**
 	Template Name: Pastor Page
 */
 
 $pastor_content = get_field('pastor_content');
 $pastor_image = get_field('pastor_image');
 
get_header(); ?>

   <!-- HERO
    ================================================== -->
    <section id="hero" data-type="background" data-speed="5">
    	<article>
    		<div class="container clearfix">
    			<div class="row">
		    		<div class="col-sm-12 hero-text">
			             <h1 class="page-title"> Pastor</h1>
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
    
    
	
	<!-- Welcome Chaple
	================================================== -->
	<section>
		<div class="container">
			 <div class="row featurette">
        <div class="col-sm-7">
          <?php echo $pastor_content; ?>
        </div>
        <div class="col-sm-5">
          <img class="featurette-image img-responsive center-block" src="<?php echo $pastor_image['url']; ?>" alt="Generic placeholder image">
        </div>
      </div>

			
		</div><!-- container -->
	</section><!-- project-features -->
	

	
<?php get_footer(); ?>
