<?php 
 
$posts = get_field('featured_staff');
 
if( $posts ): ?>
	<ul>
	    <li><h5>New Staff</h5></li>
	<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
	    <li>
	    	<a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a>
	    </li>
	<?php endforeach; ?>
	</ul>
<?php endif; ?>