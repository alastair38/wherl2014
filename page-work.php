<?php
/**
Template Name: Work Packages

 */

get_header(); ?>

	<div id="primary">
		<div id="content" role="main">
            

			<?php while ( have_posts() ) : the_post(); ?>

				<article>
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>

						<?php 

						/*
						*  Query posts for a relationship value.
						*  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
						*/

						$doctors = get_posts(array(
							'post_type' => 'findings',
							'meta_query' => array(
								array(
									'key' => 'work_project', // name of custom field
									'value' => ' 187 ', // matches exaclty "123", not just 123. This prevents a match for "1234"
									'compare' => 'LIKE'
								)
							)
						));

						?>
						<?php if( $doctors ): ?>
							<ul>
							<?php foreach( $doctors as $doctor ): ?>
								<?php 

								$photo = get_field('photo', $doctor->ID);

								?>
								<li>
									
										<?php echo get_the_title( $doctor->ID ); ?>
									
								</li>
							<?php endforeach; ?>
							</ul>
						<?php endif; ?>

				

				</article>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
    