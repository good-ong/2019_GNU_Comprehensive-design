<?php require_once("fix_top.php")?>
    <div class="cate_center">
      <div id="left_cate">
        <h2><a href="course.php?id=초중등"></a><img src="img/수학공식_메뉴.jpg"></h2>
        <a href="course.php?id=초중등"><img src="img/초중_메뉴.jpg" onmouseover="this.src='img/초중_메뉴_.jpg'" onmouseout="this.src='img/초중_메뉴.jpg'" border="0"></a>
        <a href="course.php?id=고등"><img src="img/고등_메뉴.jpg"  onmouseover="this.src='img/고등_메뉴_.jpg'" onmouseout="this.src='img/고등_메뉴.jpg'" border="0"></a>
        <a href="course.php?id=대학"><img src="img/대학_메뉴.jpg"  onmouseover="this.src='img/대학_메뉴_.jpg'" onmouseout="this.src='img/대학_메뉴.jpg'" border="0"></a>
      </div>
      <div id="right_content">
        <h2><?php echo $_GET['id'];?></h2>
        <?php echo file_get_contents("course/".$_GET['id']);?>
      </div>
    </div>
<?php require_once("fix_bottom.php")?>
