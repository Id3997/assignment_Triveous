<?php
include 'config.php';
$sid=$_REQUEST['sid'];

$getta=mysqli_query($conn,"select * from bookmark where sl='$sid'") or die(mysqli_error());
	while($ro=mysqli_fetch_array($getta))
	{	
		$link=$ro['link'];
		$title=$ro['title'];
		$publisher=$ro['publisher'];
		$tag=$ro['tag'];
		$tagnm=$ro['tagnm'];
	}
?>


<html>

<head>


<title>Edit page </title>

</head>

<body>
<br>
<br>
<form name="main" method="post" action="value.php">
<input type="hidden" name="sid" id="sid" value="<?PHP echo $sid;?>">
<table border="3px" width="80%" align="center">
<tr>
<td align="right" width="15%"><font color='red'>Link</font></td>
<td align="left" width="15%"><input type="text" value="<?PHP echo $link;?>" name="lnk" id="lnk" maxlength="300" size="30" placeholder="Paste your link here"></td>
<td align="right" width="15%"><font color='red'>Bookmark Title</font></td>
<td align="left" width="15%"><input type="text" value="<?PHP echo $title;?>" name="ttl" id="ttl" maxlength="300" size="30" placeholder="Write your title here"></td>
<td align="right" width="20%"><font color='red'>Publisher</font></td>
<td align="left" width="20%"><input type="text" value="<?PHP echo $publisher;?>" name="pb" id="pb" maxlength="300" size="30" placeholder="Write your publisher name here"></td>
</tr>
<br>
<br>
<tr>
<td align="right" width="25%"><font color='red'>Tag id</font></td>
<td align="left" width="25%"><input type="text" value="<?PHP echo $tag;?>" name="tg" id="tg" maxlength="300" size="30" placeholder="Write your tag id here"></td>
<td align="right" width="25%"><font color='red'>Tag Title</font></td>
<td align="left" width="25%"><input type="text" value="<?PHP echo $tagnm;?>" name="tagnm" id="tagnm" maxlength="300" size="30" placeholder="Write your tag name here"></td>
</tr>


<td align="right" width="100%" colspan="4"><b><input type="submit" value=" Add to Bookmark "></b>&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
</form>
</table>


</body>

</html>