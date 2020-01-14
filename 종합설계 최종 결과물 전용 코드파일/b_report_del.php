<?php
	include "db.php";

	$bno = $_GET['idx'];
	$sql = mq("delete from b_report where report_idx='$bno';");
	mq("set @report_idx=0");
	mq("update b_report set report_idx=@report_idx:=@report_idx+1");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/b_report.php?page=1" />
