<?php 

/*
使用feed功能的完整步骤：

步骤一：
在模版文件的<head></head>元素中添加wp_head()函数
wp_head()函数要放在</head>标签之前，而且紧邻</head>标签

步骤二:
在你主题的functions.php文件中，添加一段代码，开启feed自动链接功能
代码如下：
add_theme_support('automatic-feed-links');

步骤三：
在你的模版文件中，添加一个feed链接地址。
获取feed地址的代码如下：
bloginfo('rss2_url');

*/


?>