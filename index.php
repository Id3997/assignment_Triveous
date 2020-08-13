<?php
include 'config.php';
?>



<html>

<head>


<title>Bookmark & Tag System </title>

</head>

<body>
<br>
<h1 align='center'>Bookmark</h1>
<br>
<form name="main" method="post" action="value.php">
<table border="2px" width="80%" align="center">
<tr>
<td align="right" width="15%"><font color='red'>Link</font></td>
<td align="left" width="15%"><input type="text" name="lnk" id="lnk" maxlength="300" size="30" placeholder="Paste your link here"></td>
<td align="right" width="15%"><font color='red'>Bookmark Title</font></td>
<td align="left" width="15%"><input type="text" name="ttl" id="ttl" maxlength="300" size="30" placeholder="Write your title here"></td>
<td align="right" width="20%"><font color='red'>Publisher</font></td>
<td align="left" width="20%"><input type="text" name="pb" id="pb" maxlength="300" size="30" placeholder="Write your publisher name here"></td>
</tr>
<br>
<br>
<tr>
<td align="right" width="25%"><font color='red'>Tag id</font></td>
<td align="left" width="25%"><input type="text" name="tg" id="tg" maxlength="300" size="30" placeholder="Write your tag id here"></td>
<td align="right" width="25%"><font color='red'>Tag Title</font></td>
<td align="left" width="25%"><input type="text" name="tagnm" id="tagnm" maxlength="300" size="30" placeholder="Write your tag name here"></td>
</tr>


<td align="right" width="100%" colspan="4"><b><input type="submit" value=" Add to Bookmark "></b>&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
</form>
</table>
<br>
<br>


<table border='3px' width='80%' align='center'>
<tr>
<th>id</th>
<th>Link</th>
<th>Bookmark Title</th>
<th>Publisher</th>
<th>Tag id</th>
<th>Tag Title</th>
<th>Delete</th>
<th>Edit</th>
</tr>

<?PHP
$f=0;
$getta=mysqli_query($conn,"select * from bookmark order by title") or die(mysqli_error());
	while($ro=mysqli_fetch_array($getta))
	{	$f++;
		$tb_sl=$ro['sl'];
		$link=$ro['link'];
		$title=$ro['title'];
		$publisher=$ro['publisher'];
		$tag=$ro['tag'];
		$tagnm=$ro['tagnm'];
	
	
		
?>
<tr>
<td><?php echo $f;?></td>
<td><?php echo $link;?></td>
<td><?php echo $title;?></td>
<td><?php echo $publisher;?></td>
<td><?php echo $tag;?></td>
<td><?php echo $tagnm;?></td>
<td align="center"><a href="delete.php?sid=<?php echo $tb_sl?>" title="Click to Delete"> <img src="img/delete.png" height="25px"> </a></td>
<td align="center"><a href="edit.php?sid=<?php echo $tb_sl?>" title="Click to Edit"> <img src="img/edit.png" height="25px"> </a></td>
</tr>
<?PHP
    }
?>

</table>


</body>

</html>