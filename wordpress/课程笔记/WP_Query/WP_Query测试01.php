<?php //var_dump($posts);$wp_query ?>

<?php $my_query = new WP_Query( array( 
	/*
		按文章的ID编号来调用指定信息
		p代表用编号获取文章信息，30代表编号为30的那篇文章
		示例代码：
		'p'							=>			28
	*/

	/*
		按文章别名调用指定文章信息
		name代表使用文章的别名来调用文章信息，name所取的值是文章的别名
		示例代码：
		'name'						=>			'jiangxi'
	*/
	
	/*
		前面的两个案例，都是调用单篇文章信息的。
		想要调用多篇文章信息，怎么办？
		post__in代表的是要显示哪些文章，对应的值是文章的编号
		示例代码：
		'post__in'					=>			array(30, 28, 26, ...)
	*/

	/*
		如果想要显示，除了某些文章之外的所有文章，怎么办？
		post__not_in代表排除某些文章并显示其他文章，对应的值是要排除的文章编号
		示例代码：
		'post__not_in'					=>			array(30)
	*/
	
	/*
		按页面的编号调取指定页面信息
		page_id代表按照页面的编号获取页面信息，对应的值是明确要调用哪张页面
		示例代码：
		'page_id'								=>			2
	*/
	
	/*
		按页面的别名调取指定页面信息
		pagename代表按照页面的别名获取页面信息，对应的值是明确调用哪张页面
		示例代码：
		'pagename'								=>			'sample-page'
	*/
	
	/*
		如果想要获取多篇页面的信息，怎么办？
		post__in	代表是文章或者页面的编号，对应的值是明确要调用哪些文章或页面信息的。
		特别说明：应为post__in默认是调用文章信息的，所以你想要调用页面信息，需要增加 'post_type'									=>			'page'
		示例代码：
		'post_type'									=>			'page',
		'post__in'									=>			array(40, 51, 2)
	*/


) ) ?>

<?php // var_dump($my_query->posts); ?>
<?php if ($my_query->have_posts()) : while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<div><?php the_content(); ?></div>
<?php endwhile; ?>
<?php endif; ?>