<?php require_once("fix_top.php")?>
<div class="cate_center">
  <div id="left_cate">
    <h2><a href="intro.php?id=Mathematics"><img src="img/소개_메뉴.jpg"></a></h2>
    <p><a href="intro.php?id=Mathematics"><img src="img/수학과소개_메뉴.jpg" onmouseover="this.src='img/수학과소개_메뉴_.jpg'" onmouseout="this.src='img/수학과소개_메뉴.jpg'" border="0"></a></p>
    <p><a href="intro.php?id=Homepage"><img src="img/홈페이지 소개_메뉴.jpg" onmouseover="this.src='img/홈페이지 소개_메뉴_.jpg'" onmouseout="this.src='img/홈페이지 소개_메뉴.jpg'" border="0"></a></p>
    <p><a href="http://www.gnu.ac.kr/program/history/history60_m.jsp" target="_blink"><img src="img/경상대 소개_메뉴.jpg" onmouseover="this.src='img/경상대 소개_메뉴_.jpg'" onmouseout="this.src='img/경상대 소개_메뉴.jpg'"></a></p>
  </div>
  <div id="right_content">
    <h2><?php echo $_GET['id'];?></h2>
    <?php echo file_get_contents("intro/".$_GET['id']);?>
  </div>
</div>
<?php require_once("fix_bottom.php")?>
