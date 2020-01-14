<?php
include "db.php";
$bno = $_POST['report_idx'];
$sql = mq("update b_report set report_title='".$_POST['report_title']."',report_desc='".$_POST['report_desc']."' where report_idx='".$bno."'");
mq("set @report_idx=0");
mq("update b_report set report_idx=@report_idx:=@report_idx+1");
$bno_chk = mq("select report_idx from b_report where report_title='".$_POST['report_title']."'");
$bno_res = $bno_chk -> fetch_array();
 ?>
<script type="text/javascript">alert("수정되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/b_report_view.php?idx=<?php echo $bno_res['report_idx']; ?>">
