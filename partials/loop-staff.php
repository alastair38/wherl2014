<article id="post-<?php the_ID(); ?>" class="large-8 medium-8 columns clearfix" role="article" itemscope itemtype="http://schema.org/WebPage">
						
	<header class="article-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
	
	</header> <!-- end article header -->
					
    <section class="entry-content clearfix" itemprop="articleBody">
        <?php the_post_thumbnail();?>
	    <?php the_content(); ?>
	    <?php wp_link_pages(); ?>

	</section> <!-- end article section -->   

        <div id="related-info" class="large-12 medium-12 columns" role="">

                    <h6>Useful Staff Info</h6>

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
    
    <p class="view-all"><a href="<?php echo get_post_type_archive_link( 'staff' ); ?>">View All Staff</a></p>
                 
    </div>
						
