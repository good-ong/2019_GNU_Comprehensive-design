<?php
session_start();
include "db.php";
$date = date('Y-m-d');
$user_id = $_SESSION['user_id'];
$sql = mq("insert into b_free(free_title, free_desc, free_date, user_id) values('".$_POST['title']."','".$_POST['content']."','".$date."','".$user_id."')");
mq("set @free_idx=0");
mq("update b_free set free_idx=@free_idx:=@free_idx+1");
$sql2 = mq("select free_idx from b_free where free_title='".$_POST['title']."'");
$sql_ok = $sql2 -> fetch_array();
?>
<script type="text/javascript">alert("글쓰기 완료되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/b_free_view.php?idx=<?php echo $sql_ok['free_idx']; ?>" />
