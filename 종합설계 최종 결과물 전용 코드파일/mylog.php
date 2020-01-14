<?php require_once("fix_top.php")?>
    <div style="padding-top:50px; padding-left:100px;">
      <h2>내 정보</h2>
      아이디 : <?php echo $_SESSION['user_id'] ?> <br>
      이름 : <?php echo $_SESSION['user_name'] ?> <br>
      전화번호 : <?php echo $_SESSION['user_phone'] ?> <br><br><br><br><br>
      <a href="index.php">홈으로</a>
    </div>
<?php require_once("fix_bottom.php")?>
