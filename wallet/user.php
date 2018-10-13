<?php
SESSION_START();
include 'config.php';
if(!$_SESSION['user']['username']){
	header("location: login.php");
}

?>

<html>
<head>
<title> Wallet Topup</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/spacelab/bootstrap.min.css">
</head>
<body>
     <div class="container">
     <div class="row ver-parent">
     <div class="col-md-7 col-md-offset-2 ver-center">
<form action="wallet.php" method="post">
	<div class="form-group">
	
		<center><h1><font color="#EE82EE">กรุณาใส่ </font><font color="#FF1493">หมายเลขอ้างอิง</font> <font color="#EE82EE">ในช่องด้านล่าง</font></h1>

  <?php
$sql = "select * from users where username='".$_SESSION['user']['username']."'";
$query = mysqli_query($con,$sql) or die ("Error Query");
$result = mysqli_fetch_assoc($query);

?>
  <h3 align="center"><font color="#33FF66"><b>ชื่อผู้ใช้งาน :  </b></font><font color="#FF3333"><?php echo $result['username'];?></font></h3>
  <h3 align="center"><font color="#3399FF"><b>เงินคงเหลือบัญชี้นี้:  </b></font><font color="#FF9933"><?php echo $result['saldo'];?> บาท</font></h3>
		<input type="text" class="form-control" maxlength="20" name="wallet" placeholder="หมายเลขอ้างอิง ตัวอย่าง เช่น ( 50000123456789 ) ">
	</div>
         <button class="btn btn-block btn btn-warning" type="submit" name="submit">
		 <i class="fa fa-ravelry" aria-hidden="true">
		 </i> กดเพื่อเติมเงิน</button>
		<a href="http://127.0.0.1/VPN/wallet/" class="btn btn-block btn btn-success"><i class="fa fa-ravelry"></i>
                   ย้อนกลับไปหน้าที่แล้ว</a>
</form>
<br /> 
<center><h4><font color="#6600CC">Truemoney Wallet Auto เพียงแค่ท่านนำหมายเลขอ้างอิงมาใส่เพียงเท่านั้น</font></h4>
<center><h4><font color="#FFCC00">โอนมายังเบอร์ </font><font color="#FF9933">wallet:0946255482</font><font color="#FFCC00">( สุทิศา คงคิรินทร์ )</font></h4>
<center><h4><font color="#FF0000">กฎการเติมเงิน ห้ามเติมต่ำกว่า 10 บาทไม่งั้นระบบจะไม่สามารถเพิ่มเครดิตให้ท่านได้</font></h4>
<br /> 
<center><h4><font color="#FF9933">ราคาที่เติม 10 =10 เครดิต</p>
<p>ราคาที่เติม 20 =20 เครดิต</p>
<p>ราคาที่เติม 30 =30 เครดิต</p>
<p>ราคาที่เติม 40 =40 เครดิต</p>
<p>ราคาที่เติม 50 =50 เครดิต</p>
<p>ราคาที่เติม 60 =60 เครดิต</p>
<p>ราคาที่เติม 70 =70 เครดิต</p>
<p>ราคาที่เติม 80 =80 เครดิต</p>
<p>ราคาที่เติม 90 =90 เครดิต</p>
<p>ราคาที่เติม 100 =100 เครดิต</font></h4>
</div>
</div>
    <style type="text/css">
<!--
body {

	background-image: url(http://127.0.0.1/img/53999_prison_school.jpg);
	background-attachment: fixed;
	background-position: center top;
	margin: 0px;
	padding: 0px;
}
-->
</style>
<body>
</html>