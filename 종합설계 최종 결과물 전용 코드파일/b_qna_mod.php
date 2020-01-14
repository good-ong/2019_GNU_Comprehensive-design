<?php
 include "db.php";
  $bno = $_GET['idx'];
  $sql = mq("select * from b_qna where qna_idx='$bno';");
  $board = $sql->fetch_array();
  ?>
<?php require("fix_top.php")?>
<div class="cate_center">
  <div id="left_cate">
    <h2><a href="b_qna.php?page=1">Q&A</a></h2>
  </div>
  <div id="right_content">
    <h2>Q&A 글수정하기</h2>
    <div id="write_area">
      <form action="qna_modify_ok.php/<?php echo $board['qna_idx']; ?>" method="post">
        <input type="hidden" name="qna_idx" value="<?=$bno?>" />
        <div id="in_title">
          <textarea name="qna_title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required><?php echo $board['qna_title']; ?></textarea>
        </div>
        <div class="wi_line"></div>
        <div id="in_name">
          <?php echo $_SESSION['user_id'] ?>
        </div>
        <div class="wi_line"></div>
        <div id="in_content">
          <textarea name="qna_desc" id="ucontent" placeholder="내용" required><?php echo $board['qna_desc']; ?></textarea>
        </div>
        <div class="bt_se">
          <button type="submit">글 수정</button>
        </div>
      </form>
      <a href="b_qna_view.php?idx=<?php echo $board['qna_idx'];?>"><button>이전으로</button></a>
    </div>
  </div>
</div>
<?php require("fix_bottom.php")?>
