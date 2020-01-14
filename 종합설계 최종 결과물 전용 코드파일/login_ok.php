<?php
session_start();
$db = mysqli_connect('localhost', 'root', '111111', 'math');
if (isset($_POST['login_user'])) {
	$id = mysqli_real_escape_string($db, $_POST['user_id']);
	$pw = mysqli_real_escape_string($db, $_POST['user_pw']);

}
	if (empty($id)) { echo "<script>alert('아이디를 입력해주세요.');history.back();</script>"; }
	elseif (empty($pw)) {	echo "<script>alert('비밀번호를 입력해주세요.');history.back();</script>"; }
	else {
		$query = "SELECT * FROM user WHERE user_id='$id' AND user_pw='$pw'";
		$results = mysqli_query($db, $query);
		$result_key = mysqli_fetch_assoc($results);
		if (mysqli_num_rows($results) == 1) {
			$_SESSION['user_id'] = $id;
			$_SESSION['user_name'] = $result_key['user_name'];
			$_SESSION['user_phone'] = $result_key['user_phone'];
			$_SESSION['success'] = "로그인 성공.";
			echo "<script>alert('로그인에 성공했습니다.');</script>";
?>
<meta http-equiv='refresh' content='0;url=index.php'>
<?php
		}
		 else {
			echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다');history.back();</script>";
		 }
	}
?>
