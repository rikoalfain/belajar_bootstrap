<?php
if (isset($_POST['login'])) {
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	/*
	 * query ke database
	 * $db_conn didapat dari file koneksi.php
	 ***/
	$sql = "select * from users 
		where username='$username' and password=md5('$password')";
	$rs = mysql_query($sql,$db_conn) or die (mysql_error());
	if ($row=mysql_fetch_assoc($rs)) {
		// simpan variable session
		$_SESSION['user']['login']=TRUE;
		$_SESSION['user']['username']=$username;
		$_SESSION['user']['password']=$password;
		// redirect ke index.php
		header('location: index.php');
	}
	else {
		// tampilkan error
		print '<center>Proses Login GAGAL</center>';
	}
}
?>