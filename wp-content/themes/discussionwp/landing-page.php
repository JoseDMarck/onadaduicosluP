<?php
/*
Template Name: Landing Page
*/
$sidebar = discussion_sidebar_layout();

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <?php
        /**
         * discussion_header_meta hook
         *
         * @see discussion_header_meta() - hooked with 10
         * @see mkd_user_scalable_meta() - hooked with 10
         */
        do_action('discussion_header_meta');
        ?>

        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>
<div class="mkd-wrapper">
	<div class="mkd-wrapper-inner">
		<div class="mkd-content">
			<div class="mkd-content-inner">
				<?php discussion_get_content_top();?>
				<?php get_template_part( 'title' ); ?>
				<?php get_template_part('slider');?>
				<div class="mkd-full-width">
					<div class="mkd-full-width-inner">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php if(($sidebar == 'default')||($sidebar == '')) : ?>
								<?php the_content(); ?>
								<?php do_action('discussion_page_after_content'); ?>
							<?php elseif($sidebar == 'sidebar-33-right' || $sidebar == 'sidebar-25-right'): ?>
								<div <?php echo discussion_sidebar_columns_class(); ?>>
									<div class="mkd-column1 mkd-content-left-from-sidebar">
										<div class="mkd-column-inner">
											<?php the_content(); ?>
											<?php do_action('discussion_page_after_content'); ?>
										</div>
									</div>
									<div class="mkd-column2">
										<?php get_sidebar(); ?>
									</div>
								</div>
							<?php elseif($sidebar == 'sidebar-33-left' || $sidebar == 'sidebar-25-left'): ?>
								<div <?php echo discussion_sidebar_columns_class(); ?>>
									<div class="mkd-column1">
										<?php get_sidebar(); ?>
									</div>
									<div class="mkd-column2 mkd-content-right-from-sidebar">
										<div class="mkd-column-inner">
											<?php the_content(); ?>
											<?php do_action('discussion_page_after_content'); ?>
										</div>
									</div>
								</div>
							<?php endif; ?>
						<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>