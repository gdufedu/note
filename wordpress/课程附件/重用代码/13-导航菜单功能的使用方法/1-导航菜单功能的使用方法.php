<?php 
/*
导航菜单功能的使用方法：

步骤一：开启导航菜单功能
开启导航菜单功能要使用函数register_nav_menu( $location, $description );

参数$location的作用，是定义导航菜单的位置。该参数必填！
参数$description的作用，是导航菜档的详细描述。该参数必填！

开启导航菜单功能的详细代码：
register_nav_menu( 'zhudaohang', '网站的顶部导航' );     //注册一个菜单
register_nav_menu( 'dibudaohang', '网站的底部导航' );	 //注册第二个菜单


步骤二：在后台创建菜单，并设置菜单项目。最后将菜单项目和菜单位置建立关系


步骤三：模版文件中调用导航菜单
调用导航菜单要使用函数 wp_nav_menu( $args );
$args参数的默认值为(可以直接复制，可以根据自己需要修改成员参数值)：

 array(
  'theme_location'				=> '',
  'menu'								=> '',
  'container'							=> 'div',
  'container_class'				=> '',
  'container_id'					=> '',
  'menu_class'					=> 'menu',
  'menu_id'							=> '',
  'echo'								=> true,
  'fallback_cb'						=> 'wp_page_menu',
  'before'								=> '',
  'after'									=> '',
  'link_before'						=> '',
  'link_after'							=> '',
  'items_wrap'						=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
  'depth'								=> 0,
  'walker'								=> ''
)

完整的调用代码是（可直接复制使用，根据需要更改成员参数值）：
wp_nav_menu( array(
  'theme_location'				=> '',									//[保留]
  'menu'								=> '',									//[可删]
  'container'							=> 'div',							//[可删]
  'container_class'				=> '',									//[可删]
  'container_id'					=> '',									//[可删]
  'menu_class'					=> 'menu',						//[可删]
  'menu_id'							=> '',									//[可删]
  'echo'								=> true,							//[可删]
  'fallback_cb'						=> 'wp_page_menu',		//[可删]
  'before'								=> '',									//[可删]
  'after'									=> '',									//[可删]		
  'link_before'						=> '',									//[可删]
  'link_after'							=> '',									//[可删]
  'items_wrap'						=> '<ul id="%1$s" class="%2$s">%3$s</ul>',	//[可删]
  'depth'								=> 0,								//[可删]
  'walker'								=> ''									//[可删]			
) );





*/



