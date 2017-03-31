<?php

 $visting_wc_header = get_field('visting_wc_header');
 $wc_thank_you_text = get_field('wc_thank_you_text');
?>

	<!-- Welcome
	================================================== -->
	<section>
		<div class="container">
			
			<div class="section-header">
				<h2><?php echo $visting_wc_header; ?></h2>
			</div><!-- section-header -->
			
			<p class="section-header"><?php echo $wc_thank_you_text; ?></p>
		
		</div><!-- container -->
	</section><!-- welcome -->
    
	