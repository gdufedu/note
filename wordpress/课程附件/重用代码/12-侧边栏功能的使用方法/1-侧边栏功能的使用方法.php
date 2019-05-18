<?php 
/*
侧边栏功能的使用方法：

步骤一：开启侧边栏功能
开启侧边栏功能需要使用函数 register_sidebar( $args );
$args参数的默认值为(可以直接复制，可以根据自己需要修改成员参数值)：

array(
  'name'						=> __( 'Sidebar name', 'theme_text_domain' ),
  'id'								=> 'unique-sidebar-id',
  'description'				=> '',
  'class'						=> '',
  'before_widget'			=> '<li id="%1$s" class="widget %2$s">',
  'after_widget'			=> '</li>',
  'before_title'				=> '<h2 class="widgettitle">',
  'after_title'					=> '</h2>' 
)

完整的开启侧边栏功能的代码是（可直接复制，根据需要修改参数值）：
register_sidebar( array(
  'name'						=> __( 'Sidebar name', 'theme_text_domain' ),
  'id'								=> 'unique-sidebar-id',
  'description'				=> '',
  'class'						=> '',
  'before_widget'			=> '<li id="%1$s" class="widget %2$s">',
  'after_widget'			=> '</li>',
  'before_title'				=> '<h2 class="widgettitle">',
  'after_title'					=> '</h2>' 
) );




步骤二：在wordpress后台，给侧边栏添加小工具


步骤三：在模版文件中调用侧边栏
调用侧边栏时，通常会使用到两个函数：
1.  is_active_sidebar( $index )
此函数的作用，是判断参数$index所指定的侧边栏是否被激活。所谓激活，是指侧边栏中包含小工具。如果指定的侧边栏被激活，此函数的返回结果是true。否则返回false。

2.  dynamic_sidebar( $index )
此函数的做用，是调用$index指定的侧边栏。

调用侧边栏的思维：
如果$index所指定的侧边栏已经被激活了，则显示该侧边栏。否则的话，提示用户到后台添加。

实现此思维的代码：

<?php if ( is_active_sidebar( $index ) ) : ?>
	 <?php dynamic_sidebar( $index ); ?>
<?php else: ?>
	//提示用户
	//或者，显示一些默认的边栏效果
<?php endif; ?>




*/


