<?php


?>

	<!-- Latest Sermon
	================================================== -->
	<section id="latest-sermon">
		<div class="container">
        
        
		<?php while ( have_posts() ): the_post(); ?>
                     
                     	<?php the_content(); ?>
                     
                    <?php endwhile; //end of the loop ?>
                    
                     <?php $loop = new WP_Query( array( 'post_type' => 'sermon','orderby' => 'post_id', 'order' => 'ASC' )) ?>
			<h2>Latest Sermon</h2>
			<hr>
			<div class="row">
            
             <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                    
                    <?php 
						$sermon_image = get_field('sermon_image');
						$sermon_header = get_field('sermon_header');
						$sermon_button_text = get_field('sermon_button_text');
						$sermon_button_url = get_field('sermon_button_url');

				      ?>
                      
				<div class="col-sm-3">
					<img src="<?php echo $sermon_image ['url']; ?>" alt="Sermon">
					<h3><?php echo $sermon_header; ?></h3>
					<a href="<?php echo $sermon_button_url;  ?>" class="btn btn-success">
						<?php echo $sermon_button_text; ?>
					</a>
				</div><!-- col -->
                <?php endwhile; ?>
				
			</div><!-- row -->
			
		</div><!-- container -->
	</section><!-- Latest Sermon -->
	