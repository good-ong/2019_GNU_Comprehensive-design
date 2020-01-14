<?php require("fix_top.php")?>
<div class="cate_center">
  <div id="left_cate">
    <h2><a href="b_class.php?page=1"><img src="img/자료실_메뉴.jpg"></a></h2>
    <a href="b_class.php?page=1"><img src="img/수업자료_메뉴.jpg" onmouseover="this.src='img/수업자료_메뉴_.jpg'" onmouseout="this.src='img/수업자료_메뉴.jpg'" border="0"></a>
    <a href="b_report.php?page=1"><img src="img/레포트_메뉴.jpg" onmouseover="this.src='img/레포트_메뉴_.jpg'" onmouseout="this.src='img/레포트_메뉴.jpg'" border="0"></a>
    <a href="b_problem.php?page=1"><img src="img/문제모음_메뉴.jpg" onmouseover="this.src='img/문제모음_메뉴_.jpg'" onmouseout="this.src='img/문제모음_메뉴.jpg'" border="0"></a>
  </div>
  <div id="right_content">
    <?php
    include "db.php";
    $result = mq('select count(*) as cnt from b_report');
    $row = $result->fetch_assoc();
    $total = $row['cnt']; //전체 게시글의 수

    // $total_count 게시물 수
    // $page list.php?page=1
    // $limit 한 화면에 뿌려질 글 수
    // $link [1] [2] [3] [4]...
    function pageList($total_count=0, $page=1, $limit=10, $link=10) {
      // total_count=13일 경우
      $total_page = @ceil( $total_count / $limit ); // total_page=2
      if($page <= 1)
      {
        $page = 1;
      }
      else if($total_page < $page)
      {
        $page = $total_page;
      }
      $start_limit = ($page-1) * $limit; // start_limit=10
      if($total_count < $limit)
      {
        $end_limit = $total_count;
      }
      elseif($page == $total_page)
      {
        $end_limit = $total_count - ($limit * ($total_page - 1) ); // end_limit=3
      }
      else
      {
        $end_limit = $limit;
      }
      $prev = $page - 1;
      $next = $page + 1;
      if($total_count <= 0)
      {
      $prev = 0;
      $next = 0;
      }
      $start = ((@ceil($page/$link)-1) * $link) + 1;
      $end = $start + $link -1;
      if($end > $total_page)
      {
        $end = $total_page;
      }
      foreach(range($start, $end) as $val)
      {
        $row[] = $val;
      }
      return array(
        'total_page' => $total_page,
        'page' => $page,
        'prev' => $prev,
        'next' => $next,
        'list' => $row
      );
    }
    ?>

    <h2>레포트</h2>
    다양한 레포트를 확인할 수 있습니다.
    <div style="padding-bottom:50px;">
      <table class="list-table" width="850" style="text-align:center;">
        <thead>
          <tr>
            <th width="50">순번</th>
            <th width="500">제목</th>
            <th width="120">작성자</th>
            <th width="100">작성일</th>
            <th width="70">조회수</th>
          </tr>
        </thead>
        <?php
        $page_list = ($_GET['page']-1) * 10;
        $sql = mq("select * from b_report order by report_idx desc limit ".$page_list.", 10");
        while($board = $sql->fetch_array()) {
          $title=$board["report_title"];
          if(strlen($title)>30) {
            $title=str_replace($board["report_title"],mb_substr($board["report_title"],0,30,"utf-8")."...",$board["report_title"]); //title이 30을 넘어서면 ...표시
          }
        ?>
        <tbody>
          <tr>
            <td width="70"><a href="b_report_view.php?idx=<?php echo $board["report_idx"];?>"><?php echo $board['report_idx']; ?></a></td>
            <td width="500"><a href="b_report_view.php?idx=<?php echo $board["report_idx"];?>"><?php echo $title;?></a></td>
            <td width="120"><?php echo $board['user_id']?></td>
            <td width="100"><?php echo $board['report_date']?></td>
            <td width="100"><?php echo $board['report_hit']; ?></td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
      <div id="write_btn">
        <?php $list = pageList( $total, $_GET['page'] ); ?>
        <table>
          <tr>
          <?php if ($_GET['page'] > 1) {?>
            <td width="125" style="text-align:right;"><a href="b_report.php?page=<?php echo $list['prev']; ?>">prev</a></td>
          <?php } else { ?>
            <td width="125" style="text-align:right;"> - </td>
          <?php } ?>
            <td width="600" style="text-align:center;">
              <?php
              foreach($list['list'] as $w)
              {
                echo "<a href='b_report.php?page=".$w."'>".$w."</a> ";
              }
              ?>
            </td>
          <?php if ($_GET['page'] < $list['total_page']) {?>
            <td width="125" style="text-align:left;"><a href="b_report.php?page=<?php echo $list['next']; ?>">next</a></td>
          <?php } else { ?>
            <td width="125" style="text-align:left;"> - </td>
          <?php } ?>
          </tr>
        </table>
        <br>
        <table>
          <tr>
            <td width="300">
              <form method="get">
                <input type='number' name='page'
                value="<?php echo $list['page'] ?>" size="4" onclick="this.select()"/>/
                <input value="<?php echo $list['total_page']; ?>" size="4" disabled/>
                <input type="submit" value="GO"/>
              </form>
            </td>
            <td width="500" style="text-align:right;">
              <?php if ($user_id){?>
              <a href="report_write.php"><button>글쓰기</button></a>
              <?php } ?>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<br>
<?php require("fix_bottom.php")?>
