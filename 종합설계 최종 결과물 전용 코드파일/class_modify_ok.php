<?php
include "db.php";
$bno = $_POST['class_idx'];
$sql = mq("update b_class set class_title='".$_POST['class_title']."',class_desc='".$_POST['class_desc']."' where class_idx='".$bno."'");
mq("set @class_idx=0");
mq("update b_class set class_idx=@class_idx:=@class_idx+1");
$bno_chk = mq("select class_idx from b_class where class_title='".$_POST['class_title']."'");
$bno_res = $bno_chk -> fetch_array();
 ?>
<script type="text/javascript">alert("수정되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/b_class_view.php?idx=<?php echo $bno_res['class_idx']; ?>">
