<?php require_once("fix_top.php")?>
    <div class="center" id="login">
      <form method='post' action='login_ok.php'>
        <table>
          <tr>
	           <td>아이디</td>
	            <td><input type='text' name='user_id' tabindex='1'/></td>
	             <td rowspan='2'><input type='submit' tabindex='3' name="login_user" value='로그인' style='height:50px'/></td>
          </tr>
          <tr>
	           <td>비밀번호</td>
	            <td><input type='password' name='user_pw' tabindex='2'/></td>
          </tr>
          <tr>
            <td><a href="http://localhost/member.php">회원가입</a></td>
          </tr>
       </table>
      </form>
    </div>
<?php require_once("fix_bottom.php")?>
