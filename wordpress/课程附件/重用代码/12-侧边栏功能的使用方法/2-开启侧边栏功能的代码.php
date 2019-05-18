<?php
/*
register_sidebar( $args )
函数功能：开启侧边栏功能
@参数 array $args，参数是一个数组，包含多个成员参数。
所有可选的成员参数，都包含在下面的示例代码中。
*/
register_sidebar( array(
  'name'						=> '',					//侧边栏的名称
  'id'								=> ,					//侧边栏的编号
  'description'				=> '',					//侧边栏的描述
  'class'						=> '',
  'before_widget'			=> '<li id="%1$s" class="widget %2$s">',
  'after_widget'			=> '</li>',
  'before_title'				=> '<h2 class="widgettitle">',
  'after_title'					=> '</h2>' 
) );


?>