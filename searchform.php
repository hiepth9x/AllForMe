<form id="searchform" action="<?php echo home_url( '/' ); ?>" method="get">

	<input id='s' style="max-width:50%" type = "text" name="s" value="<?php the_search_query();?>"/>

	<a href = "#"><img src = "<?php bloginfo('template_url')?>/img/search-icon.png"  /></a>

</form>