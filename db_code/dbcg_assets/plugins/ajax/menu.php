<?php

if (empty($menu['ajax'])) {
$menu['ajax']=array(
	'name'=> $lang['pages_ajax'],
	'image'=>'icon-signout',
	'help'=> $lang['full_pages'],
	'page'=>'javascript:void(0);',
);
}
	$menu['ajax']['mid']['jquery']=array(
		'name'=> $lang['jquery_js'],
		'image'=>'icon-caret-right',
		'help'=>$lang['jquery_js_help'],
		'page'=>'javascript:void(0);',
	);



		$menu['ajax']['mid']['jquery']['bottom'][]=array(
			'name'=> $lang['jquery'].' fallback',
			'image'=>'icon-caret-right',
			'help'=> $lang['jquery'],
			'class'=>'ajax',
			'method'=>'jquery',
		);


		$menu['ajax']['mid']['jquery']['bottom'][]=array(
			'name'=> $lang['jquery'],
			'image'=>'icon-caret-right',
			'help'=> $lang['jquery'],
			'class'=>'ajax',
			'method'=>'jquery2',
		);

		$menu['ajax']['mid']['jquery']['bottom'][]=array(
			'name'=> $lang['jquery_ui'].' fallback',
			'image'=>'icon-caret-right',
			'help'=> $lang['jquery_ui'],
			'class'=>'ajax',
			'method'=>'jquery_ui',
		);

		$menu['ajax']['mid']['jquery']['bottom'][]=array(
			'name'=> $lang['jquery_ui'],
			'image'=>'icon-caret-right',
			'help'=> $lang['jquery_ui'],
			'class'=>'ajax',
			'method'=>'jquery_ui2',
		);

	$menu['ajax']['mid']['ajax']=array(
		'name'=> $lang['ajax'],
		'image'=>'icon-caret-right',
		'help'=> $lang['jquery_pages_help'],
		'page'=>'javascript:void(0);',
	);
		
		$menu['ajax']['mid']['ajax']['bottom'][]=array(
			'name'=> $lang['j_full_insert'],
			'image'=>'icon-caret-right',
			'help'=> $lang['j_full_insert'],
			'class'=>'ajax',
			'method'=>'j_full_insert',
		);

		$menu['ajax']['mid']['ajax']['bottom'][]=array(
			'name'=> $lang['j_full_update'],
			'image'=>'icon-caret-right',
			'help'=> $lang['j_full_update'],
			'class'=>'ajax',
			'method'=>'j_full_update',
		);


	$menu['ajax']['mid']['html_pages']=array(
		'name'=> $lang['html_pages'],
		'image'=>'icon-caret-right',
		'help'=>$lang['html_pages_help'],
		'page'=>'javascript:void(0);',
		'alt'=>'',
	);	

		$menu['ajax']['mid']['html_pages']['bottom'][]=array(
			'name'=> $lang['full_page_insert'],
			'image'=>'icon-caret-right',
			'help'=> $lang['full_page_insert'],
			'class'=>'ajax',
			'method'=>'full_page_insert',
		);

		$menu['ajax']['mid']['html_pages']['bottom'][]=array(
			'name'=> $lang['full_page_update'],
			'image'=>'icon-caret-right',
			'help'=> $lang['full_page_update'],
			'class'=>'ajax',
			'method'=>'full_page_update',
		);

		$menu['ajax']['mid']['html_pages']['bottom'][]=array(
			'name'=> $lang['full_page_insert_cmt'],
			'image'=>'icon-caret-right',
			'help'=> $lang['full_page_insert_cmt'],
			'class'=>'ajax',
			'method'=>'full_page_insert_cmt',
		);