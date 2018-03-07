<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php
    /**
     * @see discussion_header_meta() - hooked with 10
     * @see mkd_user_scalable - hooked with 10
     */
    ?>
	<?php do_action('discussion_header_meta'); ?>

    <?php wp_head(); ?>
    
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=490227714445389";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/custom.css">
</head>
<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
<?php discussion_get_side_area(); ?>
<div class="mkd-wrapper">
    <div class="mkd-wrapper-inner">
        <?php discussion_get_header(); ?>

        <?php if(discussion_options()->getOptionValue('show_back_button') == "yes") { ?>
            <a id='mkd-back-to-top'  href='#'>
                <span class="mkd-icon-stack">
                     <?php
                        discussion_icon_collections()->getBackToTopIcon('font_elegant');
                    ?>
                </span>
                <span class="mkd-icon-stack-flip">
                     <?php
                        discussion_icon_collections()->getBackToTopIcon('font_elegant');
                    ?>
                </span>
            </a>
        <?php } ?>

        <div class="mkd-content" <?php discussion_content_elem_style_attr(); ?>>
            <div class="mkd-content-inner">
            	<?php discussion_get_content_top();?>