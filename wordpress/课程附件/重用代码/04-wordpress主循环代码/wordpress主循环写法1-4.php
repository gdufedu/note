<?php 
	if( have_posts() ) { 
		while( have_posts() ) { 
			the_post(); 
?>
	<!-- 在这里调用数据 -->
<?php }} ?>