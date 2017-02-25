<?php get_header(); ?>

				<div id="leftcontent">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></div>
					<div class="postmetadata"><?php the_time('j-M-y') ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?><?php edit_post_link('Edit', ' | ', ''); ?></div>
				
				<div class="postcontent"><?php the_content('Read the rest of this entry &raquo;'); ?></div>
	<?php comments_template(); ?>
	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div><!--leftcontent-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
