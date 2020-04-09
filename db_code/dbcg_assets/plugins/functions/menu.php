<?php

if (empty($menu['functions'])) {
$menu['functions']=array(
	'name'=> $lang['functions'],
	'image'=>'icon-stethoscope',
	'help'=>$lang['php_form_processing_help'],
	'page'=>'javascript:void(0);',
	'alt'=>'',
);
}
	$menu['functions']['mid']['functions']=array(
		'name'=> $lang['functions'],
		'image'=>'icon-caret-right',
		'help'=>$lang['form_method_help'],
		'page'=>'javascript:void(0);',
		'alt'=>'',
	);

		$menu['functions']['mid']['functions']['bottom'][]=array(
			'name'=> 'Clean',
			'image'=>'icon-caret-right',
			'help'=> $lang['help_post'],
			'class'=>'functions',
			'method'=>'funct_clean',
		);

		$menu['functions']['mid']['functions']['bottom'][]=array(
			'name'=> 'sql_val',
			'image'=>'icon-caret-right',
			'help'=> $lang['help_get'],
			'class'=>'functions',
			'method'=>'funct_sql_val',
		);

		$menu['functions']['mid']['functions']['bottom'][]=array(
			'name'=> 'sql_key',
			'image'=>'icon-caret-right',
			'help'=> $lang['help_request'],
			'class'=>'functions',
			'method'=>'funct_sql_key',
		);

		$menu['functions']['mid']['functions']['bottom'][]=array(
			'name'=> 'reverb',
			'image'=>'icon-caret-right',
			'help'=> $lang['help_request'],
			'class'=>'functions',
			'method'=>'funct_reverb',
		);

		$menu['functions']['mid']['functions']['bottom'][]=array(
			'name'=> 'print_x',
			'image'=>'icon-caret-right',
			'help'=> $lang['help_request'],
			'class'=>'functions',
			'method'=>'funct_print_x',
		);