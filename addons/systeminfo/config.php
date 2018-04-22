<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: yangweijie <yangweijiester@gmail.com> <code-tech.diandian.com>
// +----------------------------------------------------------------------

return [
	'title'     => [//配置在表单中的键名 ,这个会是config[title]
		'title' => '显示标题:',//表单的文字
		'type'  => 'text',		 //表单的类型：text、textarea、checkbox、radio、select等
		'value' => '系统信息',			 //表单的默认值
	],
	'display'   => [
		'title' => '是否显示:',
		'type'  => 'radio',
		'options'   => [
			'1' => '显示',
			'0' => '不显示'
		],
		'value' => '1'
	]
];
