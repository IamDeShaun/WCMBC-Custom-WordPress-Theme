<?php

 /**
 	Template Name: WhoWeAre Page
 */
 
 $about_headline = get_field('about_headline');
 $about_description = get_field('about_description');
 $about_image = get_field('about_image');
get_header(); ?>

   <!-- HERO
    ================================================== -->
    <section id="hero" data-type="background" data-speed="5">
    	<article>
    		<div class="container clearfix">
    			<div class="row">
		    		<div class="col-sm-12 hero-text">
			             <h1 class="page-title">Who We Are</h1>
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
          <h2 class="featurette-heading"><?php echo $about_headline; ?></h2>
          <p class="lead"><?php echo $about_description; ?></p>
        </div>
        <div class="col-sm-5">
          <img class="featurette-image img-responsive center-block" src="<?php echo $about_image ['url'] ?>" alt="Generic placeholder image">
        </div>
      </div>

			
		</div><!-- container -->
	</section><!-- project-features -->
	
<?php get_footer(); ?>
