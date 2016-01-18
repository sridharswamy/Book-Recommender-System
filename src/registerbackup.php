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
							<td><input type="password" name="passid" size="30" /><br></td>
							</tr>
							</div> 
	
							<div class="form_row">
							<tr>
							<td>Confirm Password:</td>
							<td><input type="password" name="confirmpassid" size="30" /><br></td>
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
							<td>Address:</td>
							<td><input type="text" name="address" size="30" /><br></td>
							</tr>
							</div>
                  
							<div class="form_row">
							<tr>
							<td>Email:</td>
							<td><input type="text" name="email" size="30" /><br></td>
							</tr>
							</div>
                    
							<div class="form_row">
								<div class="terms">
								<tr>
								<td></td><td><input type="checkbox" name="terms" />
								I agree to the <a href="#">terms &amp; conditions</a>
								</td>
			 					</tr>
								</div>
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
		var passid = document.registration.passid;
		var uname = document.registration.name;
		var uadd = document.registration.address;
		var uemail = document.registration.email;
		var confirmpass=document.registration.confirmpassid;
		{
		if(passid_validation(passid,7,12))
		{
		if(confirmID(passid,confirmpass)
		{
		if(allLetter(uname))
		{
		if(alphanumeric(uadd))
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
		
		function passid_validation(passid,mx,my)
		{
		var passid_len = passid.value.length;
		if (passid_len == 0 ||passid_len >= my || passid_len < mx)
		{
		alert("Password should not be empty / length be between "+mx+" to "+my);
		passid.focus();
		return false;
		}
		return true;
		}

		function confirmId(passid,confirmpass)
		{
		if(passid!=confirmpass)
		{
		alert('Passwords do not match. Please re-enter');
		confirmpass.focus();
		return false;
		}
		else
		{
		return true;
		}
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
		
		function alphanumeric(uadd)
		{ 	
		var letters = /^[A-Za-z0-9 ]*$/;
		uadd_len=uadd.value.length;
		if (uadd_len==0)
		{
		alert("Address field cannot be empty");
		return false;
		uadd.focus();
		}
		else if(uadd.value.match(letters))
		{
		return true;
		}
		else
		{
		alert('User address must have alphanumeric characters only');
		uadd.focus();
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