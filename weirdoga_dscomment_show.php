<?php
if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); } 
if (ROLE != 'admin') { msg('权限不足！'); } 
{
	option::set('weirdoga_dscomment_code', htmlspecialchars_decode($_POST['weirdoga_dscomment_code']));
	option::set('weirdoga_dscomment_title', $_POST['weirdoga_dscomment_title']);
	ReDirect('index.php?mod=admin:setplug&plug=weirdoga_dscomment&ok');
}