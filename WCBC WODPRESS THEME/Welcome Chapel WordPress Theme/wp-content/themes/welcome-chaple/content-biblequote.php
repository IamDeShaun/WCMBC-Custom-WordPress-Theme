<?php

 $bible_quote_headline = get_field('bible_quote_headline');
 $bible_scripture = get_field('bible_scripture');

?>

	<!-- Bible Quote
	================================================== -->
	<section id="bible-quotes">
		<div class="container">
		
			<div class="section-header">
				<h2><?php echo $bible_quote_headline; ?></h2>
                <p class="bible-script"><?php echo $bible_scripture; ?>
</p>
			</div><!-- section-header -->
			
		</div><!-- container -->
	</section><!-- Bible Quote -->