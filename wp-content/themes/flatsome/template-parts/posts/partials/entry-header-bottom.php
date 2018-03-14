<header class="entry-header">
    <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
		<div class="entry-image relative">
			<?php get_template_part( 'template-parts/posts/partials/entry-image', 'default'); ?>
		   	<?php get_template_part( 'template-parts/posts/partials/entry', 'post-date'); ?>
		</div><!-- .entry-image -->
	<?php } ?>
	<?php if ( in_category('case') ): ?>
		<div class="category-case entry-header-text entry-header-text-bottom text-<?php echo flatsome_option('blog_posts_title_align');?>">
			<?php get_template_part( 'template-parts/posts/partials/entry', 'title'); ?>
		</div>
	<?php ?>
	<?php else: ?>
		<div class="entry-header-text entry-header-text-bottom text-<?php echo flatsome_option('blog_posts_title_align');?>">
			<?php get_template_part( 'template-parts/posts/partials/entry', 'title'); ?>
		</div>
	<?php endif;?>
</header><!-- .entry-header -->