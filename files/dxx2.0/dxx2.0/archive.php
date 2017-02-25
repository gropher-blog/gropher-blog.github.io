<?php get_header(); ?>

<div id="leftcontent">

	<?php if (have_posts()) : ?>

	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	<?php /* If this is a category archive */ if (is_category()) { ?>
	<h2 class="pagetitle">Archive for the &#8216;<?php echo single_cat_title(); ?>&#8217; Category</h2>

	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
	<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>

	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
	<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>

	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
	<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>

	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
	<h2 class="pagetitle">Author Archive</h2>

	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
	<h2 class="pagetitle">Blog Archives</h2>

	<?php } ?>

	<?php while (have_posts()) : the_post(); ?>

	<div class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></div>
					<div class="postmetadata"><?php the_time('j-M-y') ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?><?php edit_post_link('Edit', ' | ', ''); ?></div>


		<?php endwhile; ?>


	<div class="navigation">
		<div class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></div>
		<div class="alignright"><?php previous_posts_link('Newer Posts &raquo;')?></div>
	</div>
	
		<?php else : ?>

		<h2 class="pagetitle">Not Found</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

		<?php endif; ?>

		</div><!--leftcontent-->

		<?php get_sidebar(); ?>

		<?php get_footer(); ?>
