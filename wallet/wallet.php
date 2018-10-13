<?php
SESSION_START();
include 'config.php';

$walletmoney = $_POST['wallet'];

//Show all error, remove it once you finished you code.
ini_set('display_errors', 1);
//Include TrueWallet class.
include_once('manager/TrueWallet.php');
$wallet = new TrueWallet();
//Login with your username and password.

$username = "Email Wallet";
$password = "Pass Wallet";
//Logout incase your previous session still exist, no need if you only use 1 user.
$wallet->logout();

//Login into TrueWallet
if($wallet->login($username,$password)){

	$profile = $wallet->get_profile();

	$transaction = $wallet->get_transactions();
	//เช็ค ย้อนหลัง 10 อัน

	for($i = 0;$i < 10;$i++){

			$report = $wallet->get_report($transaction[$i]->reportID);

			$checkid = $report->section4->column2->cell1->value; //เลขที่อ้างอิง

			$money = $report->section3->column1->cell1->value; //จำนวนเงิน


			//เช็คเลขที่อ้างอินกับจำนวนเงินที่โอนมา ถ้าไม่ตรงเงือนไข จะแสดง    รายการผิดพลาดลองใหม่อีกครั้ง
			if($walletmoney == $checkid && $money == 10){
				$sql = "select * from users where username='".$_SESSION['user']['username']."'";
				$sqle = "select * from histrory where NumberWallet='$walletmoney'";
				$query = mysqli_query($con,$sqle);
				$result = mysqli_fetch_assoc($query);
				// ถ้า status กับเลขที่อ้างอิง ไม่มี
				if($result['status'] == ''){
					echo 'คุณได้เติมเงินจำนวน '.$money.'  บาทสำเร็จ';
					$sql = "insert into histrory (NumberWallet,money,username,status) values ('$walletmoney','$money','".$_SESSION['user']['username']."',1)";
					mysqli_query($con,$sql);
					$sql1 = "insert into users (saldo) values ('$money') where username='".$_SESSION['user']['username']."'";
					$sql1 = "update users set saldo=saldo+'".$money."'where username='".$_SESSION['user']['username']."'";
					mysqli_query($con,$sql1) or die; ('Error Query');
				}else{
					echo 'หมายเลขอ้างอิงนี้ถูกใช้งานแล้ว';
				}
				break;
			}else if($walletmoney == $checkid && $money == 20){
				$sql = "select * from users where username='".$_SESSION['user']['username']."'";
				$sqle = "select * from histrory where NumberWallet='$walletmoney'";
				$query = mysqli_query($con,$sqle);
				$result = mysqli_fetch_assoc($query);
				if($result['status'] == ''){
					echo 'คุณได้เติมเงินจำนวน '.$money.'  บาทสำเร็จ';
					$sql = "insert into histrory (NumberWallet,money,username,status) values ('$walletmoney','$money','".$_SESSION['user']['username']."',1)";
					mysqli_query($con,$sql);
					$sql1 = "insert into users (saldo) values ('$money') where username='".$_SESSION['user']['username']."'";
					$sql1 = "update users set saldo=saldo+'".$money."'where username='".$_SESSION['user']['username']."'";
					mysqli_query($con,$sql1) or die; ('Error Query');
				}else{
					echo 'หมายเลขอ้างอิงนี้ถูกใช้งานแล้ว';
				}
				break;
				}else if($walletmoney == $checkid && $money == 30){
				$sql = "select * from users where username='".$_SESSION['user']['username']."'";
				$sqle = "select * from histrory where NumberWallet='$walletmoney'";
				$query = mysqli_query($con,$sqle);
				$result = mysqli_fetch_assoc($query);
				if($result['status'] == ''){
					echo 'คุณได้เติมเงินจำนวน '.$money.'  บาทสำเร็จ';
					$sql = "insert into histrory (NumberWallet,money,username,status) values ('$walletmoney','$money','".$_SESSION['user']['username']."',1)";
					mysqli_query($con,$sql);
					$sql1 = "insert into users (saldo) values ('$money') where username='".$_SESSION['user']['username']."'";
					$sql1 = "update users set saldo=saldo+'".$money."'where username='".$_SESSION['user']['username']."'";
					mysqli_query($con,$sql1) or die; ('Error Query');
				}else{
					echo 'หมายเลขอ้างอิงนี้ถูกใช้งานแล้ว';
				}
				break;
				}else if($walletmoney == $checkid && $money == 40){
				$sql = "select * from users where username='".$_SESSION['user']['username']."'";
				$sqle = "select * from histrory where NumberWallet='$walletmoney'";
				$query = mysqli_query($con,$sqle);
				$result = mysqli_fetch_assoc($query);
				if($result['status'] == ''){
					echo 'คุณได้เติมเงินจำนวน '.$money.'  บาทสำเร็จ';
					$sql = "insert into histrory (NumberWallet,money,username,status) values ('$walletmoney','$money','".$_SESSION['user']['username']."',1)";
					mysqli_query($con,$sql);
					$sql1 = "insert into users (saldo) values ('$money') where username='".$_SESSION['user']['username']."'";
					$sql1 = "update users set saldo=saldo+'".$money."'where username='".$_SESSION['user']['username']."'";
					mysqli_query($con,$sql1) or die; ('Error Query');
				}else{
					echo 'หมายเลขอ้างอิงนี้ถูกใช้งานแล้ว';
				}
				break;
				}else if($walletmoney == $checkid && $money == 50){
				$sql = "select * from users where username='".$_SESSION['user']['username']."'";
				$sqle = "select * from histrory where NumberWallet='$walletmoney'";
				$query = mysqli_query($con,$sqle);
				$result = mysqli_fetch_assoc($query);
				if($result['status'] == ''){
					echo 'คุณได้เติมเงินจำนวน '.$money.'  บาทสำเร็จ';
					$sql = "insert into histrory (NumberWallet,money,username,status) values ('$walletmoney','$money','".$_SESSION['user']['username']."',1)";
					mysqli_query($con,$sql);
					$sql1 = "insert into users (saldo) values ('$money') where username='".$_SESSION['user']['username']."'";
					$sql1 = "update users set saldo=saldo+'".$money."'where username='".$_SESSION['user']['username']."'";
					mysqli_query($con,$sql1) or die; ('Error Query');
				}else{
					echo 'หมายเลขอ้างอิงนี้ถูกใช้งานแล้ว';
				}
				break;
				}else if($walletmoney == $checkid && $money == 60){
				$sql = "select * from users where username='".$_SESSION['user']['username']."'";
				$sqle = "select * from histrory where NumberWallet='$walletmoney'";
				$query = mysqli_query($con,$sqle);
				$result = mysqli_fetch_assoc($query);
				if($result['status'] == ''){
					echo 'คุณได้เติมเงินจำนวน '.$money.'  บาทสำเร็จ';
					$sql = "insert into histrory (NumberWallet,money,username,status) values ('$walletmoney','$money','".$_SESSION['user']['username']."',1)";
					mysqli_query($con,$sql);
					$sql1 = "insert into users (saldo) values ('$money') where username='".$_SESSION['user']['username']."'";
					$sql1 = "update users set saldo=saldo+'".$money."'where username='".$_SESSION['user']['username']."'";
					mysqli_query($con,$sql1) or die; ('Error Query');
				}else{
					echo 'หมายเลขอ้างอิงนี้ถูกใช้งานแล้ว';
				}
				break;
				}else if($walletmoney == $checkid && $money == 70){
				$sql = "select * from users where username='".$_SESSION['user']['username']."'";
				$sqle = "select * from histrory where NumberWallet='$walletmoney'";
				$query = mysqli_query($con,$sqle);
				$result = mysqli_fetch_assoc($query);
				if($result['status'] == ''){
					echo 'คุณได้เติมเงินจำนวน '.$money.'  บาทสำเร็จ';
					$sql = "insert into histrory (NumberWallet,money,username,status) values ('$walletmoney','$money','".$_SESSION['user']['username']."',1)";
					mysqli_query($con,$sql);
					$sql1 = "insert into users (saldo) values ('$money') where username='".$_SESSION['user']['username']."'";
					$sql1 = "update users set saldo=saldo+'".$money."'where username='".$_SESSION['user']['username']."'";
					mysqli_query($con,$sql1) or die; ('Error Query');
				}else{
					echo 'หมายเลขอ้างอิงนี้ถูกใช้งานแล้ว';
				}
				break;
				}else if($walletmoney == $checkid && $money == 80){
				$sql = "select * from users where username='".$_SESSION['user']['username']."'";
				$sqle = "select * from histrory where NumberWallet='$walletmoney'";
				$query = mysqli_query($con,$sqle);
				$result = mysqli_fetch_assoc($query);
				if($result['status'] == ''){
					echo 'คุณได้เติมเงินจำนวน '.$money.'  บาทสำเร็จ';
					$sql = "insert into histrory (NumberWallet,money,username,status) values ('$walletmoney','$money','".$_SESSION['user']['username']."',1)";
					mysqli_query($con,$sql);
					$sql1 = "insert into users (saldo) values ('$money') where username='".$_SESSION['user']['username']."'";
					$sql1 = "update users set saldo=saldo+'".$money."'where username='".$_SESSION['user']['username']."'";
					mysqli_query($con,$sql1) or die; ('Error Query');
				}else{
					echo 'หมายเลขอ้างอิงนี้ถูกใช้งานแล้ว';
				}
				break;
				}else if($walletmoney == $checkid && $money == 90){
				$sql = "select * from users where username='".$_SESSION['user']['username']."'";
				$sqle = "select * from histrory where NumberWallet='$walletmoney'";
				$query = mysqli_query($con,$sqle);
				$result = mysqli_fetch_assoc($query);
				if($result['status'] == ''){
					echo 'คุณได้เติมเงินจำนวน '.$money.'  บาทสำเร็จ';
					$sql = "insert into histrory (NumberWallet,money,username,status) values ('$walletmoney','$money','".$_SESSION['user']['username']."',1)";
					mysqli_query($con,$sql);
					$sql1 = "insert into users (saldo) values ('$money') where username='".$_SESSION['user']['username']."'";
					$sql1 = "update users set saldo=saldo+'".$money."'where username='".$_SESSION['user']['username']."'";
					mysqli_query($con,$sql1) or die; ('Error Query');
				}else{
					echo 'หมายเลขอ้างอิงนี้ถูกใช้งานแล้ว';
				}
				break;
				}else if($walletmoney == $checkid && $money == 100){
				$sql = "select * from users where username='".$_SESSION['user']['username']."'";
				$sqle = "select * from histrory where NumberWallet='$walletmoney'";
				$query = mysqli_query($con,$sqle);
				$result = mysqli_fetch_assoc($query);
				if($result['status'] == ''){
					echo 'คุณได้เติมเงินจำนวน '.$money.'  บาทสำเร็จ';
					$sql = "insert into histrory (NumberWallet,money,username,status) values ('$walletmoney','$money','".$_SESSION['user']['username']."',1)";
					mysqli_query($con,$sql);
					$sql1 = "insert into users (saldo) values ('$money') where username='".$_SESSION['user']['username']."'";
					$sql1 = "update users set saldo=saldo+'".$money."'where username='".$_SESSION['user']['username']."'";
					mysqli_query($con,$sql1) or die; ('Error Query');
				}else{
					echo 'หมายเลขอ้างอิงนี้ถูกใช้งานแล้ว';
				}
				break;
				}else if($walletmoney == $checkid && $money == 110){
				$sql = "select * from user where username='".$_SESSION['user']['username']."'";
				$sqle = "select * from histrory where NumberWallet='$walletmoney'";
				$query = mysqli_query($con,$sqle);
				$result = mysqli_fetch_assoc($query);
				if($result['status'] == ''){
					echo 'คุณได้เติมเงินจำนวน '.$money.'  บาทสำเร็จ';
					$sql = "insert into histrory (NumberWallet,money,username,status) values ('$walletmoney','$money','".$_SESSION['user']['username']."',1)";
					mysqli_query($con,$sql);
					$sql1 = "insert into user (saldo) values ('$money') where username='".$_SESSION['user']['username']."'";
					$sql1 = "update user set saldo=saldo+'".$money."'where username='".$_SESSION['user']['username']."'";
					mysqli_query($con,$sql1) or die; ('Error Query');
				}else{
					echo 'หมายเลขอ้างอิงนี้ถูกใช้งานแล้ว';
				}
				break;
				}else if($walletmoney == $checkid && $money == 120){
				$sql = "select * from user where username='".$_SESSION['user']['username']."'";
				$sqle = "select * from histrory where NumberWallet='$walletmoney'";
				$query = mysqli_query($con,$sqle);
				$result = mysqli_fetch_assoc($query);
				if($result['status'] == ''){
					echo 'คุณได้เติมเงินจำนวน '.$money.'  บาทสำเร็จ';
					$sql = "insert into histrory (NumberWallet,money,username,status) values ('$walletmoney','$money','".$_SESSION['user']['username']."',1)";
					mysqli_query($con,$sql);
					$sql1 = "insert into user (saldo) values ('$money') where username='".$_SESSION['user']['username']."'";
					$sql1 = "update user set saldo=saldo+'".$money."'where username='".$_SESSION['user']['username']."'";
					mysqli_query($con,$sql1) or die; ('Error Query');
				}else{
					echo 'หมายเลขอ้างอิงนี้ถูกใช้งานแล้ว';
				}
				break;
				}else if($walletmoney == $checkid && $money == 130){
				$sql = "select * from user where username='".$_SESSION['user']['username']."'";
				$sqle = "select * from histrory where NumberWallet='$walletmoney'";
				$query = mysqli_query($con,$sqle);
				$result = mysqli_fetch_assoc($query);
				if($result['status'] == ''){
					echo 'คุณได้เติมเงินจำนวน '.$money.'  บาทสำเร็จ';
					$sql = "insert into histrory (NumberWallet,money,username,status) values ('$walletmoney','$money','".$_SESSION['user']['username']."',1)";
					mysqli_query($con,$sql);
					$sql1 = "insert into user (saldo) values ('$money') where username='".$_SESSION['user']['username']."'";
					$sql1 = "update user set saldo=saldo+'".$money."'where username='".$_SESSION['user']['username']."'";
					mysqli_query($con,$sql1) or die; ('Error Query');
				}else{
					echo 'หมายเลขอ้างอิงนี้ถูกใช้งานแล้ว';
				}
				break;
				}else if($walletmoney == $checkid && $money == 140){
				$sql = "select * from user where username='".$_SESSION['user']['username']."'";
				$sqle = "select * from histrory where NumberWallet='$walletmoney'";
				$query = mysqli_query($con,$sqle);
				$result = mysqli_fetch_assoc($query);
				if($result['status'] == ''){
					echo 'คุณได้เติมเงินจำนวน '.$money.'  บาทสำเร็จ';
					$sql = "insert into histrory (NumberWallet,money,username,status) values ('$walletmoney','$money','".$_SESSION['user']['username']."',1)";
					mysqli_query($con,$sql);
					$sql1 = "insert into user (saldo) values ('$money') where username='".$_SESSION['user']['username']."'";
					$sql1 = "update user set saldo=saldo+'".$money."'where username='".$_SESSION['user']['username']."'";
					mysqli_query($con,$sql1) or die; ('Error Query');
				}else{
					echo 'หมายเลขอ้างอิงนี้ถูกใช้งานแล้ว';
				}
				break;
				}else if($walletmoney == $checkid && $money == 150){
				$sql = "select * from user where username='".$_SESSION['user']['username']."'";
				$sqle = "select * from histrory where NumberWallet='$walletmoney'";
				$query = mysqli_query($con,$sqle);
				$result = mysqli_fetch_assoc($query);
				if($result['status'] == ''){
					echo 'คุณได้เติมเงินจำนวน '.$money.'  บาทสำเร็จ';
					$sql = "insert into histrory (NumberWallet,money,username,status) values ('$walletmoney','$money','".$_SESSION['user']['username']."',1)";
					mysqli_query($con,$sql);
					$sql1 = "insert into user (saldo) values ('$money') where username='".$_SESSION['user']['username']."'";
					$sql1 = "update user set saldo=saldo+'".$money."'where username='".$_SESSION['user']['username']."'";
					mysqli_query($con,$sql1) or die; ('Error Query');
				}else{
					echo 'หมายเลขอ้างอิงนี้ถูกใช้งานแล้ว';
				}
				break;
				}else if($walletmoney == $checkid && $money == 160){
				$sql = "select * from user where username='".$_SESSION['user']['username']."'";
				$sqle = "select * from histrory where NumberWallet='$walletmoney'";
				$query = mysqli_query($con,$sqle);
				$result = mysqli_fetch_assoc($query);
				if($result['status'] == ''){
					echo 'คุณได้เติมเงินจำนวน '.$money.'  บาทสำเร็จ';
					$sql = "insert into histrory (NumberWallet,money,username,status) values ('$walletmoney','$money','".$_SESSION['user']['username']."',1)";
					mysqli_query($con,$sql);
					$sql1 = "insert into user (saldo) values ('$money') where username='".$_SESSION['user']['username']."'";
					$sql1 = "update user set saldo=saldo+'".$money."'where username='".$_SESSION['user']['username']."'";
					mysqli_query($con,$sql1) or die; ('Error Query');
				}else{
					echo 'หมายเลขอ้างอิงนี้ถูกใช้งานแล้ว';
				}
				break;
				}else if($walletmoney == $checkid && $money == 170){
				$sql = "select * from user where username='".$_SESSION['user']['username']."'";
				$sqle = "select * from histrory where NumberWallet='$walletmoney'";
				$query = mysqli_query($con,$sqle);
				$result = mysqli_fetch_assoc($query);
				if($result['status'] == ''){
					echo 'คุณได้เติมเงินจำนวน '.$money.'  บาทสำเร็จ';
					$sql = "insert into histrory (NumberWallet,money,username,status) values ('$walletmoney','$money','".$_SESSION['user']['username']."',1)";
					mysqli_query($con,$sql);
					$sql1 = "insert into user (saldo) values ('$money') where username='".$_SESSION['user']['username']."'";
					$sql1 = "update user set saldo=saldo+'".$money."'where username='".$_SESSION['user']['username']."'";
					mysqli_query($con,$sql1) or die; ('Error Query');
				}else{
					echo 'หมายเลขอ้างอิงนี้ถูกใช้งานแล้ว';
				}
				break;
				}else if($walletmoney == $checkid && $money == 180){
				$sql = "select * from user where username='".$_SESSION['user']['username']."'";
				$sqle = "select * from histrory where NumberWallet='$walletmoney'";
				$query = mysqli_query($con,$sqle);
				$result = mysqli_fetch_assoc($query);
				if($result['status'] == ''){
					echo 'คุณได้เติมเงินจำนวน '.$money.'  บาทสำเร็จ';
					$sql = "insert into histrory (NumberWallet,money,username,status) values ('$walletmoney','$money','".$_SESSION['user']['username']."',1)";
					mysqli_query($con,$sql);
					$sql1 = "insert into user (saldo) values ('$money') where username='".$_SESSION['user']['username']."'";
					$sql1 = "update user set saldo=saldo+'".$money."'where username='".$_SESSION['user']['username']."'";
					mysqli_query($con,$sql1) or die; ('Error Query');
				}else{
					echo 'หมายเลขอ้างอิงนี้ถูกใช้งานแล้ว';
				}
				break;
				}else if($walletmoney == $checkid && $money == 190){
				$sql = "select * from user where username='".$_SESSION['user']['username']."'";
				$sqle = "select * from histrory where NumberWallet='$walletmoney'";
				$query = mysqli_query($con,$sqle);
				$result = mysqli_fetch_assoc($query);
				if($result['status'] == ''){
					echo 'คุณได้เติมเงินจำนวน '.$money.'  บาทสำเร็จ';
					$sql = "insert into histrory (NumberWallet,money,username,status) values ('$walletmoney','$money','".$_SESSION['user']['username']."',1)";
					mysqli_query($con,$sql);
					$sql1 = "insert into user (saldo) values ('$money') where username='".$_SESSION['user']['username']."'";
					$sql1 = "update user set saldo=saldo+'".$money."'where username='".$_SESSION['user']['username']."'";
					mysqli_query($con,$sql1) or die; ('Error Query');
				}else{
					echo 'หมายเลขอ้างอิงนี้ถูกใช้งานแล้ว';
				}
				break;
				}else if($walletmoney == $checkid && $money == 200){
				$sql = "select * from user where username='".$_SESSION['user']['username']."'";
				$sqle = "select * from histrory where NumberWallet='$walletmoney'";
				$query = mysqli_query($con,$sqle);
				$result = mysqli_fetch_assoc($query);
				if($result['status'] == ''){
					echo 'คุณได้เติมเงินจำนวน '.$money.'  บาทสำเร็จ';
					$sql = "insert into histrory (NumberWallet,money,username,status) values ('$walletmoney','$money','".$_SESSION['user']['username']."',1)";
					mysqli_query($con,$sql);
					$sql1 = "insert into user (saldo) values ('$money') where username='".$_SESSION['user']['username']."'";
					$sql1 = "update user set saldo=saldo+'".$money."'where username='".$_SESSION['user']['username']."'";
					mysqli_query($con,$sql1) or die; ('Error Query');
				}else{
					echo 'หมายเลขอ้างอิงนี้ถูกใช้งานแล้ว';
				}
				break;
				}else if($walletmoney == $checkid && $money == 250){
				$sql = "select * from user where username='".$_SESSION['user']['username']."'";
				$sqle = "select * from histrory where NumberWallet='$walletmoney'";
				$query = mysqli_query($con,$sqle);
				$result = mysqli_fetch_assoc($query);
				if($result['status'] == ''){
					echo 'คุณได้เติมเงินจำนวน '.$money.'  บาทสำเร็จ';
					$sql = "insert into histrory (NumberWallet,money,username,status) values ('$walletmoney','$money','".$_SESSION['user']['username']."',1)";
					mysqli_query($con,$sql);
					$sql1 = "insert into user (saldo) values ('$money') where username='".$_SESSION['user']['username']."'";
					$sql1 = "update user set saldo=saldo+'".$money."'where username='".$_SESSION['user']['username']."'";
					mysqli_query($con,$sql1) or die; ('Error Query');
				}else{
					echo 'หมายเลขอ้างอิงนี้ถูกใช้งานแล้ว';
				}
				break;
				}else if($walletmoney == $checkid && $money == 300){
				$sql = "select * from user where username='".$_SESSION['user']['username']."'";
				$sqle = "select * from histrory where NumberWallet='$walletmoney'";
				$query = mysqli_query($con,$sqle);
				$result = mysqli_fetch_assoc($query);
				if($result['status'] == ''){
					echo 'คุณได้เติมเงินจำนวน '.$money.'  บาทสำเร็จ';
					$sql = "insert into histrory (NumberWallet,money,username,status) values ('$walletmoney','$money','".$_SESSION['user']['username']."',1)";
					mysqli_query($con,$sql);
					$sql1 = "insert into user (saldo) values ('$money') where username='".$_SESSION['user']['username']."'";
					$sql1 = "update user set saldo=saldo+'".$money."'where username='".$_SESSION['user']['username']."'";
					mysqli_query($con,$sql1) or die; ('Error Query');
				}else{
					echo 'หมายเลขอ้างอิงนี้ถูกใช้งานแล้ว';
				}
				break;
			}else{
				echo 'รายการผิดพลาดโปรดลองใหม่อีกครั้ง';
				break;
			}
	}

	//Logout
	$wallet->logout();
}else{
	echo 'ยังไม่มีการเชื่อมต่อบัญชี!';
}
?>
