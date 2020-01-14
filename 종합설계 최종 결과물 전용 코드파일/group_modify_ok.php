<?php
include "db.php";
$bno = $_POST['group_idx'];
$sql = mq("update b_group set group_title='".$_POST['group_title']."',group_desc='".$_POST['group_desc']."' where group_idx='".$bno."'");
mq("set @group_idx=0");
mq("update b_group set group_idx=@group_idx:=@group_idx+1");
$bno_chk = mq("select group_idx from b_group where group_title='".$_POST['group_title']."'");
$bno_res = $bno_chk -> fetch_array();
 ?>
<script type="text/javascript">alert("수정되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/b_group_view.php?idx=<?php echo $bno_res['group_idx']; ?>">
