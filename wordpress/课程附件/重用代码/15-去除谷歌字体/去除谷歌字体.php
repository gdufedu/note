<?php 
/**
* 说明：
*  最新版本的wordpress引入了谷歌字体服务
*  但谷歌服务在中国并不稳定
*  导致网站打开的速度很慢
*  所以要去除谷歌字体服务
*  特别提醒：
*  方式一：安装“remove-google-fonts-references”插件即可去除谷歌字体服务【推荐】	
*  方式二：将下面的代码复制到你的主题的functions.php文件中
*  注意事项#1：复制的时候，不需要复制<?php 和 ?>
*  注意事项#2：将复制的代码粘贴到你的funcions.php文件中，一定要在<?php 之间  ?>
*/
add_action( 'init', 'lingfeng_remove_open_sans' );        //在头部信息输出之前, 调用函数禁止加载
function lingfeng_remove_open_sans( ) {
	wp_deregister_style('open-sans');      //去除原名为open-sans的样式的加载
	wp_register_style('open-sans', '');      //重新注册一个名字为open-sans的样式，值为空字符串
	wp_enqueue_style('open-sans');        //将新的名为open-sans的样式插入队列
}



?>