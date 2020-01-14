<?php

session_start();

$db = mysqli_connect('localhost', 'root', '111111', 'math');


if (isset($_POST['reg_user'])) {
	$id = mysqli_real_escape_string($db, $_POST['user_id']);
	$pw_1 = mysqli_real_escape_string($db, $_POST['user_pw']);
	$pw_2 = mysqli_real_escape_string($db, $_POST['user_pw2']);
	$name = mysqli_real_escape_string($db, $_POST['user_name']);
	$phone = mysqli_real_escape_string($db, $_POST['user_phone']);
}

	if (empty($id)) { echo "<script>alert('ID를 입력해주세요.');history.back();</script>"; }
	elseif (empty($pw_1)) { echo "<script>alert('비밀번호를 입력해주세요.');history.back();</script>"; }
	elseif ($pw_1 != $pw_2) { echo "<script>alert('비밀번호가 일치하지 않습니다.');history.back();</script>"; }
	elseif (empty($name)) { echo "<script>alert('이름을 입력해주세요.');history.back();</script>"; }
	elseif (empty($phone)) { echo "<script>alert('전화번호를 입력해주세요.');history.back();</script>"; }
	else {
		$user_check_query = "SELECT * FROM user WHERE user_id='$id' LIMIT 1";
		$result = mysqli_query($db, $user_check_query);
		$user = mysqli_fetch_assoc($result);
		if ($user['user_id'] == $id) {echo "<script>alert('해당 아이디가 이미 사용중입니다.');history.back();</script>";}
		else  {
			$pw = $pw_1;
			$query = "INSERT INTO user (user_id, user_pw, user_name, user_phone) VALUES('$id', '$pw', '$name', '$phone')";
			mysqli_query($db, $query);
      echo "<script>alert('회원가입에 성공했습니다.');</script>";
?>
<meta http-equiv='refresh' content='0;url=login.php'>
<?php
    }
  }

if(isset($_POST['no_reg'])) { header('location: index.php'); }
 ?>
