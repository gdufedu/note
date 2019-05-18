<?php 
/*
add_theme_support($features, $arguments)
函数功能：开启缩略图功能
@参数 string $features, 此参数是告诉wordpress你要开启什么功能
@参数 array $arguments, 此参数是告诉wordpress哪些信息类型想要开启缩略图
第二个参数如果不填写，那么文章信息和页面信息都开启缩略图功能。
*/
add_theme_support('post-thumbnails');


/*
	add_image_size( $name, $width, $height, $crop )
	函数功能：增加一种新尺寸的图片

	特别说明：
	一般情况下，当你上传一张图片时，除了上传的原图外，wordpress还会把原图结成三种尺寸的图片，一个是“缩略图”， 一个是“中等尺寸图”，一个是“大尺寸图片”。
	如果你的网站，需要两种尺寸的缩略图，比如一个是150*150， 一个是150*180。而你在上传图片时，wordpress默认只能生成一种尺寸的。
	而通过此函数，可以让wordpress在原图的基础上修改出两种尺寸的缩略图

	@参数$name, 增加的新尺寸图片的名称。比如,thumbnail代表的是缩略图，medium代表的是中等尺寸图，large代表的是大尺寸图，full代表的是完整尺寸图。那么你新创建的这个尺寸的图片，叫什么名字？你自己命名即可

	@参数$width,	代表的是你设置的新尺寸的宽度是多少？填写数字，不用写单位。因为单位默认为像素即px

	@参数$height, 代表的是你设置的新尺寸的高度是多少？填写数字，不用单位

	@参数$crop, 代表的是压缩模式还是剪切模式。

	范例：
	//当上传图片时，给我新生成一种尺寸的图片。尺寸为300*200, 缩放模式
	add_image_size( 'cat-thumb', 300, 200, false ); 

	// 当上传图片时，给我新生成一种尺寸的图片。尺寸为220*180, 裁剪模式
	add_image_size( 'hom-thumb', 220, 180, true ); 
*/
?>