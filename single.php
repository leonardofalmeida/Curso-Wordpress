<?php get_header(); ?>

<?php get_template_part('image-header'); ?>

<div id="primary">
	<main id="main">
		<div class="container">
			<div id="<?php the_ID(); ?>" <?php post_class(array('post-formato-padrao')); ?>> 
				<?php 

				while(have_posts()): the_post();

					get_template_part('content', 'single');

					?>
					<div class="row">
						<div class="paginacao text-left col-md-6"><?php previous_post_link(); ?></div>
						<div class="paginacao text-right col-md-6"><?php next_post_link(); ?></div>
					</div>
					<?php	

					if (comments_open() || get_comments_number()):
						comments_template();
					endif;

				endwhile;

				 ?>
			</div>
		</div>
	</main>
</div>

<?php get_footer(); ?>