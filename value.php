<?php
include 'config.php';
$link=$_POST['lnk'];
$title=$_POST['ttl'];
$publisher=$_POST['pb'];
$tag=$_POST['tg'];
$tagnm=$_POST['tagnm'];
$sid=$_POST['sid'];

if($sid=='')
{
if($link=='' or $tagnm=='')
	
	{
	?>
<script language="javascript">
alert('Please Fill .......');
window.history.go(-1);
</script>
<?php	
	}
else
{
$f=0;
$getta=mysqli_query($conn,"select * from bookmark where link='$link' and tagnm='$tagnm'") or die(mysqli_error());
	while($ro=mysqli_fetch_array($getta))
	{	
	$f++;
    }	

if($f==0)
{	
$query2 = "INSERT INTO bookmark (link,title,publisher,tag,tagnm) VALUES ('$link','$title','$publisher','$tag','$tagnm')";
$result2 = mysqli_query($conn,$query2)or die (mysqli_error());
$msg="Submited Successfully. Thank You";
?>
<script language="javascript">
alert('<?=$msg;?>');
document.location="index.php";
</script>
<?php
}
else
{
?>
<script language="javascript">
alert('Duplicate Data!!');
window.history.go(-1);
</script>
<?php	
}}
}
else
{
if($link=='' or $tagnm=='')
	
	{
	?>
<script language="javascript">
alert('Please Fill .......');
window.history.go(-1);
</script>
<?php	
	}
else
{
$f=0;
$getta=mysqli_query($conn,"select * from bookmark where link='$link' and tagnm='$tagnm' and sl!='$sid'") or die(mysqli_error());
	while($ro=mysqli_fetch_array($getta))
	{	
	$f++;
    }	

if($f==0)
{	
$query2 = "update bookmark set link='$link',title='$title',publisher='$publisher',tag='$tag',tagnm='$tagnm' where sl='$sid'";
$result2 = mysqli_query($conn,$query2)or die (mysqli_error());
$msg="Updated Successfully. Thank You";
?>
<script language="javascript">
alert('<?=$msg;?>');
document.location="index.php";
</script>
<?php
}
else
{
?>
<script language="javascript">
alert('Duplicate Data!!');
window.history.go(-1);
</script>
<?php	
}}
	
}
?>

