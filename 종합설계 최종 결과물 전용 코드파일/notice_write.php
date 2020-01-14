<?php require("fix_top.php")?>
<div class="cate_center">
  <div id="left_cate">
    <h2><a href="b_notice.php?page=1">공지사항</a></h2>
  </div>
  <div id="right_content">
    <h2>공지사항 글쓰기</h2>
    <div id="write_area">
      <form action="notice_write_ok.php" method="post">
        <div id="in_title">
          <textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required></textarea>
        </div>
        <div class="wi_line"></div>
        <div id="in_name">
          <?php echo $_SESSION['user_id'] ?>
        </div>
        <div class="wi_line"></div>
        <div id="in_content">
          <textarea name="content" id="ucontent" placeholder="내용" required></textarea>
        </div>
        <div class="bt_se">
          <button type="submit">글 작성</button>
        </div>
      </form>
      <a href="b_notice.php?page=1"><button>이전으로</button></a>
    </div>
  </div>
</div>
<?php require("fix_bottom.php")?>
