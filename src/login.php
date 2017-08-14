<?php include 'header.php';?>


 <script language="javascript">
	
	 function ValidateEmail(mail)   
			  {  
			  
			   if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))  
				{  
				  return (true);  
				}  
				
				return (false);  
			  }  
	
	function callLogin()
	{

		
		var d=document.frmlogin;
		
		str="";
		
		if(d.Username.value=="")
		{
		  str+="Username\n";
		}
				
		
		if(d.SecretKey.value=="")
		{
		  str+="Password\n";
		}
		if(str)
		{
		alert("Please enter following fields\n"+str);
		return false;
		}
		
		
			}
	
	</script>

    <section class="content cls-index">
		<div class="login-page ls-closed">
			<div class="login-box">
				<div class="logo">
					<a href="index.php"><img src="<?php echo base_url();?>assets_user/images/bio-logo.png" alt="bio-essence"></a>
				</div>
				<div class="card">
					<div class="body">
						<form name="frmlogin"  method="POST" onSubmit="return callLogin();" >
							<div class="msg" style="color:#E91E63; font-weight:bold;"><?php if($Promoter_lang){echo $Promoter_lang;}else{echo "Promoter";}?> <?php if($SignIn_Lang){echo $SignIn_Lang;}else{echo "Sign In";}?></div>
                            <?php
							if($emessage)
							{
								
							?>
                            
                            <div class="msg" style="color:#F00"><?php echo $emessage;?></div>
                            <?php	
							}
							?>
                            
							<div class="input-group">
								<span class="input-group-addon">
									<i class="material-icons">person</i>
								</span>
								<div class="form-line">
									<input class="form-control" name="Username" id="Username" placeholder="<?php if($Username_lang){echo $Username_lang;}else{echo "Username";}?>" type="text">
								</div>
							</div>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="material-icons">lock</i>
								</span>
								<div class="form-line">
					<input class="form-control" name="SecretKey" id="SecretKey"  placeholder="<?php if($Password_lang){echo $Password_lang;}else{echo "Password";}?>" type="password">
								</div>
							</div>
							<div class="row">
								<?php /*?><div class="col-xs-12 p-t-5">
									<input name="rememberme" id="rememberme" class="filled-in chk-col-pink" type="checkbox">
									<label for="rememberme">Remember Me</label>
								</div><?php */?>
								<div class="col-xs-12">
                                
                                
<?php /*?>									<a class="btn btn-block bg-pink"  onClick="callLogin();">SIGN IN</a>
<?php */?>                                    
                                    <input type="submit" class="btn btn-block bg-pink" value="<?php if($SignIn_Lang){echo $SignIn_Lang;}else{echo "Sign In";}?>" name="Submit">
                                    
                                    
								</div>
							</div>
							<div class="row m-t-15 m-b--20">
                            
                           
                            
							<?php /*?>	<div class="col-xs-6">
									<a href="sign-up.php">Register Now!</a>
								</div>
                                <?php */?>
                                
								<?php /*?><div class="col-xs-6 align-right">
									<a href="<?php echo base_url();?>forgot_password"><?php if($ForgotPassword_Lang){echo $ForgotPassword_Lang;}else{echo "Forgot Password";}?>?</a>
								</div><?php */?>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
    </section>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url();?>assets_user/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url();?>assets_user/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url();?>assets_user/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url();?>assets_user/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url();?>assets_user/plugins/node-waves/waves.js"></script>
	
    <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets_user/js/admin.js"></script>
    <script src="<?php echo base_url();?>assets_user/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url();?>assets_user/js/demo.js"></script>
</body>

</html>