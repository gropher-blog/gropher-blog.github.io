</div><!--main-->

<div id="footer">
	<div id="credits">
		<ul>
			<li><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></li>
			<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
			<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
			<li>Powered by <a href="http://wordpress.org/">WordPress</a></li>
			<li>Theme by <a href="http://gropher.net">gropher</a></li><!--Please do not remove this.-->
		</ul>
	</div>

	<div id="archives">
			<a name="archives"></a>
		<ul>
				<?php wp_get_archives('type=monthly&show_post_count=true'); ?>
		</ul>
	</div>
	
</div><!--footer-->

<?php wp_footer(); ?>
</body>
</html>
