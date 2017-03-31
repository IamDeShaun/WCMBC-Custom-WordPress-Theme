<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Welcome_Chaple
 */


 $church_timing_heading = get_field('church_timing_heading');
 $church_timing_info = get_field('church_timing_info');
 
 $about_us_header = get_field('about_us_header');
 $about_description = get_field('about_description');
 
 $location_header = get_field('location_header');
 $location_description = get_field('location_description');
 
?>

<?php wp_footer(); ?>

<!-- SIGN UP SECTION
	================================================== -->
	<section id="signup">
		
	</section><!-- signup -->

<!-- Sub Footer SECTION
	================================================== -->
	<section id="sub-footer">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-4">
					<h3>Church Timing</h3>
					<p>Sunday Sunday School at 9:30 AM.</p>
 
<p>Sunday Morning Worship 11:00 AM.</p>

<p>Tuesday Prayer/Bible Study 7:00 PM.</p>

<p>If you cannot physically attend you can call the conference line:

Call 1-712-775-7031

Code 727453953#</p>

<p>Wednesday Noon Day Prayer at 12:00 p.m.

Any additional services will be announced on our notice board and on our website.</p>
				</div><!-- col -->
				<div class="col-sm-4">
					<h3>About Us</h3>
					<p> Welcome Chapel Missionary Baptist Church was established in 1957 at its current location of 124 Chestnut Street in the Capital Region. Since its inception God has blessed its membership and the Pastor. Since the passing of Rev. Robert Earl Graves, after 27 years of service, Welcome Chapel members and officers have been in prayer and meditation for God's direction. <a href="#" class="btn btn-success">Read More...</a></p></div><!-- col -->
				<div class="col-sm-4">
					<h3>Locate Us</h3>
					<p>124 Chestnut Street
Albany, New York 12210
welcomechapel124@gmail.com
<br />Church Tel:518-449-5609
<br />Pastor Tel:518-272-6463
</p></div><!-- col -->
				
			</div><!-- row -->
			
		</div><!-- container -->
	</section><!-- signup -->

<!-- FOOTER
	================================================== -->
	<footer>
		<div class="container">
			<div class="col-sm-3">
				<a href="/"><img src="http://localhost:8888/htdocs/wordpress-2/wp-content/uploads/2016/07/WC-WhiteLogo.png" alt="Welcome Chaple"></a>
			</div><!-- end col -->
			
			<div class="col-sm-9">
				<p>© 2016 Welcome Chapel Missionary Baptist Church Web Design By: <a href="http://www.deshaunjones.com" target="_blank">Mr. Jones</a></p>
			</div><!-- end col -->
		</div><!-- container -->
	</footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory');  ?>/assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php bloginfo('template_directory');  ?>/assets/js/bootstrap.min.js"></script>
    
    <script src="<?php bloginfo('template_directory');  ?>/assets/js/main.js"></script>
    <script src="<?php bloginfo('template_directory');  ?>/assets/js/jquery.waypoints.min.js"></script>
  


</body>
</html>
