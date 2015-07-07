<?php get_header(); ?>
	<div id="zhongdakuang">
		<div id="baokuang">
			<h1><?php single_cat_title(); ?></h1>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php 
				$fmimg = get_post_meta($post->ID, "fmimg_value", true);
				$cti = catch_that_image();
				if($fmimg) {
					$showimg = $fmimg;
				} else {
					$showimg = $cti;
				}; 
				has_post_thumbnail();
				if ( has_post_thumbnail() ) { 
					$thumbnail_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail');
					$shareimg = $thumbnail_image_url[0];
				} else { 
					$shareimg = $showimg;
				}
			?>
			<div class="zuo1kuang">
				<a href="<?php the_permalink(); ?>">
					<img src="<?php echo $shareimg; ?>" />
				</a>
			</div>
			<div class="zuo2kuang">
				<h2>
					<a  href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>
				<div class="postinfo">
					<a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" target="_blank">
						<?php the_author_meta('display_name'); ?>
					</a>
					&nbsp;|&nbsp;
					<?php the_category(', '); ?>
					&nbsp;|&nbsp;
					<?php the_time('Y.m.d'); ?>
				</div>
				<div class="gengxinzi">
					<?php the_content(); ?>					
				</div>
				<div class="liulan">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a class="tubiao01 tubiao00" href="<?php the_permalink(); ?>">
							3.189浏览&nbsp;&nbsp;&nbsp;
						</a>
						<a class="tubiao02 tubiao00" href="<?php the_permalink(); ?>#comments">
							<?php comments_number('0', '1', '%' );?>回应 &nbsp;&nbsp;
						</a>
						<?php the_tags('<span class="tags">标签：','','</span>'); ?>
					</div>
			</div>
			<div class="c">
			</div>
			<?php endwhile; endif; ?>
			<div class="foot">
				<div id="pager"><?php par_pagenavi(9); ?></div>
			</div>
			<div class="c">
			</div>
		</div>
		<div id="zhongyoukuang">
			<div id="youhuangkuang">
				<form method="get" action="#">
					<input class="huangxiao" type="text" name="s" value="" />
					<input class="huangxiao1" type="submit" value="" />
				</form>
				<div class="c">
					</c>
				</div>
			</div>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('side') ) : ?><?php endif; ?>
			<div id="kongbai">
			</div>
		</div>
<?php get_footer(); ?>