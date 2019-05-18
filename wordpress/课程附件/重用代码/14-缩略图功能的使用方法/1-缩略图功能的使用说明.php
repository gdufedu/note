<?php 
/*
缩略图功能的使用说明：

步骤一：开启缩略功能
开启缩略图功能要使用函数 add_theme_support($features, $arguments);

第一个参数$features的作用是，告诉wordpress你要开启什么功能。
而开启缩略图功能，参数$features的值取为 'post-thumbnails'

第二个参数$arguments的作用是，告诉wordpress哪些信息类型开启缩略图功能
wordpress站点，默认有两种信息类型，一个文章信息(post)，一个页面信息(page)

因此，如果你仅想让文章信息开启缩略图功能，则使用以下代码：
add_theme_support('post-thumbnails', array('post'));

如果你仅想让页面信息开启缩略图功能，则使用以下代码：
add_theme_support('post-thumbnails', array('page'));

如果你想开启文章信息和页面信息的缩略图功能，则使用以下代码：
add_theme_support('post-thumbnails');

特别说明：
代码要添加到你主题的functions.php文件中，否则无效。


步骤二：在发表文章时，添加特色图像。


步骤三：调用已经发布的特色图像（即缩略图）
在调用发布的特色图像，要使用到两个函数：

1. has_post_thumbnail( $post_id )   
此函数的作用是，判断某篇文章是否包含缩略图。
参数$post_id的作用，是告诉wordpress到底要判断那篇文章是否有缩略图。
一般情况下，此参数省略即可

2. the_post_thumbnail( $size, $attr )
此函数的作用是，调用缩略图。
参数$size的作用，是告诉wordpress要用什么样的尺寸来显示缩略图。
参数$size的取值，可以是如下的任何一种：
'thumbnail'               //缩略图，尺寸是你在后台中设置的大小
'medium'					 //中等图，尺寸是你在后台中设置的大小
'large'						 //大    图，尺寸是你在后台中设置的大小
'full'							 //原    图，尺寸是你上上传的原图的尺寸
array(宽度,高度)		 //宽度和高度是具体的数值，但不要带单位。

参数$attr，你可以直接忽略，不需要了解它的作用、也不需要使用它。

调用图片的思路是：
判断一篇文章是否存在缩略图，如果有的话，则显示缩略图。否则的话，显示默认的缩略图。
之所以设置默认的缩略图的原因，是为了结构统一，更加的美观。
实现这样思路的具体代码是（你可以直接复制使用）：
<?php if ( has_post_thumbnail() ) : ?>
	 <?php the_post_thumbnail( 'thumbnail' ); ?>
<?php else: ?>
	//显示默认图片
<?php endif; ?>

特别说明：
调用图片的代码，要用在模版文件中，比如index.php, archive.php等




*/




