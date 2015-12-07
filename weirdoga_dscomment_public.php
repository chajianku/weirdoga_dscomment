<?php if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); }
loadhead();
?>
<h2><?php echo option::get('weirdoga_dscomment_title') ?></h2>
<?php echo option::get('weirdoga_dscomment_code') ?>
<br/><br/>
<?php echo SYSTEM_FN ?> V<?php echo SYSTEM_VER ?> // 作者: <a href="http://zhizhe8.net" target="_blank">无名智者</a> @ <a href="http://www.stus8.com/forum.php" target="_blank">StusGame GROUP</a> &amp; <a href="http://www.longtings.com/" target="_blank">mokeyjay</a>
<?php 
	$icp=option::get('icp');
		if (!empty($icp)) {
			echo ' | <a href="http://www.miitbeian.gov.cn/" target="_blank">'.$icp.'</a>';
		}
    echo '<br/>'.option::get('footer');
    doAction('footer');
?>