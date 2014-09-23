<article id="post-<?php the_ID(); ?>" class="large-8 medium-8 columns clearfix" role="article" itemscope itemtype="http://schema.org/WebPage">
						
	<header class="article-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<?php 

if($post->post_parent) {
    
    
    //  the_field($field_name, $post->post_parent)
    // this will get field values eg contact details from parent page / change $field_name as appropriate
    
   
    $title = get_the_title($post->post_parent);
    $permalink = get_the_permalink($post->post_parent);
    echo "<div class='parentlink'><a href='$permalink'>" . "<i class='fi-arrow-right'></i> Department of " . $title . "</a></div>";
}

?>
	</header> <!-- end article header -->
					
    <section class="entry-content clearfix" itemprop="articleBody">
	    <?php the_content(); ?>
	    <?php the_post_thumbnail();?>
	    <?php wp_link_pages(); ?>

	</section> <!-- end article section -->  
                        				
<?php if($post->post_parent) {
    
    
    //  the_field($field_name, $post->post_parent)
    // this will get field values eg contact details from parent page / change $field_name as appropriate
    
                            $args = array(
                            'sort_order' => 'ASC',
                            'sort_column' => 'post_title',
                            'hierarchical' => 1,
                            'exclude' => $post->ID,
                            'child_of' => $post->post_parent,
                            'parent' => -1,
                            'offset' => 0,
                            'post_type' => 'departments',
                            'post_status' => 'publish'
                        ); 
                        $pages = get_pages($args); 
                        if ($pages){
                            echo "<h4>Related Departments</h4>";
                        }
                        foreach ($pages as $page){ ///content-partial here for related depts large-6
                            $thumbnail = get_the_post_thumbnail ($page->ID);
                            echo "<div class='large-6 medium-6 columns clearfix'><p><a href='$page->guid'>" . $page->post_title . "</a></p></div>";

                        }
                        }
                        else {
                            $args = array(
                            'sort_order' => 'ASC',
                            'sort_column' => 'post_title',
                            'hierarchical' => 1,
                            'child_of' => $post->ID,
                            'parent' => -1,
                            'offset' => 0,
                            'post_type' => 'departments',
                            'post_status' => 'publish'
                        ); 
                        $pages = get_pages($args); 
                        if ($pages){
                            echo "<h4>Department Schools</h4>";
                        }
                        foreach ($pages as $page){ ///content-partial here for related depts large-6
                            $thumbnail = get_the_post_thumbnail ($page->ID);
                            echo "<div id='dept-schools' class='large-6 medium-6 columns clearfix'><p><a href='$page->guid'>" . $page->post_title . "</a></p></div>";

                        }
                        }
                        ?>                        				                                                                  

        <div id="related-info" class="large-12 medium-12 columns" role="">

                            <h6>Useful Departmental Info</h6>

                                                     <?php $args = array(
                                                        'child_of'     => 0,
                                                        'sort_order'   => 'ASC',
                                                        'sort_column'  => 'post_title',
                                                        'hierarchical' => 1,
                                                        'post_type' => 'departments'
                                                    );
                                                    ?>

                                                    <form action="<?php bloginfo('url'); ?>" method="get">

                                                    <?php wp_dropdown_pages( $args );
                                                    ?>

                                                   <input type="submit" name="submit" value="view" />
                                                   </form>	

        </div> <!-- end #related-info -->                        
						    					
</article> <!-- end article -->


<div id="contact" class="large-4 medium-4 columns first clearfix" role="aside">
        
    <h2>Contact</h2>

        <?php


echo "<p>" . the_field('contact_name') . "</p>";
echo "<p>" . the_field('email') . "</p>";
echo "<p>" . the_field('phone_landline') . "</p>";
echo "<p>" . the_field('phone_mobile') . "</p>";
echo "<p>" . the_field('twitter') . "</p>";
$address = get_field('map');
$address2 = explode( ',', implode($address) );

echo $address2[0].'<br />';
echo $address2[1].'<br />';
echo $address2[2].'<br />';
echo $address2[3].'<br />';
echo $address2[4].'<br />';

        ?>
     
    <p class="view-all"><a href="<?php echo get_post_type_archive_link( 'departments' ); ?>">View All Departments</a></p>
                   
    </div>
						
