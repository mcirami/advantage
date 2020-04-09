<?php

if (empty($menu['Forms'])) {
$menu['Forms']=array(
	'name'=> $lang['forms'],
	'image'=>'icon-suitcase',
	'help'=> $lang['html_forms_help'],
	'page'=>'javascript:void(0);',
);
}

	$menu['Forms']['mid']['HTML']=array(
		'name'=> $lang['html'],
		'image'=>'icon-caret-right',
		'help'=>$lang['html_help'],
		'page'=>'javascript:void(0);',
		'alt'=>'',
	);
	
		$menu['Forms']['mid']['HTML']['bottom'][]=array(
			'name'=> $lang['form_html_input'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_db_connect_1'],
			'class'=>'forms',
			'method'=>'form_html_input',
		);

		$menu['Forms']['mid']['HTML']['bottom'][]=array(
			'name'=> $lang['form_html_input_pre'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_db_connect_2'],
			'class'=>'forms',
			'method'=>'form_html_input_pre',
		);


	$menu['Forms']['mid']['HTML5']=array(
		'name'=> $lang['html5'],
		'image'=>'icon-caret-right',
		'help'=> $lang['html5_help'],
		'page'=>'javascript:void(0);',
	);
		
		$menu['Forms']['mid']['HTML5']['bottom'][]=array(
			'name'=> $lang['form_html5_input'],
			'image'=>'icon-caret-right',
			'help'=> $lang['html5_help'],
			'class'=>'forms',
			'method'=>'form_html5_input',
		);

		$menu['Forms']['mid']['HTML5']['bottom'][]=array(
			'name'=> $lang['form_html5_input_pre'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_insert_2'],
			'class'=>'forms',
			'method'=>'form_html5_input_pre',
		);

	$menu['Forms']['mid']['obfusc']=array(
		'name'=> 'Obfuscation',
		'image'=>'icon-caret-right',
		'help'=> $lang['html5_help'],
		'page'=>'javascript:void(0);',
	);


		$menu['Forms']['mid']['obfusc']['bottom'][]=array(
			'name'=> $lang['html_obfusc_1'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_html_obfusc_1'],
			'class'=>'forms',
			'method'=>'html_obfusc_1',
		);

		$menu['Forms']['mid']['obfusc']['bottom'][]=array(
			'name'=> $lang['html_obfusc_2'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_html_obfusc_2'],
			'class'=>'forms',
			'method'=>'html_obfusc_2',
		);