<?php
session_start();
ini_set('allow_url_include','On');
ini_set('allow_url_fopen','On');
$config = parse_ini_file('config.ini');


$connection = mysql_connect($config['db_host'], $config['db_user'], $config['db_pass']);
mysql_select_db('brakke_bank');


function query_row($query){

	$res = mysql_query($query) or die (mysql_error());
	return mysql_fetch_array($res);
}

function query($query){

	return mysql_query($query) or die (mysql_error());
}

function query_rows($query)
{

	$results = [];
	$res = mysql_query($query) or die (mysql_error());
	while($row = mysql_fetch_assoc($res)){
		$results[] = $row;
	}
	return $results;
}

function user_accounts($userid)
{
	$query = "SELECT * FROM accounts WHERE user_id = '$userid'";
	return query_rows($query);
}

function user_login($login, $password)
{
	$query = "SELECT * FROM users WHERE login = '$login' AND password='$password'";
	return query_row($query);
}

function user_home_link(){
	return '/secret.php?name=' . $_SESSION['user']['name'];
}

function account_transactions($account){
	$results = [];
	$query = "SELECT * FROM transactions WHERE to_acc = '$account' OR from_acc = '$account'";
	$res = mysql_query($query) or die (mysql_error());
	while($row = mysql_fetch_assoc($res)){
		$results[] = $row;
	}
	return $results;
}

function account_get_balance($account)
{
	$in = query_row("SELECT SUM(amount) as 's' FROM transactions WHERE to_acc = '$account' ");
	$out = query_row("SELECT SUM(amount) as s FROM transactions WHERE from_acc='$account' ");

	return $in['s'] - $out['s'];
}

function transaction_create($from, $to, $amount, $message)
{	
	query("INSERT INTO transactions (from_acc, to_acc, amount, message) VALUES('$from', '$to','$amount','$message')");
}













