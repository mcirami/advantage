<?php

if (empty($menu['Statistics'])) {
$menu['Statistics']=array(
	'name'=> 'Statistics',
	'image'=>'icon-bar-chart',
	'help'=> '',
	'page'=>'javascript:void(0);',
);
}
	$menu['Statistics']['mid']['Stats']=array(
		'name'=> 'Stats',
		'image'=>'icon-caret-right',
		'help'=>'',
		'page'=>'javascript:void(0);',
	);



		$menu['Statistics']['mid']['Stats']['bottom'][]=array(
			'name'=> 'Statistics',
			'image'=>'icon-caret-right',
			'help'=> '',
			'class'=>'statistics',
			'method'=>'stats',
		);

		$menu['Statistics']['mid']['Stats']['bottom'][]=array(
			'name'=> 'Considerations',
			'image'=>'icon-caret-right',
			'help'=> '',
			'class'=>'statistics',
			'method'=>'max_cols',
		);