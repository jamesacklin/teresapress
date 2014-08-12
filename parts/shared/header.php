<header role="banner">
	<nav role="navigation">
		<ul>
			<?php wp_list_pages('title_li='); ?>
		</ul>
	</nav>
	<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	<p><?php bloginfo( 'description' ); ?></p>
</header>
