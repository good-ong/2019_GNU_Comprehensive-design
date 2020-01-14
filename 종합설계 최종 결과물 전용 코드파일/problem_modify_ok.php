<?php
include "db.php";
$bno = $_POST['problem_idx'];
$sql = mq("update b_problem set problem_title='".$_POST['problem_title']."',problem_desc='".$_POST['problem_desc']."' where problem_idx='".$bno."'");
mq("set @problem_idx=0");
mq("update b_problem set problem_idx=@problem_idx:=@problem_idx+1");
$bno_chk = mq("select problem_idx from b_problem where problem_title='".$_POST['problem_title']."'");
$bno_res = $bno_chk -> fetch_array();
 ?>
<script type="text/javascript">alert("수정되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/b_problem_view.php?idx=<?php echo $bno_res['problem_idx']; ?>">
