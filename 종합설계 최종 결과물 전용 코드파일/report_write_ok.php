<?php
session_start();
include "db.php";
$date = date('Y-m-d');
$user_id = $_SESSION['user_id'];
$sql = mq("insert into b_report(report_title, report_desc, report_date, user_id) values('".$_POST['title']."','".$_POST['content']."','".$date."','".$user_id."')");
mq("set @report_idx=0");
mq("update b_report set report_idx=@report_idx:=@report_idx+1");
$sql2 = mq("select report_idx from b_report where report_title='".$_POST['title']."'");
$sql_ok = $sql2 -> fetch_array();
?>
<script type="text/javascript">alert("글쓰기 완료되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/b_report_view.php?idx=<?php echo $sql_ok['report_idx']; ?>" />
