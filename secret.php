<?php

include('database.php');

if(!isset($_SESSION['user'])){
	header('Location:/');
	die;
}

?><html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

</head>
<body>

<div class="container">

	<?php

		$include = isset($_GET['page']) ? $_GET['page'] : 'accounts.php';

		include($include);

	?>

</div>

</body>	
</html>