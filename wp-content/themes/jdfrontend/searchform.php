
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
	<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" />
	<button id="searchsubmit" ><i class="fa fa-search" aria-hidden="true"></i></button>
</form>