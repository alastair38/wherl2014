<div class="archive-findings clearfix">

    <article id="post-<?php the_ID(); ?>" class="" role="article">
  
    <div class="columns">  

  <ul class="findings-authors">
         <?php $types = get_field('finding_type' ); 
                                 if( $types ): ?>
							
						
							<?php foreach( $types as $type): ?>
								
									
										<li class="findings-type"><?php echo $type; ?></li>
									
								
							<?php endforeach; ?>
							
                           <?php endif; ?>
                           
                                     <?php $authors = get_field('resource_author' ); 
                                 if( $authors ): ?>
							
							<span>submitted by </span> 
							<?php foreach( $authors as $author): ?>
								
									<li><a href="<?php echo get_permalink( $author->ID ); ?>" title="View <?php echo get_the_title( $author->ID ); ?>'s Profile">
										<?php echo get_the_title( $author->ID ); ?>
									</a></li>
								
							<?php endforeach; ?>
							
                               
				
						<?php endif; ?>
            
  </ul>
    
    <h6><?php echo get_the_title( $finding->ID ); ?></h6>
                    
      
                             
       
                            </div>

    <header class="article-header columns">

    
    </header> <!-- end article header -->
    
    <section>
    
         <div class="columns">
                                <?php $projects = get_field('findings_project'); 
                                 if( $projects ): ?>
							
             <ul class="findings-authors"><span>Assigned to</span> 
							<?php foreach( $projects as $project): ?>
									
										<li class="findings-project"><a href="<?php echo get_permalink( $project ); ?>" title="View the <?php echo get_the_title($project  ); ?> project page">
										<?php echo get_the_title( $project ); ?>
									</a></li>
								
							<?php endforeach; ?>
							
                                     </ul>
                                     
                 <ul class="findings-authors"> 
							<?php if( get_field('file_upload') ): ?>
                             <li class="findings-project"><a href="<?php the_field( 'file_upload' ); ?>" target="_blank" title="Download <?php the_field( 'file_upload' ); ?>">
										<i class="fi-download"></i>
									</a></li>
                            <?php endif; ?>
                            
                            <?php if( get_field('file_uploadb') ): ?>
                             <li class="findings-project"><a href="<?php the_field( 'file_uploadb' ); ?>" target="_blank" title="Download <?php the_field( 'file_upload' ); ?>">
										<i class="fi-download"></i>
									</a></li>
                            <?php endif; ?>
                            
                            <?php if( get_field('file_uploadc') ): ?>
                             <li class="findings-project"><a href="<?php the_field( 'file_uploadc' ); ?>" target="_blank" title="Download <?php the_field( 'file_upload' ); ?>">
										<i class="fi-download"></i>
									</a></li>
                            <?php endif; ?>
                            
                            <?php if( get_field('external_link') ): ?>
                             <li class="findings-project"><a href="<?php the_field( 'external_link' ); ?>" target="_blank" title="This will take you to an external website">
										<i class="fi-info"> More Information</i>
									</a></li>
                            <?php endif; ?>
									
								
							
                                     </ul>
                                     
						<?php endif; ?>
                            </div>
        
	<?php get_template_part( 'partials/content', 'share' ); ?>
   
    </section> <!-- end article section -->
    
    </article> <!-- end article -->
</div>