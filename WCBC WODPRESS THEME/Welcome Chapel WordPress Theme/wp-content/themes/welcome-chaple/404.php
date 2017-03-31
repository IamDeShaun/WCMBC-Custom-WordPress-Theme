<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Welcome_Chaple
 */

get_header(); ?>

	<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
		<h1 class="page-title">Bummer! That page can't be found!</h1>
	</section>

	<div class="container">
    
    		<div id="primary" class="row">
            
            	<main id="content" class="col-sm-8">
                
                	<div class="error-404 not-found">
                    
                    	<div class="page-content">
                        
                        	<h2>Don't fret! Let's get you back on track.</h2>
            <!-- CATEGORIES
            ====================================== --->
            <h3>Categories</h3>
            <p>...or maybe a popular category?</p>
            
            <?php $loop = new WP_Query( array( 'post_type' => 'resource', 'orderby', 'order'=>'ASC' ) ); ?>
            <div class="widget widget_categories">
            
            	<h4 class="widget-title">Most Used Categories</h4>
                <ul>
                	<?php
						wp-list_categories( array (
						
						'orderby'  => 'count',
						'order'  => 'DESC',
						'show_count'  => '1',
						'title_li'  =>'',
						'number'  =>'10',
					
						) );
					?>
                </ul>
                
            </div><!--widget-->
            
            
            
                      </div> <!--.page-content-->
                    
                  </div><!--.error-404-->
                
               </main> <!--#content-->
               
               <!-- SIDEBAR
               ======================================= --->
               <aside class="col-sm-4">
               	<?php get_sidebar(); ?>
               </aside>
                 
            </div> <!--#primary-->
            
    </div> <!--.container-->

<?php get_footer(); ?>
