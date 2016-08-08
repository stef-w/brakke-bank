<?php

include('database.php');

if(isset($_POST['login'])){
	$user = user_login($_POST['login'], $_POST['password']);

	if(isset($user['name'])){
		$_SESSION['user'] = $user;
		header('Location:' . user_home_link());
		die;
	}else{
		echo 'Invalid shit';
	}
}

?><html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

</head>
<body>

<div class="container">
	<div class="row" >
		<div class="col-md-12">
			<div class="jumbotron">
				<h1>Brakke Bank</h1>
				<p>The world's crappiest banking website</p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3">
			<h1>Awesome login</h1>
			<?php print isset($error) ? $error : '' ?>
			<form method="post" action="">
				<div class="form-group">
					<label>Login:</label>
					<input class="form-control" type="text" name="login" value="<?php isset($_POST['login']) ? $_POST['login'] : '' ?>" />
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input class="form-control" type="password" name="password" value="" />
				</div>
				<div class="form-group">
				<input class="btn" type="submit" value="Login to bank account" /></div>
			</form>
		</div>
		<div class="col-md-3">
			<h1>Awesome news</h1>

		</div>
	</div>

</div>

</body>	
</html>