<?php

return [
	'Test' => [
		'url' => 'http://tools.vike.xin',
		'method' => 'GET',
		'items' => [
			't' => ['type' => 'xpath', 'rule' => '//html/body/div/div/section/div/div[1]/div[1]'],
		]
	],

	'FoodsXiangke' => [
		'url' => 'https://www.xiangha.com/xiangke/tabooShow',
		'method' => 'POST',
	],

	'Mobile' => [
		'url' => 'http://tool.lu/mobile/ajax.html',
		'method' => 'POST',
	]
];
