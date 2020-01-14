<?php
include "db.php";
$bno = $_POST['notice_idx'];
$sql = mq("update b_notice set notice_title='".$_POST['notice_title']."',notice_desc='".$_POST['notice_desc']."' where notice_idx='".$bno."'");
mq("set @notice_idx=0");
mq("update b_notice set notice_idx=@notice_idx:=@notice_idx+1");
$bno_chk = mq("select notice_idx from b_notice where notice_title='".$_POST['notice_title']."'");
$bno_res = $bno_chk -> fetch_array();
 ?>
<script type="text/javascript">alert("수정되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/b_notice_view.php?idx=<?php echo $bno_res['notice_idx']; ?>">
