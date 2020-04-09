<?php

if (empty($menu['Misc'])) {
$menu['Misc']=array(
	'name'=>'Misc',
	'image'=>'icon-shopping-cart',
	'help'=>'This is a help',
	'page'=>'javascript:void(0);',
);
}
	$menu['Misc']['mid']['Lists']=array(
		'name'=> 'Lists',
		'image'=>'icon-caret-right',
		'help'=> 'Misc',
		'page'=>'javascript:void(0);',
	);
	
		$menu['Misc']['mid']['Lists']['bottom'][]=array(
			'name'=> $lang['list_tables'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_list_tables'],
			'class'=>'misc',
			'method'=>'list_tables',
		);

		$menu['Misc']['mid']['Lists']['bottom'][]=array(
			'name'=> $lang['list_columns'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_list_columns'],
			'class'=>'misc',
			'method'=>'list_column',
		);