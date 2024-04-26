<?php
session_start();
$con = mysqli_connect("localhost", "root","admin", "umkm");
echo "Hello ".$_SESSION['username'];
?>
<form method="post" action="">
	<input name="username" type="text"> 
	<input name="paasword" type="password"> 
	<input name="blogin" type="submit" value="Login"> 
</form>

<?php
if(isset($_POST['blogin'])) {
	$email = $_POST['username'];
	$pass = md5($_POST['paasword']);
	$sql = "select name, email, password from users where email = '$email' and password = '$pass'";
	$q = mysqli_query($con, $sql);
	$nrow = mysqli_num_rows($q);
	if($nrow == 1){
		$_SESSION['username'] = $email;
		echo "Login sukses";
	}
	else
		echo "Maaf login gagal";
}

?>