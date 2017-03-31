<?php

 /**
 	Template Name: Audio Page
 */
 
get_header(); 

$speech_content = get_field('speech_content');

?>

   <!-- HERO
    ================================================== -->
    <section id="hero" data-type="background" data-speed="5">
    	<article>
    		<div class="container clearfix">
    			<div class="row">
		    		<div class="col-sm-12 hero-text">
			             <h1 class="page-title"> Audio</h1>
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
	<!-- Audio
	================================================== -->
	<section id="audio">
		<div class="container">
        
        <?php while ( have_posts() ): the_post(); ?>
                     
                     	<?php the_content(); ?>
                     
                   <?php endwhile; //end of the loop ?>
                    
        <?php $loop = new WP_Query( array( 'post_type' => 'speech','orderby' => 'post_id', 'order' => 'ASC' )) ?>
       <h2>Audio</h2>
			<hr>
			<div class="row">
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
            		
               <?php 
               $speech_content = get_field('speech_content');
			    ?>
            
            <div class="col-sm-4">
					<?php echo $speech_content; ?>
				</div><!-- col -->
            <?php endwhile; ?>
            </div>
		</div><!-- container -->
	</section><!-- Audio -->
    
	
<?php get_footer(); ?>
