<html>
<body>
<?php include('top.php');?>
<?php include('header.php'); ?>
       
<div class="center_content">
  	<div class="left_content">
        <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Register</div>
        
				<div class="feat_prod_box_details">
				<p class="details">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
				</p>
            
					<div class="contact_form">
						<div class="form_subtitle">create new account</div>
						<form name='registration' onSubmit="return formValidation();" method=post>
						<table>
							<div class="form_row">
							<tr>
							<td>Username:</td>
							<td><input type="text" name="userid" size="30" /><br></td>
							</tr>
							</div>  


							<div class="form_row">
							<tr>
							<td>Password:</td>
							<td><input type="password" name="password" size="30" /><br></td>
							</tr>
							</div> 
	
							<div class="form_row">
							<tr>
							<td>Confirm Password:</td>
							<td><input type="password" name="confirmpassword" size="30" /><br></td>
							</tr>
							</div> 
	
							
							<div class="form_row">
							<tr>
							<td>Name:</td>
							<td><input type="text" name="name" size="30" /><br></td>
							</tr>
							</div>


							<div class="form_row">
							<tr>
							<td>Age:</td>
							<td><input type="text" name="age" size="30" /><br></td>
							</tr>
							</div>
                  
							<div class="form_row">
							<tr>
							<td>Email:</td>
							<td><input type="text" name="email" size="30" /><br></td>
							</tr>
							</div>
                    
							<div class="form_row">
							<tr>
							<td><input type="submit" class="register" value="register" />
							</td>
							</tr>
							</div>   
						</table>
						</form>
					</div>
				</div>
<script>

		function formValidation()
		{
		var uid = document.registration.userid;
		var pass = document.registration.password;
		var uname = document.registration.name;
		var uage = document.registration.age;
		var uemail = document.registration.email;
		var confirmpass=document.registration.confirmpassword;
		{
		if(passid_validation(pass,7,12))
		{
		if(confirmID(pass,confirmpass))
		{
		if(allLetter(uname))
		{
		if(alphanumeric(uage))
		{ 
		if(ValidateEmail(uemail))
		{
		}
		} 
		}
		}
		}
		}
		return false;
		}

		function userid_validation(uid,mx,my)
		{
		var uid_len = uid.value.length;
		if (uid_len == 0 || uid_len >= my || uid_len < mx)
		{	
		alert("User Id should not be empty / length be between "+mx+" to "+my);
		uid.focus();
		return false;
		}
		return true;
		}	
		
		function passid_validation(pass,mx,my)
		{
		var passid_len = pass.value.length;
		if (passid_len == 0 ||passid_len >= my || passid_len < mx)
		{
		alert("Password should not be empty / length be between "+mx+" to "+my);
		pass.focus();
		return false;
		}
		return true;
		}

		function confirmId(pass,confirmpass)
		{
		if(pass!=confirmpass)
		{
		alert('Passwords do not match. Please re-enter');
		return false;
		}
		return true;
		}
		
		function allLetter(uname)
		{ 
		var letters = /^[a-zA-Z ]*$/;
		uname_len=uname.value.length;
		if (uname_len==0)
		{
		alert("Name field cannot be empty");
		return false;
		uname.focus();
		}
		else if(uname.value.match(letters))
		{
		return true;
		}
		else
		{
		alert('name must have alphabet characters only');
		uname.focus();
		return false;
		}
		}
		
		function numeric(uage)
		{ 	
		var letters = /^[0-9]*$/;
		uadd_len=uadd.value.length;
		if (uadd_len==0)
		{
		alert("Age field cannot be empty");
		return false;
		uage.focus();
		}
		else if(uage.value.match(letters))
		{
		return true;
		}
		else
		{
		alert('Age must have numeric characters only');
		uage.focus();
		return false;
		}
		}

		function ValidateEmail(uemail)
		{
		var mailformat = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$./;
		uemail_len=uemail.value.length;
		if (uemail_len==0)
		{
		alert("Email ID field cannot be empty");
		}
		else if(uemail.value.match(mailformat))
		{
		alert("Form Succesfully Submitted");
		uid.focus();
		return true;
		}
		else
		{
		alert("You have entered an invalid email address!");
		uemail.focus();
		return false;
		}
		} 
</script>
         
            
              

            

            
        <div class="clear">
		</div>
    </div><!--end of left content-->
        
    <?php include('right_content.php');?>
       
       <div class="clear">
	   </div>
</div><!--end of center content-->
       
<?php include ('footer.php');?>         
       

</body>
</html>