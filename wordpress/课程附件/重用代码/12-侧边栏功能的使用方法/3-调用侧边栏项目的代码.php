<?php 
/*
调用侧边栏的思路：
首先，判断想要调用的侧边栏是否被激活。
如果已经被激活，则调用对应的侧边栏，显示其中的小工具
如果没有被激活，则显示一些信息，比如说提示用户添加小工具
参数$index，是指你想让wordpress调用哪个侧边栏？传递侧边栏的name或者id值
*/
?>
<?php if ( is_active_sidebar( $index ) ) : ?>
	 <?php dynamic_sidebar( $index ); ?>
<?php else: ?>
	//提示用户
	//或者，显示一些默认的边栏效果
<?php endif; ?>