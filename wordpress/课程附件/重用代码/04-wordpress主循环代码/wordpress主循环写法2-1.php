<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<!-- 在这里调用数据 -->
<?php endwhile; ?>
<?php else: ?>
<!--  如果没有数据则显示什么  -->
<?php endif; ?>