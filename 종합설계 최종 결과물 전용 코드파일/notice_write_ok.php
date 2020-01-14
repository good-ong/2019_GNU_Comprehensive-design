<?php
session_start();
include "db.php";
$date = date('Y-m-d');
$user_id = $_SESSION['user_id'];
$sql = mq("insert into b_notice(notice_title, notice_desc, notice_date, user_id) values('".$_POST['title']."','".$_POST['content']."','".$date."','".$user_id."')");
mq("set @notice_idx=0");
mq("update b_notice set notice_idx=@notice_idx:=@notice_idx+1");
$sql2 = mq("select notice_idx from b_notice where notice_title='".$_POST['title']."'");
$sql_ok = $sql2 -> fetch_array();
?>
<script type="text/javascript">alert("글쓰기 완료되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/b_notice_view.php?idx=<?php echo $sql_ok['notice_idx']; ?>" />
