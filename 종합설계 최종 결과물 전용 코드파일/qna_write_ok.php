<?php
session_start();
include "db.php";
$date = date('Y-m-d');
$user_id = $_SESSION['user_id'];
$sql = mq("insert into b_qna(qna_title, qna_desc, qna_date, user_id) values('".$_POST['title']."','".$_POST['content']."','".$date."','".$user_id."')");
mq("set @qna_idx=0");
mq("update b_qna set qna_idx=@qna_idx:=@qna_idx+1");
$sql2 = mq("select qna_idx from b_qna where qna_title='".$_POST['title']."'");
$sql_ok = $sql2 -> fetch_array();
?>
<script type="text/javascript">alert("글쓰기 완료되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/b_qna_view.php?idx=<?php echo $sql_ok['qna_idx']; ?>" />
