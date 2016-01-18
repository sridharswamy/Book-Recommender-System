<?php include('top.php');?>
<?php include('header.php'); ?>
<?php
$con=mysql_connect("localhost","root","") or die("not connected");
$db=mysql_select_db("new_seminar",$con) or die("NC");
if(isset($_GET['page']))
{
$page=$_GET['page'];
$page=mysql_real_escape_string($page);
}
else
$page=1;
$userid=$_SESSION['user_id'];
echo $userid;
echo "<br>";
$result=mysql_query("select * from books",$con);
$rows=mysql_num_rows($result);
$per_page=20;
$total_pages=ceil($rows/$per_page);
echo "You are on page $page of $total_pages<br>";
if($page != 1)
{
echo "<a href='data.php?page=1'> First </a> "." ";
$previous=$page -1;
echo "<a href='data.php?page=$previous'> <style='color:red'> Previous</style> </a>";
}
if(($page != 1) && ($page != $total_pages))
echo "|";
if($page != $total_pages)
{
$next=$page+1;
echo"<a href='data.php?page=$next'>Next</a>"."";
echo"<a href='data.php?page=$total_pages'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last</a>";
}
echo "<br><br>";
$x=($page-1) * $per_page;
$sql="select * from books limit $x,$per_page";
$result=mysql_query($sql,$con);
Print "<br><br><br><br><br><br><br>";
Print "<center>";
Print "<table border cellpadding=3>";
Print "<th>Rating</th><th>Bookid</th><th>Name</th><th>Image</th>";
while($row=mysql_fetch_array($result))
{
Print "<tr><form action='ratinghandler.php' method='post'>";
Print "<td><select name='rating'>";
Print "<option value='0'>0</option>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='9'>9</option>
<option value='10'>10</option>
</select>";
Print "<td><input type='text' value=".$row['item_id']." name='bookid' readonly /><input type='submit' value='submit' ></input></td>";
Print "<td><h3>".$row['book-title'] . "</h3></td>";
Print "<td><img src=".$row['image-url-s']." alt='demo text'></td></tr></form>";
}
Print "</table>";
Print "</center>";
mysql_close($con);
?>
