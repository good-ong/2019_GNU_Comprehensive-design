<?php
	include "db.php";

	$bno = $_GET['idx'];
	$sql = mq("delete from b_notice where notice_idx='$bno';");
	mq("set @notice_idx=0");
	mq("update b_notice set notice_idx=@notice_idx:=@notice_idx+1");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/b_notice.php?page=1" />
