
                        <?php 

                    /*
                    *  Query posts for a relationship value.
                    *  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
                    */
$postid = get_the_ID();

                        $persons = get_posts(array(
                            'post_type' => 'people',
                            'posts_per_page' => 10,
                            'orderby' => 'surname',
                            'order' => 'ASC',
                            'meta_key' => 'surname',
                            'meta_query' => array(
                                array(
                                    'key' => 'academic_group', // name of custom field
                                    'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
                                    'compare' => 'LIKE'
                                )
                            )
                        ));

                        ?>

                        <?php if( $persons ): ?>
                        
                        <?php foreach( $persons as $person ): ?>
                        <div class="large-4 medium-8 columns clearfix">
                        <div class="people-details">
                         <h3><?php echo get_the_title( $person->ID ); ?></h3>
                        <?php echo get_the_post_thumbnail( $person->ID ); ?>
                            </div>
                       
                        </div>
                       

                        <?php endforeach; ?>
                       
                        <?php endif; ?>
                        
                        <?php wp_reset_postdata();?>
