<?php 
if (isset($_POST['submit'])) {
//checking name
if(empty($_POST['full_name']))
$msg_name = "You must supply your name";
$name_subject = $_POST['full_name'];
$name_pattern = '/^[a-zA-Z ]*$/';
preg_match($name_pattern, $name_subject, $name_matches);
if(!$name_matches[0])
$msg2_name = "Only alphabets and white space allowed";
}

if (isset($_POST['submit'])) {
//check email
if(empty($_POST['email_addr']))
$msg_email = "You must supply your email";
$email_subject = $_POST['email_addr'];
$email_pattern = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
preg_match($email_pattern, $email_subject, $email_matches);
if(!$email_matches[0])
$msg2_email = "Must be of valid email format";
}

if (isset($_POST['submit'])) {
//checking for non-empty and non-negative integer
if(empty($_POST['persons']))
$msg_persons = "You must supply number of persons travelling";
if(!empty($_POST['persons']))
{
$persons = $_POST['persons'];
preg_match("@^([1-9][0-9]*)$@", $persons, $persons_match);
if(!$persons_match[0])
$msg2_persons = "Must be non negative integer";
}
}

if (isset($_POST['submit'])) {
//check discount coupon
//[^a-z0-9_]
if($_POST['dis_code'])
{
 $dis_code = $_POST['dis_code'];
 preg_match("/^[a-zA-Z0-9]+$/", $dis_code, $dis_match);
 if(!$dis_match[0])
 $msg_dis = "Must be alphanumric"; 
 if(strlen($dis_code)!='10')
 $msg2_dis = "Must be 10 characters long";
}
}

// validation complete 
if(isset($_POST['submit'])){
if($msg_name=="" && $msg2_name=="" && $msg_email=="" && $msg2_email=="" && $msg_package=="" && $msg_dt=="" && $msg2_dt==""&& $msg3_dt=="" && $msg_persons=="" && $msg2_persons=="" && $msg_facilities=="" && $msg2_facilities=="" && $msg_dis=="" && $msg2_dis=="" && $msg_agree=="" && $msg2_agree=="")
$msg_success = "You filled this form up correctly";
echo $msg_success;
}


?> 