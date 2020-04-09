<?php

if (empty($menu['PHP'])) {
$menu['PHP']=array(
	'name'=> $lang['php_form_processing'],
	'image'=>'icon-cog',
	'help'=>$lang['php_form_processing_help'],
	'page'=>'javascript:void(0);',
	'alt'=>'',
);
}
	$menu['PHP']['mid']['Method']=array(
		'name'=> $lang['form_method'],
		'image'=>'icon-caret-right',
		'help'=>$lang['form_method_help'],
		'page'=>'javascript:void(0);',
		'alt'=>'',
	);
	
		$menu['PHP']['mid']['Method']['bottom'][]=array(
			'name'=> '$_POST',
			'image'=>'icon-caret-right',
			'help'=> $lang['help_post'],
			'class'=>'php_processing',
			'method'=>'method_post',
		);

		$menu['PHP']['mid']['Method']['bottom'][]=array(
			'name'=> '$_GET',
			'image'=>'icon-caret-right',
			'help'=> $lang['help_get'],
			'class'=>'php_processing',
			'method'=>'method_get',
		);

		$menu['PHP']['mid']['Method']['bottom'][]=array(
			'name'=> '$_REQUEST',
			'image'=>'icon-caret-right',
			'help'=> $lang['help_request'],
			'class'=>'php_processing',
			'method'=>'method_request',
		);


	$menu['PHP']['mid']['database_array']=array(
		'name'=> $lang['database_array'],
		'image'=>'icon-caret-right',
		'help'=>$lang['database_array_help'],
		'page'=>'javascript:void(0);',
		'alt'=>'',
	);
	
		$menu['PHP']['mid']['database_array']['bottom'][]=array(
			'name'=> $lang['key_val'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_array_1'],
			'class'=>'php_processing',
			'method'=>'array_key_val',
		);

		$menu['PHP']['mid']['database_array']['bottom'][]=array(
			'name'=> $lang['key'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_array_2'],
			'class'=>'php_processing',
			'method'=>'array_key',
		);

		$menu['PHP']['mid']['database_array']['bottom'][]=array(
			'name'=> $lang['val'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_array_3'],
			'class'=>'php_processing',
			'method'=>'array_val',
		);

		$menu['PHP']['mid']['database_array']['bottom'][]=array(
			'name'=> $lang['serialize'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_array_4'],
			'class'=>'php_processing',
			'method'=>'array_serialize',
		);

		$menu['PHP']['mid']['database_array']['bottom'][]=array(
			'name'=> $lang['unserialize'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_array_5'],
			'class'=>'php_processing',
			'method'=>'array_unserialize',
		);


	$menu['PHP']['mid']['database_echo']=array(
		'name'=> $lang['database_echo'],
		'image'=>'icon-caret-right',
		'help'=>$lang['database_echo_help'],
		'page'=>'javascript:void(0);',
		'alt'=>'',
	);

		$menu['PHP']['mid']['database_echo']['bottom'][]=array(
			'name'=> $lang['if_echo'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_echo'],
			'class'=>'php_processing',
			'method'=>'if_isset_echo',
		);

