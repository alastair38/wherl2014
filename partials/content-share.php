<ul class="share-links columns">
   
    <li><a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&via=jennyroe&text=<?php the_title(); ?>" title="Share on Twitter" target="_blank"><i class="fi-social-twitter"></i></a></li>
   
    <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php echo wp_filter_nohtml_kses( $content );?>&source=www.jennyroe.com" title="Share on Linkedin" target="_blank"><i class="fi-social-linkedin"></i></a></li>

	<li><a href="mailto:?subject=I wanted to share this post with you from <?php bloginfo('name'); ?>&body=<?php the_title('','',true); ?>&#32;&#32;<?php the_permalink(); ?>" title="Email to a friend/colleague" target="_blank"><i class="fi-mail"></i></a> </li>
	
    <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" title="Share on Facebook" target="_blank"><i class="fi-social-facebook"></i></a> </li>
	
</ul>
