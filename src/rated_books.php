<?php include('top.php');?>
<?php include('header.php'); ?>
<?php
$con=mysql_connect("localhost","root","") or die("not connected");
$db=mysql_select_db("new_seminar",$con) or die("NC");
if($_SESSION['login']=="1")
{
$userid=$_SESSION['user_id'];
$sql=mysql_query("select * from taste_preferences where user_id='{$_SESSION['user_id']}'");
$rows=mysql_num_rows($sql);
$itemlist=array();
$count=0;
$imagecount=0;
while($row=mysql_fetch_assoc($sql))
{
$count++;
$_SESSION['itemid'] = $row["item_id"];
$itemlist[$count]=$_SESSION['itemid'];
$_SESSION['rating'] = $row["preference"];
$ratinglist[$count]=$_SESSION['rating'];
$result=mysql_query("select * from books where item_id='{$_SESSION['itemid']}'");
$rows=mysql_num_rows($sql);
}
$imagelist=array();
$temp=0;
while($imagecount<$count)
{
$imagecount++;
$result=mysql_query("select * from books where item_id='$itemlist[$imagecount]'");
while($row=mysql_fetch_assoc($result))
{
$temp++;
$_SESSION['imageid'] = $row["image-url-s"];
$_SESSION['booktitle'] = $row["book-title"];
$_SESSION['bookid'] = $row["item_id"];
$imagelist[$temp]=$_SESSION['imageid'];
$booklist[$temp]=$_SESSION['booktitle'];
$bookrating[$temp]=$_SESSION['bookid'];
}
}
}
?>
<div class="center_content">
<div class="left_content">
<div class="crumb_nav">
</div>
<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Rated books</div>
<div class="new_products">
<?php
$temp=1;
while($temp<=$rows)
{
$position=20;
$post=substr($booklist[$temp],0,$position);
$post3=substr($booklist[$temp],60,80);
print '<div class="new_prod_box">';
print '<a href="details.html"><h4 style="color:black">'.$post.'</h4></a>';
print '<b>Book id : '.$bookrating[$temp];
print '<br>';
print '<b>Rated : '.$ratinglist[$temp];
print '<div class="new_prod_bg">';
print '<a href="details.html"><img src="'.$imagelist[$temp].'" alt="" title="" class="thumb" border="0" /></a>';
print '</div>';
print '</div>';
$temp++;
}?>
</div>
<div class="clear"></div>
</div><!--end of left content-->
<?php include('right_content.php');?>
<div class="clear"></div>
</div><!--end of center content-->
<?php include ('footer.php');?>
</body>
</html>