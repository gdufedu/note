<?php 
/**
*	创建一种新的分类方式的代码
*/
add_action( 'init', 'lingfeng_create_taxonomies', 0);
function lingfeng_create_taxonomies() {
	/******************************************************************************************************
	*	register_taxonomy( $taxonomy, $object_type, $args )
	*	函数描述：该函数可以增加一种新的分类方式，或者修改原有的分类方式。
	*	
	*
	*******************************************************************************************************/
		/*
			@【必填参数】$taxonomy, 要增加的分类方式的名称。
			#	1. 该参数值只能包含小写字母和下划线
			#	2. 且不能与wordpress已经的定义的分类方式重名。比如，category, post_tag等。
			#	3. 除此之外，该参数值还不能与wordpress保留关键词(73个单词)重复。
			#	4. 该参数的长度不能超过32个字符
			因此，在命名新的分类方式前最好增加你的姓名作为前缀，例如lingfeng_book_category
		*/
		$taxonomy = 'lingfeng_book_category';
		
		/*
			@【必填参数】$object_type, 该参数填写的内容是指定要给哪个信息类型添加新的分类方式。
			@【参数类型】字符串或数组，当为数组时，意思是同时为多种信息类型添加分类方式。
			@【可选的值】
				post										文章信息
				page									页面信息
				attachment							附件信息
				revision								修订信息
				nav_menu_item					菜单项目
				{custom_post_type}			自定义类型的信息，填写自定义信息类型的名称
				null										暂不指定信息类型
		*/
		$object_type = 'post';

		/*
			@【可选参数】$args,  创建新的分类方式时还需要提供更多的信息，这些信息在此参数中指定
			@【参数类型】数组，其下还包含多个成员参数。
		*/
		$args = array(
			/*
				@【成员参数】【可选】labels，该参数指定分类方式的各种标记
			*/
			'labels'	=> array(
						/*
							@[成员参数]name, 分类方式的显示名称
						*/
						'name'							=>	'name'	,

						/*
							@[成员参数]singular_name, 
						*/
						'singular_name'			=>	'singular_name',

						/*
							@[成员参数]menu_name, 
						*/
						'menu_name'				=>	'menu_name',

						/*
							@[成员参数]all_items, 
						*/
						'all_items'					=>	'all_items',

						/*
							@[成员参数]edit_item, 
						*/
						'edit_item'					=>	'edit_item',

						/*
							@[成员参数]view_item, 
						*/
						'view_item'					=>	'view_item',

						/*
							@[成员参数]update_item, 
						*/
						'update_item'				=>	'update_item',

						/*
							@[成员参数]add_new_item, 
						*/
						'add_new_item'			=>	'add_new_item',

						/*
							@[成员参数]new_item_name, 
						*/
						'new_item_name'		=>	'new_item_name',

						/*
							@[成员参数]parent_item, 
						*/
						'parent_item'				=>	'parent_item',

						/*
							@[成员参数]parent_item_colon, 
						*/
						'parent_item_colon'	=>	'parent_item_colon',

						/*
							@[成员参数]search_items, 
						*/
						'search_items'			=>	'search_items',

						/*
							@[成员参数]popular_items, 
						*/
						'popular_items'			=>	'popular_items',

						/*
							@[成员参数]separate_items_with_commas, 
						*/
						'separate_items_with_commas'	=>	'separate_items_with_commas',

						/*
							@[成员参数]add_or_remove_items, 
						*/	
						'add_or_remove_items'					=>	'add_or_remove_items',

						/*
							@[成员参数]choose_from_most_used, 
						*/
						'choose_from_most_used'			=>	'choose_from_most_used',

						/*
							@[成员参数]not_found, 
						*/
						'not_found'										=>	'not_found',
			),

			/*
				@【成员参数】	public，新创建的分类方式是否可以被查询和调用
				@【可选的值】
					true				可以直接被查询和调用	
					false			不可以直接被查询和调用
				@【默认的值】	true
			*/
			'public'									=>	true,

			/*
				@【成员参数】	show_ui，是否提供用户界面用于管理分类方式？
				@【可选的值】
					true				显示用户界面
					false			不显示用户界面
				@【默认的值】	null
			*/
			'show_ui'								=>	true,

			/*
				@【成员参数】show_in_nav_menus，用户在创建菜单时是否提供分类方式的选项
				@【可选的值】
					true			用户在创建菜单时提供新的分类方式的选项
					false		用户在创建菜单时不提供新的分类方式的选项
					null			和成员参数public的值相同
				@【默认的值】	null
			*/
			'show_in_nav_menus'		=>	true,

			/*
				@【成员参数】show_tagcloud, 是否允许标签云小工具使用此分类方式
				@【可选的值】
					true				允许
					false			不允许
					null				和show_ui参数的值相同
				@【默认的值】null
			*/
			'show_tagcloud'					=>	null,

			/*
				@【成员参数】meta_box_cb, 在发布信息时，是否使用分类项目的信息框
				@【可选的值】
				false			在发布信息时，不使用分类项目的信息框
				null				使用信息框
				@【默认的值】null
			*/
			'meta_box_cb'					=>	null,

			/*
				@【成员参数】show_admin_column, 分类方式要添加到一种信息类型，在查看该种信息类型时是否显示该分类方式？
				@【可选参数】
				true			显示
				false		不显示
				@【默认的值】false
			*/
			'show_admin_column'		=>	true,

			/*
				@【成员参数】hierarchical, 分类方式是否允许层级？
				@【可选的值】
					true				允许层级（和分类目录相似）
					false			不允许层级（和标签类似）
				@【默认的值】	false
			*/
			'hierarchical'						=>	true,

			/*
				@【成员参数】	update_count_callback，不需要理解，推荐直接使用默认值
				@【默认的值】	''
			*/
			'update_count_callback'	=>	'',

			/*
				@【成员参数】query_var, 是否让查询参数失效？
				@【可选的值】
					$taxonomy			不失效				
					fasle					使失效	
				@【默认的值】	$taxonomy
				@【特别说明】建议使用默认值，在查询数据时很方便
			*/
			'query_var'							=>	$taxonomy,

			/*
				@【成员参数】rewrite
				@【可选的值】
					false					不实用固定链接即网址伪静态
					true						使用默认的网址伪静态规则
					array(xxx)			自定义网址伪静态规则
			*/
			'rewrite'								=>	array(
														/*
															@[成员参数]slug, 伪静态网址中显示的名称
															@[默认的值]$taxonomy, 也就是分类方式的名称
														*/
														'slug'					=>	$taxonomy,
														/*
															@[成员参数]with_front, 是否允许有前缀
															@[默认的值]true, 允许有前缀
														*/
														'with_front'			=>	 true,
														/*
															@[成员参数]hierarchical, 是否允许层级化网址
															@[可选的值]
															true			允许
															false		不允许
															@[默认的值]false
														*/
														'hierarchical'		=>	false,
														/*
															@[成员参数]ep_mask, 不需要理解
															@[默认的值]EP_NONE
														*/
														'ep_mask'			=>	EP_NONE,
			),

			/*
				@【成员参数】capabilities, 分类方式的操作权限
				@【默认的值】无
			*/
			'capabilities'						=>	array(
														/*
															@[成员参数]manage_terms，什么权限可以管理分类方式下的项目
															@[推荐的值]manage_categories，可以管理分类目录权限的用户有此权限
														*/
														'manage_terms'		=> 'manage_categories',
														/*
															@[成员参数]edit_terms，什么权限可以编辑分类方式下的项目
															@[推荐的值]manage_categories，可以管理分类目录权限的用户有此权限
														*/
														'edit_terms'				=> 'manage_categories',
														/*
															@[成员参数]manage_terms，什么权限可以删除分类方式下的项目
															@[推荐的值]manage_categories，可以管理分类目录权限的用户有此权限
														*/
														'delete_terms'			=> 'manage_categories',
														/*
															@[成员参数]manage_terms，什么权限可以分配分类方式下的项目
															@[推荐的值]manage_categories，可以管理分类目录权限的用户有此权限
														*/
														'assign_terms'		=> 'manage_categories',
			),

			/*
				@【成员参数】sort, 是否记录分类项目发布的顺序？
				@【可选的值】
				true			记录
				false		不记录
				@【默认的值】false
			*/
			'sort'									=>	false,

			/*
				@【成员参数】_builtin,  不需要理解，使用默认值即可
				@【默认的值】false
			*/
			'_builtin'								=>	false,
		);

	register_taxonomy( $taxonomy, $object_type, $args );

} //lingfeng_create_taxonomies()结尾


?>