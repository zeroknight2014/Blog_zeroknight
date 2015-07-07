<?php get_header(); ?>
    <!-- main container -->
    <div class="container">
    	<div class="article-list">
        <?php while ( have_posts() ) : the_post(); ?>
                <div class="article">
                <h1>
					<font size="6"><?php the_title(); ?></font>
					<div class="info">
						<font size="2">
							<span class="meat_span">分类: <?php the_category(', ') ?>&nbsp&nbsp</span>
							<span class="meat_span"><font size="2">发布时间: <?php the_time('Y-m-d H:i') ?>&nbsp&nbsp&nbsp&nbsp</font></span>
							<span class="meat_span"><?php if(function_exists(the_views)) { echo the_views(null, false);}?>次浏览&nbsp&nbsp&nbsp&nbsp</span>
							<span class="meat_span"><a href="#SOHUCS" id="changyan_count_unit"></a>次评论&nbsp&nbsp&nbsp&nbsp
<script type="text/javascript" src="http://assets.changyan.sohu.com/upload/plugins/plugins.count.js"></script></span>
						</font>
					</div>
					
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