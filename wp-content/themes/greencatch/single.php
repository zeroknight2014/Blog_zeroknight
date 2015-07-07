<?php get_header(); ?>
    <!-- main container -->
    <div class="container">
    	<div class="article-list">
        <?php while ( have_posts() ) : the_post(); ?>
                <div class="article">
                <h1>
					<?php the_title(); ?>
					<div class= "article-view">浏览数：<?php global $view_count; if(function_exists('the_views')) { $view_count = the_views(null,false); echo "$view_count";} ?></div>
				</h1>
                <?php if ( has_post_thumbnail() ) { ?>
                <div class="article-img">
                	<?php the_post_thumbnail(); ?>
                </div>
				<?php }?>
                <div class="article-content">
				<?php the_content(); ?>
				<div class="article-copyright"><i class="fa fa-share-alt"></i> 码字很辛苦，转载请注明来自<b><a href="<?php bloginfo('wpurl');?>"><?php bloginfo('name') ?></a></b>的<a href="<?php the_permalink();?>">《<?php the_title();?>》</a></div>
<!--comment old
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>
-->
				<!--高速版-->
				<div id="SOHUCS"></div>
					<script charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/changyan.js" ></script>
					<script type="text/javascript">
						window.changyan.api.config({
							appid: 'cyrRuU5eE',
							conf: 'prod_d27eb139e83981f26c0bac6913738e14'
						});
					</script>        
                </div>
                
            </div>
            <?php
			endwhile;
			?>
            <div class="footer">Copyright &copy; <a href="">2015 www.zeroknight.com</a> | THEME BY <a href="">MEMORY</a></div>
        </div>
        <?php get_sidebar(); ?>
    </div>
<!------------------------------>
<?php get_footer(); ?>