<script src="<?php bloginfo('template_url'); ?>/scripts/jquery.js?ver=1.9.1"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/jquery.poshytip.min.js?ver=1.2"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/custom.js?ver=1.0"></script>
    <?php
		if (is_single()) {
	?><script>
	//文章页图片自适应
	function responsiveImg() {
		var img_count=($('.article-content').find('img')).length;
		if (img_count != 0) {
		var maxwidth=$(".article-content").width();
		for (var i=0;i<=img_count-1;i++) {
			var max_width=$('.article-content img:eq('+i+')');
				if (max_width.width() > maxwidth) {
					max_width.addClass('responsive-img');
				}
			}
		}
	}
	$(function(){
		responsiveImg();
		window.onresize = function(){
			responsiveImg();
		}
	});
    </script><?php
		}
	?>
    <script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F9d641f9eef3918c3298de40e0876c5e5' type='text/javascript'%3E%3C/script%3E"));
</script>
    <?php wp_footer(); ?>
</body>
</html>
    