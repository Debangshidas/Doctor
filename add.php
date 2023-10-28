<?php
     include('conne.php');
	 
	 $pname=$_POST['pname'];
	 $phone=$_POST['phone'];
	 $token=$_POST['token'];
	 
	 mysqli_query($conne,"insert into `token`(pname, phone, token) values ('$pname','$phone','$token')");
	 header('location:index.php');
?>