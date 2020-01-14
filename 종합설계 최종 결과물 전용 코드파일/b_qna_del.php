<?php
	include "db.php";

	$bno = $_GET['idx'];
	$sql = mq("delete from b_qna where qna_idx='$bno';");
	mq("set @qna_idx=0");
	mq("update b_qna set qna_idx=@qna_idx:=@qna_idx+1");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/b_qna.php?page=1" />
