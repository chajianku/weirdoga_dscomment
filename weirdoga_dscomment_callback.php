<?php
if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); } 

function callback_init() {
	global $m;
	$codedata = '<div class="alert alert-danger" role="alert"><b>错误：</b>未设置多说代码！<a href="index.php?mod=admin:setplug&plug=weirdoga_dscomment">去设置</a></div>';
	$titledata = '留言板';
	option::add('weirdoga_dscomment_code',$codedata);
	option::add('weirdoga_dscomment_title',$titledata);
}

function callback_remove() {
	global $m;
	option::del('weirdoga_dscomment_code');
	option::del('weirdoga_dscomment_title');
}
?>