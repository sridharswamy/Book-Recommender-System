
<?php
//the example of inserting data with variable from HTML form
//input.php
//$conn = mysql_connect('localhost:8080','root','root');//database connection
//mysql_select_db('salil',$conn);
$conn = mysql_connect("localhost","root","");
$db=mysql_select_db("seminar", $conn);


$username=$_POST['userid'];

$pwd=$_POST['passid'];
$name=$_POST['name'];

$age=$_POST['age'];

$email=$_POST['email'];

//inserting data order
 $sql = "INSERT INTO users VALUES('','".$username."','".$pwd."','".$name."',".$age.",'".$email."')";

//declare in the order variable
$query = mysql_query($sql);	//order executes
if(!$query){
	echo "Failed";
} else{
	echo "Successful";
}
?>


