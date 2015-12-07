<?php
/*
Plugin Name: 多说留言板
Version: 1.0
Plugin URL: http://www.weirdo.ga/
Description: 多说留言板
Author: weirdo4253
Author Email: weirdo4253@foxmail.com
Author URL: http://www.weirdo.ga/
For: V3.8+
*/
if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); }

function weirdoga_dscomment() {
	?>
	<li <?php if(isset($_GET['plugin']) && $_GET['plugin'] == 'weirdoga_dscomment') { echo 'class="active"'; } ?>><a href="index.php?pub_plugin=weirdoga_dscomment"><span class="glyphicon glyphicon-comment"></span> <?php echo option::get('weirdoga_dscomment_title') ?></a></li>
	<?php
}

addAction('navi_1','weirdoga_dscomment');
addAction('navi_7','weirdoga_dscomment');
addAction('navi_10','weirdoga_dscomment');
addAction('navi_11','weirdoga_dscomment');
?>