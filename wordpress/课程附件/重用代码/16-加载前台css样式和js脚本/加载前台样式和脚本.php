<?php
/**
* 加载前台脚本和样式表
* 加载主样式表style.css
*/
add_action('wp_enqueue_scripts', 'lingfeng_scripts');
function lingfeng_scripts() {
	/**
	* wp_enqueue_style( $handle, $src, $deps, $ver, $media );
	* 功能：添加样式表
	* @Param string $handle				【必填】样式表的标识符（名称）
	* @Param string $src						【可选】样式表的所在地址（url）
	* @Param array $deps					【可选】加载本样式之前，必须首先加载的
	* @Param string $ver						【可选】样式表的版本
	* @Param boolen $media				【可选】样式表指定的媒体
	* 例如：wp_enqueue_style( 'lingfeng-style', get_stylesheet_uri() );
	* 加载主题中的style.css文件
	*/
	

	/**
	* wp_register_script( $handle, $src, $deps, $ver, $in_footer ) 
	* 函数功能：加载js脚本
	* @Param string $handle				【必填】脚本的标识符（名称）
	* @Param string $src						【可选】脚本所在地址（url）
	* @Param array $deps					【可选】加载本脚本之前，必须首先加载的
	* @Param string $ver						【可选】脚本的版本
	* @Param boolen $in_footer			【可选】脚本的位置，是否放在页脚
	* 函数说明，仅仅是注册和备案，并没有真正添加。
	* 真正要添加脚本，用wp_enqueue_script( ) 函数
	* 例如：wp_register_script ('lingfeng-lazyload', get_template_directory_uri().'/js/jquery.lazyload.js');
	* 解释：注册一个名字为'lingfeng-lazyload'的脚本，脚本的地址是主题文件夹下的js/juqery.lazyload.js
	*/
	

	/**
	* wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer )
	* 函数功能：加载js脚本
	* @Param string $handle				【必填】脚本的标识符（名称）
	* @Param string $src						【可选】脚本所在地址（url）
	* @Param array $deps					【可选】加载本脚本之前，必须首先加载的
	* @Param string $ver						【可选】脚本的版本
	* @Param boolen $in_footer			【可选】脚本的位置，是否放在页脚
	* 例如: wp_enqueue_script ('lingfeng-tool', get_template_directory_uri().'/js/tool.js', array( 'jquery', 'lingfeng-lazyload'));
	* 解释：添加名字为‘lingfeng-tool’的脚本，脚本的地址为主题目录下的js/tool.js，而且在加载此脚本之前先要加载名字叫做'jquery'和'lingfeng-lazyload'的脚本
	*/

}




?>