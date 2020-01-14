<?php
session_start();
include "db.php";
$date = date('Y-m-d');
$user_id = $_SESSION['user_id'];
$sql = mq("insert into b_class(class_title, class_desc, class_date, user_id) values('".$_POST['title']."','".$_POST['content']."','".$date."','".$user_id."')");
mq("set @class_idx=0");
mq("update b_class set class_idx=@class_idx:=@class_idx+1");
$sql2 = mq("select class_idx from b_class where class_title='".$_POST['title']."'");
$sql_ok = $sql2 -> fetch_array();
?>
<script type="text/javascript">alert("글쓰기 완료되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/b_class_view.php?idx=<?php echo $sql_ok['class_idx']; ?>" />
