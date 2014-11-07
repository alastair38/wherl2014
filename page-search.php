<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

<?php

$field = get_field_object('finding_type');

$args = array();
$args['wp_query'] = array('post_type' => array('finding'),
                          'posts_per_page' => 10
                          
                          );
$args['fields'][] = array(
                  'type' => 'meta_key',
                  'meta_key' => 'finding_type',
                  'format' => 'select',
                  'allow_null' => "FINDING TYPE",
                  'data_type' => 'CHAR',
                  'compare' => 'LIKE',
                  'values' => array( 'policy' => 'Policy Outputs', 'presentations' => 'Presentations', 'publications' => 'Publications'));
$args['fields'][] = array(
                  'type' => 'meta_key',
                  'meta_key' => 'findings_project',
                  'format' => 'select',
                  'allow_null' => "PROJECT",
                  'data_type' => 'CHAR',
                  'compare' => 'LIKE',
                  'values' => array( '186' => 'Allostatic Load Over Time and Paid Work', '187' => 'Modelling Life Histories', '188' => 'Modelling Retirement Income'));
$args['fields'][] = array(
                  'type' => 'meta_key',
                  'meta_key' => 'resource_author',
                  'format' => 'select',
                  'allow_null' => "AUTHOR",
                  'data_type' => 'CHAR',
                  'compare' => 'LIKE',
                  'values' => array( '103' => 'Dr Laurie Corna', '101' => 'Dr Giorgio Di Gessa', '188' => 'Modelling Retirement Income'));
$args['fields'][] = array('type' => 'search',
                          'placeholder' => 'Enter your search terms here',
                          'title' => 'Search',
                          'value' => '');
$args['fields'][] = array('type' => 'submit',
                          'value' => 'Search');
                          
                          
$my_search = new WP_Advanced_Search($args);
			
?>
			
			
			<div id="content">

				<div id="inner-content" class="clearfix">
                    <div id="search" class="large-4 medium-4 columns " role="aside">
                    <h4>Filter</h4>
                    <?php $my_search->the_form(); ?>
                    

                   
                    </div>    
                    
                  
                
					<div id="search-results" class="large-8 medium-8 columns first clearfix" role="main">
						
						<?php


$my_search = new WP_Advanced_Search($args);
$temp_query = $wp_query;
$wp_query = $my_search->query();?>
<h4 class="archive-title"><span><?php echo 'Findings' ;?></span></h4>
<?php	
if ( have_posts() ): 
    while ( have_posts() ): the_post(); ?>
    
<?php get_template_part( 'partials/loop', 'search' ); ?>					
 
<?php    endwhile;

$my_search->pagination(array('prev_text' => '«','next_text' => '»'));

endif;
wp_reset_query();
$wp_query = $temp_query;
?>

	
                    								

				    </div> <!-- end #main -->


    			</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>