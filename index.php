<?php include 'header.php';?>

<header class="container-fluid nav-down">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container no-padding">
			<ul class="nav navbar-nav top_header">
			  <li class="menu_icon "><a href="javascript:void(0)"  ><img onclick="openNav()" src="assets/img/icon/ham_icon.png" id="asdf" alt="menu icon" /></a></li>
				<li class="logo_name ">
				    <p>Home</p>
				</li>
			  <li class="cart_icon">
				  <a href="#">
				  <span class="bell-icon"><i class="fa fa-bell-o" aria-hidden="true"></i></span>
				  <span class="badge">7</span>
				  </a>
			  </li>
			</ul>
		  </div>
		</nav>
	
	</div>
	<!-- MOBILE-MENU-AREA END -->
</header>
<!-- END HEADER -->
    
<!--  Focus menu starts -->
    
    
<div id="sidenav-menu" class="container-fluid menu-focus-main">
    <div class="container">
        <div class="row">
            <div class="focus-menu">
                <div class="focus-img"><img src="assets/img/focus-menu-inner.png" alt=""></div>
                <div class="focus-text"><p><a href="#">Focus Menu</a></p></div>
                <div class="focus-icon"><a href="#"><img src="assets/img/arrow-click.png" alt=""></a></div>
            </div>
            
            <div class="focus-menu-1">
                <div class="focus-img"><img src="assets/img/focus-membership.png" alt=""></div>
                <div class="focus-text"><p><a href="#">Focus Membership</a></p></div>
                <div class="focus-icon"><a href="#"><img src="assets/img/arrow-click.png" alt=""></a></div>
            </div>
        </div>
    </div>
</div>
    
    
    
<!--  Focus menu Ends -->

	

<!-- Location Modal -->
  <div class="modal fade" id="myLocation" role="dialog">
	<div class="modal-vcenter">
		<div class="modal-dialog">
		
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
			  <div class="location-search">
				<input type="text" id="location-search" placeholder="Seacrh location..."/>
			  </div>
			  <div class="submit-btn text-center">
				<a href="#">Submit</a>
			  </div>
			</div>
		  </div>
		  
		</div>
    </div>
  </div>
  
  
  
  
  
  
  <!-----side nav----->
  <div class="side-bar">
		<div id="mySidenav" class="sidenav" style="width: 0px;">		
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<ul class="side_nav">
				<li><a href="#"><cite>Welcome</cite><span>Chaksu Sharma</span></a></li>
				<li><a href="#" class="right-arrow"><img src="assets/img/Side-menu-img1.png" alt="" /> <span>My Profile</span></a></li>
				<li><a href="#" class="right-arrow"><img src="assets/img/Side-menu-img2.png" alt="" /> <span>Queries</span></a></li>
				<li><a href="#" class="right-arrow"><img src="assets/img/Side-menu-img3.png" alt="" /> <span>Change Password</span></a></li>
				<li><a href="#" class="right-arrow"><img src="assets/img/Side-menu-img4.png" alt="" /> <span>About us</span></a></li>
				<li><a href="#" class="right-arrow"><img src="assets/img/Side-menu-img5.png" alt="" /> <span>Contact us</span></a></li>
				<li><a href="#" class="right-arrow"><img src="assets/img/Side-menu-img6.png" alt="" /> <span>Terms &amp; Conditions</span></a></li>
				<li><a href="#" class="right-arrow"><img src="assets/img/sidenav-icon-7.png" alt="" /> <span>Sign Out</span></a></li>
			</ul>
		</div>
		<div id="mySidenav_2" class="sidenav sidenav_db">		
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav_2()">&times;</a>
			<ul class="side_nav">
				<li><a class="text-center" href="#"><div class="sidenav_img_cont"><img src="assets/img/profile_image.png" alt="" /> </div><span>Abd Al Alim</span></a></li>
				<li><a href="./my_orders.php"><img src="assets/img/icon/orders.png" alt="" /> <span>My Orders</span></a></li>
				<li><a href="./my_info_basic.php"><img src="assets/img/icon/profile.png" alt="" /> <span>My Profile</span></a></li>
				<li><a href="./change_password.php"><img src="assets/img/icon/password.png" alt="" /> <span>Change Password</span></a></li>
				<li><a href="./login.php"><img src="assets/img/icon/logout_red.png" alt="" /> <span>Log Out</span></a></li>
				
				
			</ul>
		</div>
	</div>
	<div id="main" onclick="closeNav()">
    <!-----side nav end----->
	
<script>

	
$(document).ready(function(){
	$(".cart_icon a:last-child").click(function(){
		$(".bottom_header").slideToggle();
		//$("#banner_slider").toggleClass("search-container")
	});	
});
    </script>	
<?php include 'footer.php';?>