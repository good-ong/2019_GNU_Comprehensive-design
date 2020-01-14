<?php
 include "db.php";
  $bno = $_GET['idx'];
  $sql = mq("select * from b_notice where notice_idx='$bno';");
  $board = $sql->fetch_array();
  ?>
<?php require("fix_top.php")?>
<div class="cate_center">
  <div id="left_cate">
    <h2><a href="b_notice.php?page=1">공지사항</a></h2>
  </div>
  <div id="right_content">
    <h2>공지사항 글수정하기</h2>
    <div id="write_area">
      <form action="notice_modify_ok.php/<?php echo $board['notice_idx']; ?>" method="post">
        <input type="hidden" name="notice_idx" value="<?=$bno?>" />
        <div id="in_title">
          <textarea name="notice_title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required><?php echo $board['notice_title']; ?></textarea>
        </div>
        <div class="wi_line"></div>
        <div id="in_name">
          <?php echo $_SESSION['user_id'] ?>
        </div>
        <div class="wi_line"></div>
        <div id="in_content">
          <textarea name="notice_desc" id="ucontent" placeholder="내용" required><?php echo $board['notice_desc']; ?></textarea>
        </div>
        <div class="bt_se">
          <button type="submit">글 수정</button>
        </div>
      </form>
      <a href="b_notice_view.php?idx=<?php echo $board['notice_idx'];?>"><button>이전으로</button></a>
    </div>
  </div>
</div>
<?php require("fix_bottom.php")?>
