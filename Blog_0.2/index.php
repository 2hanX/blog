<?php
/**
 * @date    2018-02-03 18:20:15
 */
 //防止恶意调用
	define('In_404NatF', true);

 //引入公共文件
 require dirname(__FILE__).'/includes/common.inc.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>首页</title>
<link rel="shortcut icon" href="blog.png">
<link rel="stylesheet" type="text/css" href="styles/1/basic.css">
<link rel="stylesheet" type="text/css" href="styles/1/index.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<?php 
		require ROOT_PATH.'includes/header.inc.php';
	 ?>
	<div id="list">
		<h2>帖子列表</h2>
	</div>
	<div id="user">
		<h2>新进会员</h2>
	</div>
	<div id="pics">
		<h2>最新图片</h2>
	</div>
	<?php 
		require ROOT_PATH.'includes/footer.inc.php';
	 ?>
</body>
</html>