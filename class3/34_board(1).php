<style>
h1{color:#aacc22;}
table{width:600px;border-bottom:1px dashed #808080}
th{background:#ddaa88;font-size:1.2em;padding:3px;}
#data1{height:30px}
a{text-decoration:none;color:#505050}
a:hover{color:#ddaa88}
#ab{color:#ee9988}
</style>
<body>
<h1>게시판 </h1>
<table><tr>
  <th>NO</th><th>제목</th><th>작성자</th><th>작성일</th><th>조회</th>
  </tr>
<?php
$connect=mysqli_connect("localhost","root","000000");
mysqli_select_db($connect,"sample");
mysqli_query('set names utf8');
//$page=1;
//페이지 정보 코드수정작업
if(empty($_GET['page'])){$page=1;}
else
{$page=$_GET['page'];}
$line_page=5;
$block_page=3;
$s1="select * from board";
$result=mysqli_query($s1,$connect);
$totrow=mysqli_num_rows($result);
$totpage=ceil($totrow/$line_page);
$totblock=ceil($totpage/$block_page);
$cblock=ceil($page/$block_page);
$frow=($page-1)*$line_page;
