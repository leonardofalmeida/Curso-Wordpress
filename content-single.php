<article>
	
	<header>
		<h1><?php the_title(); ?></a></h1>
		<p>Publicado em <?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
		<p><?php the_tags('Tags: ', ', '); ?> </p>
		<p>Categoria: <?php the_category(', '); ?></p>
	</header>

	<div class="content">
		<?php the_content(); ?>
	</div>

</article>