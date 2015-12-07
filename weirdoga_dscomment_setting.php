<?php
if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); } 
if (ROLE != 'admin') { msg('权限不足！'); }

if (isset($_GET['ok'])) {
	echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>插件设置成功！</div>';
}
?>
<h2>多说留言板</h2>
<br/>
<form action="index.php?plugin=weirdoga_dscomment" method="post">
<b>标题：</b>
<input class="form-control" name="weirdoga_dscomment_title" value="<?php echo option::get('weirdoga_dscomment_title') ?>">
<br/>
<b>多说代码：</b>
<textarea class="form-control" name="weirdoga_dscomment_code" style="height:300px;"><?php echo htmlspecialchars(option::get('weirdoga_dscomment_code')) ?></textarea>
<br/><br/>
<button type="submit" class="btn btn-success" style="width:100%;">确定</button>
</form>