<?php

if (empty($menu['PDO'])) {
$menu['PDO']=array(
	'name'=> $lang['pdo_database_operations'],
	'image'=>'icon-road',
	'help'=> $lang['pdo_database_operations'],
	'page'=>'javascript:void(0);',
	'alt'=>'',
);
}

		$menu['PDO']['mid']['Connect']=array(
			'name'=> $lang['connect'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_db_connect_1'],
			'class'=>'database_pdo',
			'method'=>'pdo_db_connect_short',
		);

		$menu['PDO']['mid']['Create']=array(
			'name'=> $lang['insert'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_insert_1'],
			'class'=>'database_pdo',
			'method'=>'pdo_insert_short',
		);

		$menu['PDO']['mid']['Update']=array(
			'name'=> $lang['update'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_update_1'],
			'class'=>'database_pdo',
			'method'=>'pdo_update_short',
		);



	$menu['PDO']['mid']['Select']=array(
		'name'=> $lang['select'],
		'image'=>'icon-caret-right',
		'help'=> $lang['select_help'],
		'page'=>'javascript:void(0);',
	);

		$menu['PDO']['mid']['Select']['bottom'][]=array(
			'name'=> $lang['select_one'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_select_one'],
			'class'=>'database_pdo',
			'method'=>'pdo_select_one',
		);

		$menu['PDO']['mid']['Select']['bottom'][]=array(
			'name'=> $lang['select_many'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_select_while'],
			'class'=>'database_pdo',
			'method'=>'pdo_select_multiple',
		);

		$menu['PDO']['mid']['Select']['bottom'][]=array(
			'name'=> $lang['select_all'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_select_all'],
			'class'=>'database_pdo',
			'method'=>'pdo_select_all',
		);


	$menu['PDO']['mid']['Search']=array(
		'name'=> $lang['search'],
		'image'=>'icon-caret-right',
		'help'=> $lang['search_help'],
		'page'=>'javascript:void(0);',
	);

		$menu['PDO']['mid']['Search']['bottom'][]=array(
			'name'=> $lang['search_l'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_search_l'],
			'class'=>'database_pdo',
			'method'=>'pdo_search_left',
		);

		$menu['PDO']['mid']['Search']['bottom'][]=array(
			'name'=> $lang['search_r'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_search_r'],
			'class'=>'database_pdo',
			'method'=>'pdo_search_right',
		);

		$menu['PDO']['mid']['Search']['bottom'][]=array(
			'name'=> $lang['search_b'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_search_b'],
			'class'=>'database_pdo',
			'method'=>'pdo_search_both',
		);



		$menu['PDO']['mid']['Delete']=array(
			'name'=> $lang['delete'],
			'image'=>'icon-caret-right',
			'help'=> $lang['delete_help'],
			'class'=>'database_pdo',
			'method'=>'pdo_delete',
		);