<?php get_header(); ?>
				
				<div id="leftcontent">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
		
						<div class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></div>
					<div class="postmetadata"><?php the_time('j-M-y') ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?><?php edit_post_link('Edit', ' | ', ''); ?></div>
					<!--
				<div class="postmetadata"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?> | <?php edit_post_link('Edit', '', ''); ?></div>
				-->
						<div class="postcontent">
							<?php the_content('Read the rest of this entry &raquo;'); ?>
					</div><!--postcontent-->
					


		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

					</div><!--leftcontent-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
