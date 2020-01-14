<?php
	include "db.php";

	$bno = $_GET['idx'];
	$sql = mq("delete from b_group where group_idx='$bno';");
	mq("set @group_idx=0");
	mq("update b_group set group_idx=@group_idx:=@group_idx+1");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/b_group.php?page=1" />
