<?php
get_header(); 
$limit = get_option('posts_per_page');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
?>
<!------------------------------>
    <!-- main container -->
    <div class="container">
    	<div class="article-list">
        <?php
		global $query_string;
		query_posts($query_string.'&orderby=id');
		if ( have_posts() ) : while ( have_posts() ) : the_post();
		?>
            <div class="article">
                <h1><a href="<?php the_permalink(); ?>" title="<?php the_title();?>" alt="<?php the_title();?>"><?php the_title() ?></a></h1>
                <?php if ( has_post_thumbnail() ) { ?>
                <div class="article-img">
                	<a href="<?php the_permalink(); ?>" title="<?php the_title();?>" alt="<?php the_title();?>"><?php the_post_thumbnail(); ?></a>
                </div>
				<?php }?>
                <div class="article-summary">
                   <?php the_excerpt(); ?>
                </div>
                <div class="article-info">
                    <i class="fa fa-calendar"></i> <?php the_time("Y-m-d");?> &nbsp; 
					<i class="fa fa-map-marker"></i> <?php	$category = get_the_category();	echo $category[0]->cat_name;?> &nbsp;
					<i class="fa fa-map-marker"></i> <?php if(function_exists(the_views)) { echo the_views(null, false);}?>次浏览&nbsp
					<i class="fa fa-map-marker"></i> <span id = "url::<?php the_permalink();?>" class = "cy_cmt_count" ></span>次评论&nbsp;
                </div>
                <div class="readmore"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>" alt="<?php the_title();?>">+ 阅读全文</a></div>
				<script id="cy_cmt_num" src="http://changyan.sohu.com/upload/plugins/plugins.list.count.js?clientId=cyrRuU5eE"></script>
			</div>
                    <?php
							endwhile; else:
							?>
                                        <div class="article">
                <h1>Sorry, 没有文章</h1>
                <div class="article-summary">
                   没有文章
                </div>
                
            </div>
                            <?
							endif;
							wp_reset_query();
							?>
                            <div class="pagenavi"><?php pagenavi(); ?></div>
            
        </div>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>