<?php

if (empty($menu['MySQLi'])) {
$menu['MySQLi']=array(
	'name'=>'MySQLi [procedural]',
	'image'=>'icon-truck',
	'help'=>'This is a help',
	'page'=>'javascript:void(0);',
	'alt'=>'',
);
}


		$menu['MySQLi']['mid']['Connect']=array(
			'name'=> $lang['connect'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_db_connect_1'],
			'class'=>'database_mysqli',
			'method'=>'connect_short',
		);

		$menu['MySQLi']['mid']['Create']=array(
			'name'=> $lang['insert'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_insert_1'],
			'class'=>'database_mysqli',
			'method'=>'insert_short',
		);

		$menu['MySQLi']['mid']['Update']=array(
			'name'=> $lang['update'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_update_1'],
			'class'=>'database_mysqli',
			'method'=>'update_short',
		);



	$menu['MySQLi']['mid']['Select']=array(
		'name'=> $lang['select'],
		'image'=>'icon-caret-right',
		'help'=> $lang['select_help'],
		'page'=>'javascript:void(0);',
	);

		$menu['MySQLi']['mid']['Select']['bottom'][]=array(
			'name'=> $lang['select_one'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_select_one'],
			'class'=>'database_mysqli',
			'method'=>'select_one',
		);

		$menu['MySQLi']['mid']['Select']['bottom'][]=array(
			'name'=> $lang['select_many'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_select_while'],
			'class'=>'database_mysqli',
			'method'=>'select_multiple',
		);

		$menu['MySQLi']['mid']['Select']['bottom'][]=array(
			'name'=> $lang['select_all'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_select_all'],
			'class'=>'database_mysqli',
			'method'=>'select_all',
		);

		$menu['MySQLi']['mid']['Select']['bottom'][]=array(
			'name'=> $lang['count_rows'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_select_count'],
			'class'=>'database_mysqli',
			'method'=>'select_count',
		);


	$menu['MySQLi']['mid']['Search']=array(
		'name'=> $lang['search'],
		'image'=>'icon-caret-right',
		'help'=> $lang['search_help'],
		'page'=>'javascript:void(0);',
	);

		$menu['MySQLi']['mid']['Search']['bottom'][]=array(
			'name'=> $lang['search_l'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_search_l'],
			'class'=>'database_mysqli',
			'method'=>'search_left',
		);

		$menu['MySQLi']['mid']['Search']['bottom'][]=array(
			'name'=> $lang['search_r'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_search_r'],
			'class'=>'database_mysqli',
			'method'=>'search_right',
		);

		$menu['MySQLi']['mid']['Search']['bottom'][]=array(
			'name'=> $lang['search_b'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_search_b'],
			'class'=>'database_mysqli',
			'method'=>'search_both',
		);




		$menu['MySQLi']['mid']['Delete']=array(
			'name'=> $lang['delete'],
			'image'=>'icon-caret-right',
			'help'=> $lang['delete_help'],
			'class'=>'database_mysqli',
			'method'=>'delete',
		);

