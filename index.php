<?php get_header(); ?>

<!--Imagem do header, o source é a imagem do uploado feito no wordpress, e é pego o height e o width dessa imagem-->
<?php get_template_part('image-header'); ?>

<div class="conteudo">
	<main>
		<section class="meio">
			<div class="container">
				<div class="row">
					<div class="blog col-md-9">
						<?php 
							// Se houver algum post
							if(have_posts()) :
								// Enquanto houver algum post, chame o post de determinada maneira
								while (have_posts()) : the_post(); 
						?>

						<?php get_template_part('content', get_post_format()); ?>

						<?php 
						endwhile;
						?>

						<div class="paginacao text-left">
							<?php next_posts_link("Mais antigos"); ?>
						</div>

						<div class="paginacao text-left">
							<?php previous_posts_link("Mais novos") ?>
						</div>

						<?php
						else:
						 ?>
							<p>Nao tem nada ainda pra mostrar</p>
						<?php 
						endif;
						?>
					</div>
					<aside class="barra-lateral col-md-3">
						<?php get_sidebar('blog'); ?>
					</aside>
				</div>
			</div>
		</section>
	</main>
</div>
<?php get_footer(); ?>
