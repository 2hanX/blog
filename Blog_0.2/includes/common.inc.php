<?php
/**
 * @date    2018-02-03 18:34:20
 */
 
 //防止恶意调用
	if (!defined('In_404NatF')) {
		exit('Access Defined!');
	}

//转换硬路径

	define('ROOT_PATH', substr(dirname(__FILE__),0,-8)) ;

// 拒绝php低版本
	if (PHP_VERSION < '4.7.10') {
		echo 'PHP Version is too low!';
	}
?>