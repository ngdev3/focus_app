<?php include 'header.php';?>


<header class="container-fluid nav-down">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container no-padding">
			<ul class="nav navbar-nav top_header">
				<li class="menu_icon back_icon"><a href="#"  ><img style="width:13px;" src="assets/img/icon/back.png" id="asdf" alt="menu icon" /></a></li>
				<li class="logo_name"><a class="text-left back">MY VISION</a></li>
			  
			</ul>
			
		  </div>
		</nav>
	
	</div>
	<!-- MOBILE-MENU-AREA END -->
</header>
<!-- END HEADER -->
    <div class="vision-listing pt-5 mt-60">
	    <div class="col-sm-12 col-xs-12">
		    <div class="vision-listing-content1 bg-color">
		        <div class="content-heading">
				    <h3>Carve out a chunk of time</h3>
				</div>
				<div class="content-para para-line">
				    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
				</div>
		    </div>
			<div class="vision-listing-content1 bg-color1">
		        <div class="content-heading">
				    <h3>Pull It Together</h3>
				</div>
				<div class="content-para para-line">
				    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
				</div>
		    </div>
			<div class="vision-listing-content1 bg-color2">
		        <div class="content-heading">
				    <h3>Fight The Fear</h3>
				</div>
				<div class="content-para para-line">
				    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
				</div>
		    </div>
			<div class="vision-listing-content1 bg-color3">
		        <div class="content-heading">
				    <h3>Carve out a chunk of time</h3>
				</div>
				<div class="content-para para-line">
				    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
				</div>
		    </div>
		</div>
	</div>


<script>

    $('.digit1 input').keyup(function(){
        if($(this).val().length==$(this).attr("maxlength")){
            $(this).next().focus();
        }
    });

</script>	
<?php include 'footer.php';?>