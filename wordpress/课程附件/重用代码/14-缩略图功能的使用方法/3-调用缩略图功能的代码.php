<?php
/*
调用缩略图的思路：
首先，判断是否有缩略图。
如果有，则显示缩略图
否则的话，显示默认的图片
*/
?>
<?php if ( has_post_thumbnail() ) : ?>
	 <?php the_post_thumbnail( 'thumbnail' ); ?>
<?php else: ?>
	//显示默认图片
<?php endif; ?>

