<article id="post-<?php the_ID(); ?>" class="large-8 medium-8 columns clearfix" role="article" itemscope itemtype="http://schema.org/WebPage">
						
	<header class="article-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
		
	
	</header> <!-- end article header -->
					
    <section class="entry-content clearfix" itemprop="articleBody">
	    <?php the_content(); ?>
	    <?php the_post_thumbnail();?>
	    <?php wp_link_pages(); ?>

	</section> <!-- end article section -->    


        <div id="related-info" class="large-12 medium-12 columns" role="">
                                     
            <h6>Useful Course Info</h6>

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

        <div id="contact" class="large-4 medium-4 columns clearfix" role="aside">

    <h2>Contact</h2>
	<?php 
 
$posts = get_field('department');
 
if( $posts ):
	
    foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) 
    $title = get_the_title($p->ID);
    $permalink = get_the_permalink($p->ID);
	    echo "<div class='parentlink'><a href='$permalink'>" . "Department of " . $title . "</a></div>";
	   
	    
 endforeach;
	
endif; ?>

<?php


echo "<p>" . the_field('contact_name') . "</p>";
echo "<p>" . the_field('email') . "</p>";
echo "<p>" . the_field('phone_landline') . "</p>";
echo "<p>" . the_field('phone_mobile') . "</p>";
echo "<p>" . the_field('twitter') . "</p>";
?>
<?php 

// this gets map field from 'department' relationship ACF. Use on courses, events to get contact info
// the assumption is, that each dept, sub-dept and staff member will have their own contact details so this will not
// need to be used on departmental and staff pages. Additional JS required http://www.advancedcustomfields.com/resources/field-// // types/google-map/


$posts = get_field('department');
 
if( $posts ): ?>
    <div>
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <p>
           
            <?php
$address = get_field('map');
$address2 = explode( ',', implode($address) );

echo $address2[0].'<br />';
echo $address2[1].'<br />';
echo $address2[3].'<br />';
echo $address2[4].'<br />';
echo $address2[5].'<br />';

?>
        </p>
    <?php endforeach; ?>
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>

                <?php 
 
$posts = get_field('staff_member');
 
if( $posts ): ?>
	<div>
	<h4>Teaching Staff</h4>
	<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
	    <p>
	    	<?php echo get_the_post_thumbnail( $p->ID, array(50,50) ); ?><a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a>
	    </p>
	<?php endforeach; 
   
        ?>
	</div>
<?php endif; ?>
	
        <p class="view-all"><a href="<?php echo get_post_type_archive_link( 'courses' ); ?>">View All Courses</a></p>
        		                    
    </div>