<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>SANI NMS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url($murl.'views/css/bootstrap.min.css'); ?>" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url($murl.'views/css/style.css'); ?>" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?php echo base_url($murl.'views/css/font-awesome.css'); ?>" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="<?php echo base_url($murl.'views/css/icon-font.min.css'); ?>" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="<?php echo base_url($murl.'views/js/Chart.js'); ?>"></script>
<!-- //chart -->
<!--animate-->
<link href="<?php echo base_url($murl.'views/css/animate.css'); ?>" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url($murl.'views/js/wow.min.js'); ?>"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="<?php echo base_url($murl.'views/js/jquery-1.10.2.min.js'); ?>"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head> 
   
 <body class="sign-in-up">
    <section>
			<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<p><span>SANI</span> <a href="index.html">Network Monitoring System</a></p>
						</div>
						<div class="signin">
							<div class="signin-rit">
								<span class="checkbox1">
									 <label class="checkbox"><input type="checkbox" name="checkbox" checked="">Forgot Password ?</label>
								</span>
								<p><a href="#">Click Here</a> </p>
								<div class="clearfix"> </div>
							</div>
                                                    <form action="<?php echo base_url('Admin/Main'); ?>">
                                                                <div class="log-input">
                                                                        <div class="log-input-left">
                                                                           <input type="text" class="user" value="Yourname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
                                                                        </div>
                                                                        <span class="checkbox2">
                                                                                 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i></label>
                                                                        </span>
                                                                        <div class="clearfix"> </div>
                                                                </div>
                                                                <div class="log-input">
                                                                        <div class="log-input-left">
                                                                           <input type="password" class="lock" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
                                                                        </div>
                                                                        <span class="checkbox2">
                                                                                 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i></label>
                                                                        </span>
                                                                        <div class="clearfix"> </div>
                                                                </div>
                                                                <input type="submit" value="Login to your account">
                                                        </form>	 
						</div>
						<div class="new_people">
							<h4>For New People</h4>
							<p>Having hands on experience in creating innovative designs,I do offer design 
								solutions which harness.</p>
							<a href="sign-up.html">Register Now!</a>
						</div>
					</div>
				</div>
			</div>
		<!--footer section start-->
			<footer>
			   <p>&copy 2016 Sani NMS | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
			</footer>
        <!--footer section end-->
	</section>
	
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>