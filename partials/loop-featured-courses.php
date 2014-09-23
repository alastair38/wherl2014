<?php 
 
$posts = get_field('featured_courses');
 
if( $posts ): ?>
	<ul>
	    <li><h5>Featured Courses</h5></li>
	<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
	    <li>
	    	<a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a>
	    </li>
	<?php endforeach; ?>
	</ul>
<?php endif; ?>