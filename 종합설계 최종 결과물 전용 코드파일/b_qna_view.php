<?php require("fix_top.php")?>
<div class="cate_center">
  <div id="left_cate">
    <h2><a href="b_qna.php?page=1">Q&A</a></h2>
  </div>
  <div id="right_content">
    <?php include "db.php";
  		$bno = $_GET['idx'];
  		$hit = mysqli_fetch_array(mq("select * from b_qna where qna_idx ='".$bno."'"));
  		$hit = $hit['qna_hit'] + 1;
  		$fet = mq("update b_qna set qna_hit = '".$hit."' where qna_idx = '".$bno."'");
  		$sql = mq("select * from b_qna where qna_idx='".$bno."'");
  		$board = $sql->fetch_array();
  	?>
    <div id="board_read">
	     <h2><?php echo $board['qna_title']; ?></h2>
		   <div id="user_info">
			   작성자 : <strong><?php echo $board['user_id']; ?></strong> <br>
         작성일 : <strong><?php echo $board['qna_date']; ?></strong> <br>
         조회수 : <strong><?php echo $board['qna_hit']; ?></strong>
			   <div id="bo_line"></div>
		   </div>
			 <div id="bo_content"><?php echo nl2br($board['qna_desc']); ?></div>
       <br>
       <br>
       <div id="bo_ser">
       	 <ul style="list-style-type:none;">
       	 	<li><a href="b_qna.php?page=1">[목록으로]</a></li>
          <?php if ($_SESSION['user_id']==$board['user_id'] || $_SESSION['user_id']=="admin") { ?>
       		<li><a href="b_qna_mod.php?idx=<?php echo $board['qna_idx']; ?>">[수정]</a></li>
       	 	<li><a href="b_qna_del.php?idx=<?php echo $board['qna_idx']; ?>">[삭제]</a></li>
          <?php } ?>
         </ul>
       </div>
       <br>
       <br>
     </div>
   </div>
 </div>
 <br>
<?php require("fix_bottom.php")?>
