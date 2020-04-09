<?php

if (empty($menu['MySQL'])) {
$menu['MySQL Adv']=array(
	'name'=>'MySQL Adv',
	'image'=>'icon-ambulance',
	'help'=>'This is a help',
	'page'=>'javascript:void(0);',
	'alt'=>'',
);
}


	$menu['MySQL Adv']['mid']['Misc']=array(
		'name'=> $lang['misc'],
		'image'=>'icon-caret-right',
		'help'=>$lang['delete_help'],
		'page'=>'javascript:void(0);',
	);

		$menu['MySQL Adv']['mid']['Misc']['bottom'][]=array(
			'name'=> $lang['copy_table'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_copy_table'],
			'class'=>'database_mysql_adv',
			'method'=>'create_table',
		);

		$menu['MySQL Adv']['mid']['Misc']['bottom'][]=array(
			'name'=> $lang['find_dups'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_find_dups'],
			'class'=>'database_mysql_adv',
			'method'=>'find_dups',
		);

		$menu['MySQL Adv']['mid']['Misc']['bottom'][]=array(
			'name'=> $lang['pagination'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_pagination'],
			'class'=>'database_mysql_adv',
			'method'=>'pagination',
		);

	$menu['MySQL Adv']['mid']['DDL']=array(
		'name'=> $lang['ddl'],
		'image'=>'icon-caret-right',
		'help'=>$lang['ddl_help'],
		'page'=>'javascript:void(0);',
	);

		$menu['MySQL Adv']['mid']['DDL']['bottom'][]=array(
			'name'=> $lang['dd_table_list'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_dd_table_list'],
			'class'=>'database_mysql_adv',
			'method'=>'dd_table_list',
		);

		$menu['MySQL Adv']['mid']['DDL']['bottom'][]=array(
			'name'=> $lang['dd_column_list'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_dd_column_list'],
			'class'=>'database_mysql_adv',
			'method'=>'dd_column_list',
		);

		$menu['MySQL Adv']['mid']['DDL']['bottom'][]=array(
			'name'=> $lang['select_maker'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_select_maker'],
			'class'=>'database_mysql_adv',
			'method'=>'select_maker',
		);


	$menu['MySQL Adv']['mid']['Auto']=array(
		'name'=> $lang['auto_inc'],
		'image'=>'icon-caret-right',
		'help'=>$lang['delete_help'],
		'page'=>'javascript:void(0);',
	);

		$menu['MySQL Adv']['mid']['Auto']['bottom'][]=array(
			'name'=> $lang['auto_incre_safe'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_auto_incre_safe'],
			'class'=>'database_mysql_adv',
			'method'=>'auto_incre_safe',
		);

		$menu['MySQL Adv']['mid']['Auto']['bottom'][]=array(
			'name'=> $lang['auto_incre'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_auto_incre'],
			'class'=>'database_mysql_adv',
			'method'=>'auto_incre',
		);


		$menu['MySQL Adv']['mid']['Auto']['bottom'][]=array(
			'name'=> $lang['auto_incre_alt'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_auto_incre_alt'],
			'class'=>'database_mysql_adv',
			'method'=>'auto_incre_alt',
		);

	$menu['MySQL Adv']['mid']['InsertDup']=array(
		'name'=> $lang['insertdup'],
		'image'=>'icon-caret-right',
		'help'=>$lang['delete_help'],
		'page'=>'javascript:void(0);',
	);


		$menu['MySQL Adv']['mid']['InsertDup']['bottom'][]=array(
			'name'=> $lang['insert_dup'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_insert_dup'],
			'class'=>'database_mysql_adv',
			'method'=>'insert_dup',
		);

		$menu['MySQL Adv']['mid']['InsertDup']['bottom'][]=array(
			'name'=> $lang['insert_dup2'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_insert_dup2'],
			'class'=>'database_mysql_adv',
			'method'=>'insert_dup2',
		);