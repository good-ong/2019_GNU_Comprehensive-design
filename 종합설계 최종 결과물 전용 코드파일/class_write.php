<?php require("fix_top.php")?>
<div class="cate_center">
  <div id="left_cate">
    <h2><a href="b_class.php?page=1"><img src="img/자료실_메뉴.jpg"></a></h2>
    <a href="b_class.php?page=1"><img src="img/수업자료_메뉴.jpg" onmouseover="this.src='img/수업자료_메뉴_.jpg'" onmouseout="this.src='img/수업자료_메뉴.jpg'" border="0"></a>
    <a href="b_report.php?page=1"><img src="img/레포트_메뉴.jpg" onmouseover="this.src='img/레포트_메뉴_.jpg'" onmouseout="this.src='img/레포트_메뉴.jpg'" border="0"></a>
    <a href="b_problem.php?page=1"><img src="img/문제모음_메뉴.jpg" onmouseover="this.src='img/문제모음_메뉴_.jpg'" onmouseout="this.src='img/문제모음_메뉴.jpg'" border="0"></a>
  </div>
  <div id="right_content">
    <h2>수업자료 글쓰기</h2>
    <div id="write_area">
      <form action="class_write_ok.php" method="post" enctype="multipart/form-data">
        <div id="in_title">
          <textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required></textarea>
        </div>
        <div class="wi_line"></div>
        <div id="in_name">
          <?php echo $_SESSION['user_id'] ?>
        </div>
        <div class="wi_line">  <input type="file" name="upfile"></div>
        <div class="wi_line"></div>
        <div id="in_content">
          <textarea name="content" id="ucontent" placeholder="내용" required></textarea>
        </div>
        <div class="bt_se">
          <button type="submit">글 작성</button>
        </div>
      </form>
      <a href="b_class.php?page=1"><button>이전으로</button></a>
    </div>
  </div>
</div>
<?php require("fix_bottom.php")?>
