<?php include('top.php');?>
      <?php include('header.php'); ?>
      
       <div class="center_content">
       	<div class="left_content">
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" />Contact Us</div>
        
        	<div class="feat_prod_box_details">
            <p class="details">
             Contact Details will go here.
            </p>
            <?php include('variables.php');?>
              	<div class="contact_form">
                <div class="form_subtitle">All fields are required</div>      
					<form method="get" action="validation.php">
                    <table>
					<tr>
					<td>
                    Full name:</td><td>
					<input type="text" name="full_name"></td></tr>   
					<tr>
					<td>
					Email address:
					</td>
					<td>
					<input type="text" name="email_addr"></td>
					</tr>
					<tr>
					<td>
					Phone Number:
					</td>
					<td>
					<input type="text" name="phone">
					</td>
					</tr>
					
		            <tr>
					<td>
					Company name:</td>
					<td>
					<input type="text" name="company_name"></td></tr>   
					<tr>
					<td>
                    Message:</td><td>
					<input type="textarea" name="dis_code"></td></tr>
		            <tr><td></td><td>
                    <button type="submit" class="btn btn-large btn-primary" name="submit">Complete reservation</button> 
                    </td></tr>
					</table>
					</form>
				</div>  
            
          </div>	
            
              

            

            
        <div class="clear"></div>
        </div><!--end of left content-->
        <?php include('right_content.php');?>
       
       
       <div class="clear"></div>
       </div><!--end of center content-->
       
              
    <?php include ('footer.php');?>         
       

</body>
</html>