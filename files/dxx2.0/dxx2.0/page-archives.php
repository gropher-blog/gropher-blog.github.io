<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>
<div id="leftcontent">
	<div class="post">
		<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<p><?php edit_post_link(); ?></p>
			<div class="entry">
			<h2><?php _e('by Categories'); ?></h2>
			<ul>
			<?php list_cats(0, '', 'name', 'ASC', '/', true, 0, 1);    ?>
			</ul>

			<h2><?php _e('by Month'); ?></h2>
			<ul><?php wp_get_archives('type=monthly'); ?></ul>
			<h2>Latest 50 Entries</h2>
			<ul>
			<?php wp_get_archives('type=postbypost&limit=50'); ?>
			</ul>
			</div>
			</div>
			</div>
			<?php get_sidebar();?>
			<?php get_footer();?>
