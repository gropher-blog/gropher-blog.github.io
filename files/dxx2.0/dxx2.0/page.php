<?php get_header(); ?>

				<div id="leftcontent">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h2 class="posttitle"><?php the_title(); ?></h2>
					<div class="postmetadata"><?php the_time('j-M-y') ?><?php edit_post_link('Edit', ' | ', ''); ?></div>
						<div class="postcontent">
							<?php the_content('Read the rest of this entry &raquo;'); ?>
					</div><!--postcontent-->

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	</div><!--leftcontent-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>