<?php
 include "db.php";
  $bno = $_GET['idx'];
  $sql = mq("select * from b_group where group_idx='$bno';");
  $board = $sql->fetch_array();
  ?>
<?php require("fix_top.php")?>
<div class="cate_center">
  <div id="left_cate">
    <h2><a href="b_free.php?page=1"><img src="img/커뮤니티_메뉴.jpg"></a></h2>
    <p><a href="b_free.php?page=1"><img src="img/자유게시판_메뉴.jpg" onmouseover="this.src='img/자유게시판_메뉴_.jpg'" onmouseout="this.src='img/자유게시판_메뉴.jpg'" border="0"></a></p>
    <p><a href="b_group.php?page=1"><img src="img/동아리_메뉴.jpg" onmouseover="this.src='img/동아리_메뉴_.jpg'" onmouseout="this.src='img/동아리_메뉴.jpg'" border="0"></a></p>
  </div>
  <div id="right_content">
    <h2>동아리홍보 글수정하기</h2>
    <div id="write_area">
      <form action="group_modify_ok.php/<?php echo $board['group_idx']; ?>" method="post">
        <input type="hidden" name="group_idx" value="<?=$bno?>" />
        <div id="in_title">
          <textarea name="group_title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required><?php echo $board['group_title']; ?></textarea>
        </div>
        <div class="wi_line"></div>
        <div id="in_name">
          <?php echo $_SESSION['user_id'] ?>
        </div>
        <div class="wi_line"></div>
        <div id="in_content">
          <textarea name="group_desc" id="ucontent" placeholder="내용" required><?php echo $board['group_desc']; ?></textarea>
        </div>
        <div class="bt_se">
          <button type="submit">글 수정</button>
        </div>
      </form>
      <a href="b_group_view.php?idx=<?php echo $board['group_idx'];?>"><button>이전으로</button></a>
    </div>
  </div>
</div>
<?php require("fix_bottom.php")?>
