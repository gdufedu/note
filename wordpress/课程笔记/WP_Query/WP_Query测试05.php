<?php 
$my_query = new WP_Query( array( 
		/*
			@成员参数tax_query, 意思是获取某一个分类方式下的分类项目所拥有的信息(比如文章信息，或页面信息)
		*/
		'tax_query'	=> array( 
								/*
									@成员参数relation, 当获取多个不同分类方式下的分类项目所拥有的信息(文章信息或页面信息)时，到底按照什么逻辑来组织？
									@可选的值
									AND			获取同时在指定分类项目下的信息
									OR			获取要么在这个要么在那个分类项目下的信息
									@特别说明
									只有当要获取两个及以上的不同分类方式下的分类项目所拥有的信息时，才使用此参数。如果仅仅是获取单独某个分类方式下的信息时，不需要使用此成员参数。
								*/
								'relation'		=>	,
								array(
													/*
														@成员参数taxonomy, 作用是明确要获取哪个分类方式下的分类项目所拥有的信息？填写分类方式的名称。
													*/
													'taxonomy'				=>	,
													/*
														@成员参数field，根据什么来指定分类项目？
														@可选的值
														term_id			分类项目的编号		默认值
														name				分类项目的名称
														slug					分类项目的别名
													*/
													'field'						=>	'term_id',
													/*
														@成员参数terms，指定要获取哪些分类项目下的信息
													*/
													'terms'						=>	array(  ),
													/*
														@成员参数include_children, 获取信息时是否获取子分类项目下的信息？
														@可选的值
														true			包含				默认值
														false		不包含
													*/
													'include_children'	=>	true,
													/*
														@成员参数operator, 成员参数terms中指定了分类项目，那么到底是获取
														@可选的值
														IN				获取成员参数terms中指定的分类项目下的信息			【默认值】
														NOT IN		获取terms参数中指定的分类项目以外的其他分类项目下的信息(在taxonomy参数指定的分类方式下)
														AND			获取同时在terms参数中指定的分类项目下的信息
													*/
													'operator'				=>	'IN',
								),
		),
	

) );
	
?>