<?php
include "db.php";
$bno = $_POST['qna_idx'];
$sql = mq("update b_qna set qna_title='".$_POST['qna_title']."',qna_desc='".$_POST['qna_desc']."' where qna_idx='".$bno."'");
mq("set @qna_idx=0");
mq("update b_qna set qna_idx=@qna_idx:=@qna_idx+1");
$bno_chk = mq("select qna_idx from b_qna where qna_title='".$_POST['qna_title']."'");
$bno_res = $bno_chk -> fetch_array();
 ?>
<script type="text/javascript">alert("수정되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/b_qna_view.php?idx=<?php echo $bno_res['qna_idx']; ?>">
