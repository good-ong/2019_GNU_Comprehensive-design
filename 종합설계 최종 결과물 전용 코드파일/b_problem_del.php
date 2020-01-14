<?php
	include "db.php";

	$bno = $_GET['idx'];
	$sql = mq("delete from b_problem where problem_idx='$bno';");
	mq("set @problem_idx=0");
	mq("update b_problem set problem_idx=@problem_idx:=@problem_idx+1");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/b_problem.php?page=1" />
