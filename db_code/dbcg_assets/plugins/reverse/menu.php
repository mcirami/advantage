<?php

if (empty($menu['Reverse'])) {
$menu['Reverse']=array(
	'name'=>'Reverse',
	'image'=>'icon-retweet',
	'help'=>'This is a help',
	'page'=>'javascript:void(0);',
);
}
	$menu['Reverse']['mid']['Form']=array(
		'name'=> 'Form',
		'image'=>'icon-caret-right',
		'help'=> 'Reverse',
		'page'=>'javascript:void(0);',
	);
	
		$menu['Reverse']['mid']['Form']['bottom'][]=array(
			'name'=> $lang['reverse_form'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_reverse_form'],
			'class'=>'reverse',
			'method'=>'reverse_form',
		);

	$menu['Reverse']['mid']['Table']=array(
		'name'=> 'Table',
		'image'=>'icon-caret-right',
		'help'=> 'Reverse',
		'page'=>'javascript:void(0);',
	);

		$menu['Reverse']['mid']['Table']['bottom'][]=array(
			'name'=> $lang['reverse_table'],
			'image'=>'icon-caret-right',
			'help'=> $lang['help_reverse_table'],
			'class'=>'reverse',
			'method'=>'reverse_table',
		);