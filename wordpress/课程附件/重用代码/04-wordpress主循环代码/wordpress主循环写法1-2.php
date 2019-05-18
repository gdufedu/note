<?php if( have_posts() ) : ?>
	<?php while( have_posts() ) : ?>
		<?php the_post(); ?>
		<!-- 在这里调用数据 -->
	<?php endwhile; ?>
<?php endif; ?>