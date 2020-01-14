<?php
include "db.php";
$bno = $_POST['free_idx'];
$sql = mq("update b_free set free_title='".$_POST['free_title']."',free_desc='".$_POST['free_desc']."' where free_idx='".$bno."'");
mq("set @free_idx=0");
mq("update b_free set free_idx=@free_idx:=@free_idx+1");
$bno_chk = mq("select free_idx from b_free where free_title='".$_POST['free_title']."'");
$bno_res = $bno_chk -> fetch_array();
 ?>
<script type="text/javascript">alert("수정되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/b_free_view.php?idx=<?php echo $bno_res['free_idx']; ?>">
