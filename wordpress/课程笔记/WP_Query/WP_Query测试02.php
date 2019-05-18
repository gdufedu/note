<?php $my_query = new WP_Query( array( 
	/*
		按作者编号查询某个作者发布的文章信息
		'author'代表想要查看某个作者发布的文章信息，对应的值是你要查看的作者的编号。
		示例代码：
		'author'					=>		1
	*/
	
	/*
		按作者的昵称查询某个作者发布的文章信息
		'author_name'代表使用作者的昵称查询，对应的值是想要查询的作者的昵称。
		示例代码：
		'author_name'			=>		'admin'
	*/

	/*
		因为页面信息也有作者，那么怎样才能查看某个作者发布的页面信息
		特别说明：
		默认情况下……'author'	=>2…… 查询作者的发表的文章信息，而添加一行额外代码……'post_type'=>'page'……这个额外代码是告诉wordpress，你想要查询的是页面不是文章信息了。
		示例代码：
		'post_type'						=>		'page',
		'author'							=>		2
	*/

	/*
		按作者的编号，查询一个或多个作者发布的文章信息
		'author__in'	代表的是查询一个或者多个作者发布的文章信息，对应的值是作者的编号（不能为昵称）
		示例代码：
		'author__in'							=>		array(1, 2)
	*/
	
	/*
		查询除了某个作者以外的其他作者发布的文章信息。
		'author__not_in'	代表要排除某些作者并查询其他作者发布的文章信息，对应的值是要被排除的作者的编号
		示例代码：
		'author__not_in'						=>		array(2)
	*/

) ); ?>

<?php if ( $my_query->have_posts() ) : while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
	<h3><?php the_title(); ?></h3>
<?php endwhile; ?>
<?php endif; ?>


