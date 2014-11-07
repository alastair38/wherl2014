<?php get_header(); ?>
        

			
			<div id="content">
			
				<div id="inner-content" class="clearfix">
			
				    <div id="people" class="large-12 columns" role="main">
				        <div class="large-12 columns">
                          
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				    
				
		
				
				    
				
				
               
                           
                            <div class="large-9 columns">
                            <article>
                            <h1 class="event-title"><?php the_title(); ?></h1>
                            <?php $date = DateTime::createFromFormat('Ymd', get_field('event_start'));
echo '<i class="fi-calendar" title="Event Date"></i> ' . $date->format('d F Y'); ?>
                           <?php if( get_field('event_finish') ): ?>
                            <?php $date = DateTime::createFromFormat('Ymd', get_field('event_finish'));
echo ' - ' . $date->format('d F Y'); ?>
                             <?php endif; ?>
                             
                             <?php if( get_field('event_address') ): ?>
                                    <p><i class="fi-marker" title="Event Location"> </i><?php the_field('event_address'); ?></p>
                                    <?php endif; ?> 
                             <?php the_content();?>
				
				<?php endwhile; else : ?>

                <?php endif; ?> 
		<?php get_template_part( 'partials/content', 'share' ); ?>		    
                                </article>
                            </div>
                            <div id="contact" class="large-3 small-12 columns clearfix">
<div class="contact-list">Contact
                          <?php if( get_field('contact_name') ): ?>
                                    <?php the_field('contact_name'); ?>
                                    <?php endif; ?> 
</div>                       
                            <?php if( get_field('event_email') ): ?>
                                <div class="email"><i class="fi-mail"></i><a href="mailto:<?php the_field('event_email'); ?>">Email</a></div>
                            <?php endif; ?>
                            <?php if( get_field('event_twitter') ): ?>
                                <div class="twitter"><i class="fi-social-twitter"></i><a href="<?php the_field('event_twitter'); ?>">Twitter</a></div>
                            <?php endif; ?>
                            <?php if( get_field('event_phone') ): ?>
                                <div class="phone"><i class="fi-telephone"></i><?php the_field('event_phone'); ?></div>
                            <?php endif; ?>
                            <?php if( get_field('event_website') ): ?>
                                <div class="web"><i class="fi-web"></i><a href="<?php the_field('event_website'); ?>">Website</a></div>
                            <?php endif; ?>
                            
                            
                             
                            </div>
                            
                            <div class="large-12 columns">
                            <article>
                            
                              	
                              

                           
                                 <div id="map"> 
                           
                            <?php 

$location = get_field('event_map');
      
                             ?>
                                <a href="http://maps.google.co.uk/maps/place/<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>/@<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>,15z" target="_blank" title="View map full screen" class="show-for-large-only"><img src="https://maps.googleapis.com/maps/api/staticmap?zoom=13&size=600x300&scale=2&maptype=roadmap
          &markers=color:green%7C<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>"></a>
                             
                             <a href="geo:<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>;u=35" class="hide-for-large-only"><img src="https://maps.googleapis.com/maps/api/staticmap?zoom=15&size=600x300&scale=2&maptype=roadmap
          &markers=color:green%7C<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>"></a>
                              
                              </div>
                         
				            
                            </article>                          
                             </div>   
                          
                           
                            
                        </div>
   
                   
 




	
                        </div><!-- end #main -->
    
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
