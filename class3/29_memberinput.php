<?php
$irum=$_POST['irum'];
$id=$_POST['id'];
$nicname=$_POST['nicname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$regdate=$_POST['regdate'];
$connect=mysqli_connect("localhost","root","000000");
mysqli_select_db($connect,"sample");
mysqli_query('set names utf8');
$inrec="insert into member values('$irum','$id','$nicname','$email','$pwd','$regdate')";
$info=mysqli_query($connect,$inrec);
if(!$info)
    die("회원가입실패");
echo "회원가입이 완료되었습니다.";
mysqli_close($connect);
?>
<a href="29_login.html">처음이로 이동</a>
