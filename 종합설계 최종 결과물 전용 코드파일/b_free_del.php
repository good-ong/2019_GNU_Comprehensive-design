<?php
	include "db.php";

	$bno = $_GET['idx'];
	$sql = mq("delete from b_class where class_idx='$bno';");
	mq("set @class_idx=0");
	mq("update b_class set class_idx=@class_idx:=@class_idx+1");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/b_class.php?page=1" />
