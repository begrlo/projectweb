$selrec="select * from board order by no desc limit $frow,$line_page";
$info=mysqli_query($selrec,$connect);
while($rowinfo=mysqli_fetch_array($info))
{
	echo "<tr>";
	echo "<td> $rowinfo[no] </td>";
    echo "<td> <a href='34_detailpost.php?title=$rowinfo[title]'> $rowinfo[title] </a></td>";
	echo "<td> $rowinfo[irum] </td>";
	echo "<td> $rowinfo[regdate] </td>";
	echo "<td> $rowinfo[hits] </td>";
	echo "</tr>";}
mysqli_close($connect);
?>
</table></body>
<?php
// 페이지 블럭 설정과 링크 작업 코드 추가
$fpage=(($cblock-1)*$block_page)+1;
$lpage=min($totpage,$cblock*$block_page);
if($cblock>1)
{
   $prvblock=($cblock-1)*$block_page;
   echo "<a href='34_board.php?page=$prvblock'>◀이전</a>";
}
for($i=$fpage;$i<=$lpage;$i++)
{
	if($i==$page) echo "<b id='ab'>[$i]</b>";
	else  echo "<a href='34_board.php?page=$i'>[$i]</a>";
}
if($cblock<$totblock)
{
	$nxtblock=($cblock+1)*$block_page;
	echo "<a href='34_board.php?page=$nxtblock'>다음▶</a>";
}
?>
