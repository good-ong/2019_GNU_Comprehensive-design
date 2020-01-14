<?php require_once("fix_top.php")?>
    <div class="center" id="member">
      <form method='post' action="member_ok.php">
        <table>
          <tr>
             <td>아이디</td>
              <td><input type='text' name='user_id' tabindex='1'/></td>
          </tr>
          <tr>
              <td>비밀번호</td>
              <td><input type='password' name='user_pw' tabindex='2' style="width:150px;"/></td>
          </tr>
          <tr>
              <td>비밀번호 재확인</td>
              <td><input type='password' name='user_pw2' tabindex='2' style="width:150px;" /></td>
          </tr>
          <tr>
              <td>이름</td>
              <td><input type='text' name='user_name' tabindex='2' style="width:150px;" /></td>
          </tr>
          <tr>
              <td>전화번호</td>
              <td><input type='number' name='user_phone' tabindex='2' style="width:150px;" /></td>
          </tr>
          <tr>
              <td rowspan='1'><input type='submit' tabindex='3' name="reg_user" value='가입하기' style='height:25px '/></td>
              <td rowspan='1'><input type='submit' tabindex='3' name="no_reg" value='가입취소' style='height:25px '/></td>
          </tr>
       </table>
      </form>
    </div>
<?php require_once("fix_bottom.php")?>
