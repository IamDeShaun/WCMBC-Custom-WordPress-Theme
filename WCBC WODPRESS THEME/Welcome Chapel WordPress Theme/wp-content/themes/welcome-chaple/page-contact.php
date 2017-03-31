<?php

 /**
 	Template Name: Contact Page
 */
 
 
get_header(); ?>

   <!-- HERO
    ================================================== -->
    <section id="hero" data-type="background" data-speed="5">
    	<article>
    		<div class="container clearfix">
    			<div class="row">
		    		<div class="col-sm-12 hero-text">
			             <h1 class="page-title"> Contact</h1>
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
       
	 <!-- MAIN CONTENT
	================================================== -->
    <div class="container">
	    <div class="row" id="primary">
	    
		    <div id="content" class="col-sm-12">
			    
			    <section class="main-content">
			    	<p class="lead">For all prayer request and inquires please fill out the form! I&rsquo;ll do my best to get back to you ASAP.</p>
			    	
			    	<form role="form" class="clearfix">
	    				<div class="row">
	    					<div class="col-sm-6">
	    						<div class="form-group">
		    						<label class="sr-only" for="contact-name">Name</label>
									<input type="text" class="form-control input-lg" id="contact-name" placeholder="Your name">
	    						</div>
	    					</div><!-- end col -->
	    					
	    					<div class="col-sm-6">
	    						<div class="form-group">
		    						<label class="sr-only" for="contact-email">Email</label>
									<input type="text" class="form-control input-lg" id="contact-email" placeholder="Your email">
	    						</div>
	    					</div><!-- end col -->
	    					
	    					<div class="col-sm-12">
	    						<div class="form-group">
		    						<label class="sr-only" for="contact-words">Message</label>
		    						<textarea class="form-conrol input-lg" id="contact-words" placeholder="Your message" rows="3"></textarea>
	    						</div>
	    					</div><!-- end col -->
	    				</div><!-- row -->
						<input type="submit" class="btn btn-info btn-lg pull-right" value="Get in touch &raquo;">
			        </form>
			    	
			    </section>
		    	
		    </div><!-- content -->
		    	    
	    </div><!-- primary -->
    </div><!-- container -->
    
    
	<!-- Bible Quotes
	================================================== -->
	<section id="bible-quotes">
		<div class="container">
		
			<div class="section-header">
				<h2>Bible Quotes</h2>
                <p class="bible-script">"For God so loved the world that he gave his one and only Son, <br>that whoever believes in him shall not perish but have eternal life.<br> -John 3:16"
</p>
			</div><!-- section-header -->
			
		</div><!-- container -->
	</section><!-- course-features -->
    
<?php get_template_part('content','latestsermon'); ?>
<?php get_footer(); ?>
