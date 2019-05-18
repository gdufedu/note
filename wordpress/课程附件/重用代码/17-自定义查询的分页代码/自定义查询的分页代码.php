<?php
/**
*	lingfeng_pagesize()函数
*	作用：修正使用WP_Query时，无法正确分页
*	在此代码段，告诉wordpress每页你要显示多少篇文章
*	设置每页显示的篇数示例代码：
*	$query->set( 'posts_per_page', 1 ); 每页显示1篇文章信息
*/
function lingfeng_pagesize( $query ) {
	/**
		示例代码1：
		作用是，设置首页显示1篇文章
		if ( is_home() ) {
			// Display only 1 post for the original blog archive
			$query->set( 'posts_per_page', 1 );
			return;
		}
	*/
   
	if ( is_admin() || ! $query->is_main_query() ) {
        return;
	}
}
add_action( 'pre_get_posts', 'lingfeng_pagesize', 1 );

/**
* 数字分页函数
* 因为wordpress默认仅仅提供简单分页
* 所以要实现数字分页，需要自定义函数
* @参数 $custom_query				自定义的查询对象【必填】
* @参数 $range								数字分页的宽度
* @返回 string|empty						输出分页的HTML代码		
*/
function lingfeng_custom_pagenavi($custom_query, $range = 4 ) {
	global $paged;
	if ( !$max_page ) {
		$max_page = $custom_query->max_num_pages;
	}
	if( $max_page >1 ) {
		echo "<div class='fenye'>"; 
		if( !$paged ){
			$paged = 1;
		}
		if( $paged != 1 ) {
			echo "<a href='".get_pagenum_link(1) ."' class='extend' title='跳转到首页'>首页</a>";
		}
		previous_posts_link('上一页');
		if ( $max_page >$range ) {
			if( $paged <$range ) {
				for( $i = 1; $i <= ($range +1); $i++ ) {
					echo "<a href='".get_pagenum_link($i) ."'";
				if($i==$paged) echo " class='current'";echo ">$i</a>";
				}
			}elseif($paged >= ($max_page -ceil(($range/2)))){
				for($i = $max_page -$range;$i <= $max_page;$i++){
					echo "<a href='".get_pagenum_link($i) ."'";
					if($i==$paged)echo " class='current'";echo ">$i</a>";
					}
				}elseif($paged >= $range &&$paged <($max_page -ceil(($range/2)))){
					for($i = ($paged -ceil($range/2));$i <= ($paged +ceil(($range/2)));$i++){
						echo "<a href='".get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";
					}
				}
			}else{
				for($i = 1;$i <= $max_page;$i++){
					echo "<a href='".get_pagenum_link($i) ."'";
					if($i==$paged)echo " class='current'";echo ">$i</a>";
				}
			}
		next_posts_link('下一页');
		if($paged != $max_page){
			echo "<a href='".get_pagenum_link($max_page) ."' class='extend' title='跳转到最后一页'>尾页</a>";
		}
		echo '<span>共['.$max_page.']页</span>';
		echo "</div>\n";  
	}
}



?>