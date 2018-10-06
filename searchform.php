<form action="<?php  echo home_url('/'); ?>" method="get" role="search">
	<input type="search" class="form-control" placeholder="Pesquisa" value="<?php echo get_search_query(); ?>" name="s" title="Pesquisa"/>
</form>