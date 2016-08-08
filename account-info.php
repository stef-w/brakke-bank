<?php


if(isset($_POST['transaction_create'])){
	transaction_create($_GET['account'], $_POST['to_acc'], $_POST['amount'], $_POST['message']);
}



?>

<a href="<?php print user_home_link(); ?>" class="btn btn-link">Back to account overview</a>
<hr>
<h1>Account info <?php print $_GET['account'] ?> 
	<span class="pull-right">&euro; <?php print number_format(account_get_balance($_GET['account']),2,',','.')?></span></h1>

<form action="" method="post" id="transferForm">

	<h1>Transfer Money</h1>
	<p>Please transfer your moneys here</p>
	<div class="form-group">
		<label class="control-label">To account</label>
		<input class="form-control" type="text" name="to_acc">
	</div>
	<div class="form-group">
		<label class="control-label">Amount</label>
		<input class="form-control" type="text" name="amount">
	</div>
	<div class="form-group">
		<label class="control-label">message</label>
		<input class="form-control" type="text" name="message">
	</div>

	<div class="form-group">
		<input type="submit" name="transaction_create" value="Give my money away" class="btn btn-success">
	</div>

</form>


<h1>Transactions</h1>
<table class="table">
	<tr>
		<th>From</th>
		<th>To</th>
		<th>Message</th>
		<th>Amount</th>
	</tr>
	<?php foreach(account_transactions($_GET['account']) as $tr): ?>
	<tr>
		<td><?php print $tr['to_acc'] ?></td>
		<td><?php print $tr['from_acc'] ?></td>
		<td><?php print $tr['message'] ?></td>
		<td>&euro; <?php print number_format($tr['amount'],2,',','.') ?></td>
	</tr>
	<?php endforeach; ?>
</table>


