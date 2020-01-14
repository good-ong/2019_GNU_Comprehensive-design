<?php
session_start();
include "db.php";
$date = date('Y-m-d');
$user_id = $_SESSION['user_id'];
$sql = mq("insert into b_group(group_title, group_desc, group_date, user_id) values('".$_POST['title']."','".$_POST['content']."','".$date."','".$user_id."')");
mq("set @group_idx=0");
mq("update b_group set group_idx=@group_idx:=@group_idx+1");
$sql2 = mq("select group_idx from b_group where group_title='".$_POST['title']."'");
$sql_ok = $sql2 -> fetch_array();
?>
<script type="text/javascript">alert("글쓰기 완료되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/b_group_view.php?idx=<?php echo $sql_ok['group_idx']; ?>" />
