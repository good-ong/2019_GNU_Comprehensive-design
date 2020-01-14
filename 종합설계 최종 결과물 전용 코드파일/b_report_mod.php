<?php
 include "db.php";
  $bno = $_GET['idx'];
  $sql = mq("select * from b_report where report_idx='$bno';");
  $board = $sql->fetch_array();
  ?>
<?php require("fix_top.php")?>
<div class="cate_center">
  <div id="left_cate">
    <h2><a href="b_class.php?page=1"><img src="img/자료실_메뉴.jpg"></a></h2>
    <a href="b_class.php?page=1"><img src="img/수업자료_메뉴.jpg" onmouseover="this.src='img/수업자료_메뉴_.jpg'" onmouseout="this.src='img/수업자료_메뉴.jpg'" border="0"></a>
    <a href="b_report.php?page=1"><img src="img/레포트_메뉴.jpg" onmouseover="this.src='img/레포트_메뉴_.jpg'" onmouseout="this.src='img/레포트_메뉴.jpg'" border="0"></a>
    <a href="b_problem.php?page=1"><img src="img/문제모음_메뉴.jpg" onmouseover="this.src='img/문제모음_메뉴_.jpg'" onmouseout="this.src='img/문제모음_메뉴.jpg'" border="0"></a>
  </div>
  <div id="right_content">
    <h2>공지사항 글수정하기</h2>
    <div id="write_area">
      <form action="report_modify_ok.php/<?php echo $board['report_idx']; ?>" method="post">
        <input type="hidden" name="report_idx" value="<?=$bno?>" />
        <div id="in_title">
          <textarea name="report_title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required><?php echo $board['report_title']; ?></textarea>
        </div>
        <div class="wi_line"></div>
        <div id="in_name">
          <?php echo $_SESSION['user_id'] ?>
        </div>
        <div class="wi_line"></div>
        <div id="in_content">
          <textarea name="report_desc" id="ucontent" placeholder="내용" required><?php echo $board['report_desc']; ?></textarea>
        </div>
        <div class="bt_se">
          <button type="submit">글 수정</button>
        </div>
      </form>
      <a href="b_report_view.php?idx=<?php echo $board['report_idx'];?>"><button>이전으로</button></a>
    </div>
  </div>
</div>
<?php require("fix_bottom.php")?>
