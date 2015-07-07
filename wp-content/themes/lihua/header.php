<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<title>
	<?php if (is_single() || is_page() || is_archive() || is_search()) { ?><?php wp_title('',true); ?> - <?php } bloginfo('name'); ?><?php if ( is_home() ){ ?> - <?php bloginfo('description'); ?><?php } ?><?php if ( is_paged() ){ ?> - <?php printf( __('Page %1$s of %2$s', ''), intval( get_query_var('paged')), $wp_query->max_num_pages); ?><?php } ?>
</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
	if (is_home()){ 
		$description     = get_option('mao10_description');
		$keywords = get_option('mao10_keywords');
	} elseif (is_single() || is_page()){    
		$description1 =  $post->post_excerpt ;
		$description2 = mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200, "…");
		$description = $description1 ? $description1 : $description2;
		$keywords = "";        
		$tags = wp_get_post_tags($post->ID);
		foreach ($tags as $tag ) {
			$keywords = $keywords . $tag->name . ", ";
		}
	} elseif(is_category()){
		$description     = strip_tags(category_description());
		$current_category = single_cat_title("", false);
		$keywords =  $current_category;
	}
?>
<meta name="keywords" content="<?php echo $keywords ?>" />
<meta name="description" content="<?php echo $description ?>" />
<?php wp_head(); ?>
</head>
<body>
<div class="body">
	<div id="headerback">
		<div id="backtu">
			<div class="shouzi">
				<?php wp_nav_menu( array( 'theme_location' => 'nav-menu','container' => '','menu_class' => 'nav-menu-list','before' => '','after' => '') ); ?>
			</div>
			<img src="<?php bloginfo('template_directory'); ?>/img/01.jpg" />
		</div>
	</div>