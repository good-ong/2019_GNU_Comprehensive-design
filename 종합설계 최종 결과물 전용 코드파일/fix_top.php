<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/style.css">
    <title>세모공 - 세상의 모든 수학 공식</title>
  </head>
  <script language="javascript">
    function bookmark() {
      window.external.ADDFavorite('http://www.allofmath.com/','세모공')
    }
  </script>
  <body>
    <!--즐겨찾기, 로그인, 회원가입-->
    <div class="fix_top">
      <div class="fix_top" id="fix_top_favorite">
        <a href="javascript:bookmark()" style="font-family:바탕;"><img src="./img/즐겨찾기.jpg"></a>
      </div>
      <div class="fix_top" id="fix_top_logmem">
        <?php
        session_start();
        if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
        echo "<a href='./login.php'><img src='./img/로그인.jpg'></a> || <a href='./member.php'><img src='./img/회원가입.jpg'></a>";
        }
        else {
        $user_id = $_SESSION['user_id'];
        $user_name = $_SESSION['user_name'];
        echo "<p><strong>안녕하세요. $user_name($user_id) 님!</strong> <a href='./mylog.php'>내정보</a> || <a href='./logout.php'>로그아웃</a></p>";
        }
        ?>
      </div>
    </div>
    <!--로고-->
    <div class="fix_top_logo">
      <a href="index.php"><img src="./img/main.jpg" style="width:200px; height:150px"></a>
    </div>
    <!--검색창-->
    <form class="fix_top_search" action="search.php" method="get">
      <input type="text" name="search" placeholder="지금은 작동하지 않습니다." disabled='disabled'>
      <button class="sch_btn" type="submit" disabled='disabled'><img src="./img/검색.jpg"></button>
    </form>
    <!--카테고리-->
    <div class="fix_top_cate">
      <table border="0" cellpadding="0" cellspacing="0" align="center">
        <tr>
           <td><a href="intro.php?id=Mathematics"><img src="./img/intro.jpg"></a></td>
           <td><a href="b_notice.php?page=1"><img src="./img/notice.jpg"></a></td>
           <td><a href="course.php?id=초중등"><img src="./img/math.jpg"></a></td>
           <td><a href="b_class.php?page=1"><img src="./img/자료실.jpg"></a></td>
           <td><a href="b_free.php?page=1"><img src="./img/커뮤니티.jpg"></a></td>
           <td><a href="b_qna.php?page=1"><img src="./img/Q&A.jpg"></a></td>
        </tr>
      </table>
    </div>
