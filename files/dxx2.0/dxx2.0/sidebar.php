<div id="rightcontent">
	<ul><!--1st level-->
		<li>
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
		</li>
		<li>
			<h3>Navigation</h3>
			<ul>
				<li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
				<li><a href="#archives">Archives</a></li>
				</ul>
				</li>
				<?php wp_list_pages('title_li=<h3>Pages</h3>' ); ?>

				<?php wp_list_categories('show_count=1&title_li=<h3>Categories</h3>'); ?>
				<li>
				<h3>Meta</h3>
				<ul>
				<li><?php wp_register(); ?></li>
				<li><?php wp_loginout(); ?></li>
				<li><?php wp_meta(); ?></li>
				</ul>
				</li>
				</ul><!--1st level-->
				</div><!--rightcontent-->
