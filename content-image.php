<article id="<?php the_ID(); ?>" <?php post_class(array('post-formato-image')); ?>> 
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<p>Categorias: <?php the_category(', '); ?></p>
	<p><?php the_content(); ?></p>
</article>