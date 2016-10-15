<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>業務管理システム Guy's System</title>
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/page.css">
<link rel="stylesheet" href="css/print.css" media="print">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/function.js"></script>
</head>
<body id="loginPage">
	<h1><a href="/"><img src="img/logo_login.png" height="62" width="255" alt="GUY’S COMPANY Oparation Management System"></a></h1>
	<section>
		<form action="top.php" method="POST" id="loginForm">
			<dl>
				<dt>ログインID</dt>
				<dd><input type="text" name="loginId" id="loginId" class="inputType01" required></dd>
				<dt>パスワード</dt>
				<dd><input type="password" name="loginPassowrd" id="loginPassowrd" minlength="5" class="inputType01" required></dd>
			</dl>
			<div class="clearfix">
				<div class="checkBox boxleft">
					<input type="checkbox" id="loginCheck" name="keepMeSignedIn">
					<label for="loginCheck">ログイン状態を記憶する</label>
				</div>
				<div class="boxRight">
					<button class="btnLogin">ログイン</button>
				</div>
			</div>
		</form>
	</section>
	<footer>© GUY’S COMPANY All Rights Reserved</footer>
</body>
</html>