<?php

if (empty($menu['MySQL'])) {
$menu['MySQL']=array(
	'name'=>'MySQL',
	'image'=>'icon-truck',
	'help'=>'This is a help',
	'page'=>'javascript:void(0);',
	'alt'=>'',
);
}


		$menu['MySQL']['mid']['Connect']=array(
			'name'=> $lang['connect'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_db_connect_1'],
			'class'=>'database_mysql',
			'method'=>'connect_short',
		);

		$menu['MySQL']['mid']['Create']=array(
			'name'=> $lang['insert'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_insert_1'],
			'class'=>'database_mysql',
			'method'=>'insert_short',
		);

		$menu['MySQL']['mid']['Update']=array(
			'name'=> $lang['update'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_update_1'],
			'class'=>'database_mysql',
			'method'=>'update_short',
		);



	$menu['MySQL']['mid']['Select']=array(
		'name'=> $lang['select'],
		'image'=>'icon-caret-right',
		'help'=> $lang['select_help'],
		'page'=>'javascript:void(0);',
	);
	
		$menu['MySQL']['mid']['Select']['bottom'][]=array(
			'name'=> $lang['select_one'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_select_one'],
			'class'=>'database_mysql',
			'method'=>'select_one',
		);

		$menu['MySQL']['mid']['Select']['bottom'][]=array(
			'name'=> $lang['select_many'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_select_while'],
			'class'=>'database_mysql',
			'method'=>'select_multiple',
		);
	
		$menu['MySQL']['mid']['Select']['bottom'][]=array(
			'name'=> $lang['select_all'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_select_all'],
			'class'=>'database_mysql',
			'method'=>'select_all',
		);

		$menu['MySQL']['mid']['Select']['bottom'][]=array(
			'name'=> $lang['count_rows'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_select_count'],
			'class'=>'database_mysql',
			'method'=>'select_count',
		);


	$menu['MySQL']['mid']['Search']=array(
		'name'=> $lang['search'],
		'image'=>'icon-caret-right',
		'help'=> $lang['search_help'],
		'page'=>'javascript:void(0);',
	);
	
		$menu['MySQL']['mid']['Search']['bottom'][]=array(
			'name'=> $lang['search_l'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_search_l'],
			'class'=>'database_mysql',
			'method'=>'search_left',
		);

		$menu['MySQL']['mid']['Search']['bottom'][]=array(
			'name'=> $lang['search_r'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_search_r'],
			'class'=>'database_mysql',
			'method'=>'search_right',
		);
	
		$menu['MySQL']['mid']['Search']['bottom'][]=array(
			'name'=> $lang['search_b'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_search_b'],
			'class'=>'database_mysql',
			'method'=>'search_both',
		);


		$menu['MySQL']['mid']['Delete']=array(
			'name'=> $lang['delete'],
			'image'=>'icon-caret-right',
			'help'=> $lang['delete_help'],
			'class'=>'database_mysql',
			'method'=>'delete',
		);

