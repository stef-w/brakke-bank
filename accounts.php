<div class="row" >
	<div class="col-md-12">
		<div class="jumbotron">
			<h1>Welcome <?php print $_GET['name'] ?>!</h1>
			<p>The world's crappiest banking website</p>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<h1>Banking accounts</h1>
		<?php print isset($error) ? $error : '' ?>
	

		<table class="table">
			<?php foreach(user_accounts($_SESSION['user']['id']) as $account) :  ?>
				<tr>
					<td>
						<a href="secret.php?page=account-info.php&account=<?php print $account['account'] ?>"><?php print $account['name'] ?></a></td>
					<td><?php print $account['account'] ?></td>

					<td class="text-right">&euro; <?php print number_format(account_get_balance($account['account']),2,',','.') ?></td>
				</tr>
			<?php endforeach;?>
		</table>
	</div>
</div>