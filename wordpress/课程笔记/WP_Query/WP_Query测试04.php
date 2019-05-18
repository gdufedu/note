<?php $my_query = new WP_Query( array( 
	/*
		查询和某个关键词相关的所有的文章/页面信息
		's' 代表搜索在标题或内容中包含某个关键词的所有文章/页面信息，对应的值是你想要搜索的关键词
		示例代码：
		's'						=>		'李娜'
	*/

	/*
		查询所有的文章信息
		'post_type' 代表你要查询的信息类型，对应的值是你想要查询的信息类型的名称，比如post, page, attachment
		示例代码：
		'post_type'					=>	'page'			//获取所有页面信息
		'post_type'					=>	'post'			//获取所有文章信息
	*/
	
	/*
		查询所有某个年度发表的文章信息
		'year' 代表的是查询某个年份发表的所有文章信息，对应的值是具体的年份
		'monthnum'代表的是查询某个月份发表的所有文章信息
		'day' 代表查询某天发布的文章信息
		'hour'代表某个时段发布的文章信息
		'minute'代表某个分段发布的文章信息
		'second'代表某个秒段发布的文章信息
		示例代码：
		'year'							=>		2014			//查询2014年发布的文章信息
	*/

	/*
		分页相关：当查询结果不止一篇的时候，都可以用得到这些参数
		'posts_per_page'代表每页显示的信息数量，wordpress根据你的设置，每次只获取对应数量的信息，当你点击分页按钮时，wordpress再去获取下一组数据
		'offset'参数的作用，是忽略或跳过一些文章（不调用），对应的值是要忽略多少篇文章。
		'paged'参数的作用是开启分页功能，对应的值get_query_var('paged')
		特别说明：
		当WP_Query参数中包含offset，那么分页的功能就失效了。要解决这个问题，需要额外的修改。
		示例代码：
		'post_type'					=>			'post',
		'posts_per_page'		=>			5,	
		'paged'						=>			get_query_var('paged'),
		'offset'							=>			1
	*/	

	/*
		排序相关参数：
		'orderby'代表的是按照什么排序，比如按照date(发布日期)，title(按标题)，rand(随机排序)，comment_count(按照评论数量)
		'order'代表是升序还是降序排列。ASC是从低到高的升序排列，DESC从高到底的降序排列

	*/
	'post_type'						=>		'post',
	'orderby'							=>		'rand',
	'order'								=>		'DESC'



) ) ?>

<?php if ( $my_query->have_posts() ) : while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
	<h3><?php the_title(); ?></h3>
<?php endwhile; ?>
<?php else: ?>
	没有相关信息
<?php endif; ?>
<?php lingfeng_custom_pagenavi( $my_query ) ?>