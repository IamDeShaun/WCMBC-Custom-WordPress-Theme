<?php

 $fellowship_invite_text = get_field('fellowship_invite_text');
 $visit_wc_button_text = get_field('visit_wc_button_text');
 $visit_wc_button_url = get_field('visit_wc_button_url');
?>

	<!-- OPT IN SECTION
	================================================== -->
    <section id="optin">
		<div class="container">
			<div class="row">
			
				<div class="col-sm-10">
					<p class="lead"><?php echo $fellowship_invite_text; ?></p>
				</div><!-- end col -->
				
				<div class="col-sm-2">
					<a href="<?php echo $visit_wc_button_url; ?>" class="btn btn-success" target="_blank">
						<?php echo $visit_wc_button_text; ?>
					</a>
				</div><!-- end col -->
				
			</div><!-- row -->
		</div><!-- container -->
    </section><!-- optin -->
    
    
	