<?php require("fix_top.php")?>
<div class="cate_center">
  <div id="left_cate">
    <h2><a href="b_class.php?page=1"><img src="img/자료실_메뉴.jpg"></a></h2>
    <a href="b_class.php?page=1"><img src="img/수업자료_메뉴.jpg" onmouseover="this.src='img/수업자료_메뉴_.jpg'" onmouseout="this.src='img/수업자료_메뉴.jpg'" border="0"></a>
    <a href="b_report.php?page=1"><img src="img/레포트_메뉴.jpg" onmouseover="this.src='img/레포트_메뉴_.jpg'" onmouseout="this.src='img/레포트_메뉴.jpg'" border="0"></a>
    <a href="b_problem.php?page=1"><img src="img/문제모음_메뉴.jpg" onmouseover="this.src='img/문제모음_메뉴_.jpg'" onmouseout="this.src='img/문제모음_메뉴.jpg'" border="0"></a>
  </div>
  <div id="right_content">
    <?php include "db.php";
  		$bno = $_GET['idx'];
  		$hit = mysqli_fetch_array(mq("select * from b_problem where problem_idx ='".$bno."'"));
  		$hit = $hit['problem_hit'] + 1;
  		$fet = mq("update b_problem set problem_hit = '".$hit."' where problem_idx = '".$bno."'");
  		$sql = mq("select * from b_problem where problem_idx='".$bno."'");
  		$board = $sql->fetch_array();
  	?>
    <div id="board_read">
	     <h2><?php echo $board['problem_title']; ?></h2>
		   <div id="user_info">
			   작성자 : <strong><?php echo $board['user_id']; ?></strong> <br>
         작성일 : <strong><?php echo $board['problem_date']; ?></strong> <br>
         조회수 : <strong><?php echo $board['problem_hit']; ?></strong>
			   <div id="bo_line"></div>
		   </div>
			 <div id="bo_content"><?php echo nl2br($board['problem_desc']); ?></div>
       <br>
       <br>
       <div id="bo_ser">
       	 <ul style="list-style-type:none;">
       	 	<li><a href="b_problem.php?page=1">[목록으로]</a></li>
          <?php if ($_SESSION['user_id']==$board['user_id'] || $_SESSION['user_id']=="admin") { ?>
       		<li><a href="b_problem_mod.php?idx=<?php echo $board['problem_idx']; ?>">[수정]</a></li>
       	 	<li><a href="b_problem_del.php?idx=<?php echo $board['problem_idx']; ?>">[삭제]</a></li>
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
