<?php get_header(); ?>

<div id="primary">
	<main id="main">
		<div class="container">
			<?php 

			while(have_posts()): the_post();

				get_template_part('content', 'single');

				?>
		
				<div class="paginacao text-left"><?php previous_post_link(); ?></div>
				<div class="paginacao text-right"><?php next_post_link(); ?></div>

				<?php	

				if (comments_open() || get_comments_number()):
					comments_template();
				endif;

			endwhile;

			 ?>
		</div>

	</main>
</div>

<?php get_footer(); ?>