<?php get_header(); ?>

<!--Imagem do header, o source é a imagem do uploado feito no wordpress, e é pego o height e o width dessa imagem-->
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<div class="conteudo">
	<main>
		<section class="meio container">
			<div class="row">
				<div class="noticias col-md-9">
					<?php 

						the_archive_title('<h1 class="titulo-archive">', '</h1>');
						the_archive_description();

						// Se houver algum post
						if(have_posts()) :
							// Enquanto houver algum post, chame o post de determinada maneira
							while (have_posts()) : the_post(); 
					?>

					<?php get_template_part('content', 'archive'); ?>

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
		</section>
	</main>
</div>
<?php get_footer(); ?>