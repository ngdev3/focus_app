<?php include 'header.php';?>


<header class="container-fluid nav-down">
    <div class="row">
        <nav class="navbar navbar-inverse">
            <div class="container no-padding">
                <ul class="nav navbar-nav top_header">
                    <li class="menu_icon back_icon"><a href="#"><img style="width:13px;" src="assets/img/icon/back.png" id="asdf" alt="menu icon" /></a></li>
                    <li class="logo_name"><a class="text-left back">Queries</a></li>

                </ul>

            </div>
        </nav>

    </div>
    <!-- MOBILE-MENU-AREA END -->
</header>
<!-- END HEADER -->
<div class="vision-listing pt-5 mt-45">
    <div class="col-sm-12 col-xs-12 padd-minus">
        
        <div class="active-user-list">
            <div class="active-img-u"><img src="assets/img/query-chat.png" alt=""></div>
            <div class="acive-id"><span>Abdul</span> <br> <cite>Active 3 min ago</cite></div>
        </div>

        <div class="query-chat">
            <div class="row padding_container">
                <div class="col-md-12 col-xs-12 col-sm-12 ticket_wrapper chat_window">
                    <div class="chat_window_start">
                        <ul class="chat_start">
                            <li class="chat_thread by_support">
                               <div class="chat-view"><img src="assets/img/query-chat.png" alt=""></div>
                               <div class="number-chat">
<!--                                    <h5>Support Team</h5>-->
                                    <p class="chat_desc">Hello, greetings from Focus !</p>
                                    <small class="chat_time">23 OCT 2018, 10:30</small>
                                </div>
                            </li>
                            <li class="chat_thread by_user">
<!--                                <h5>Adam Zampa</h5>-->
                                <div class="chat-use-up">
                                    <p class="chat_desc">Hi</p>
                                </div>
                                <div class="dtae-up"><small class="chat_time">23 OCT 2018, 13:19</small></div>
                            </li>
                            <li class="chat_thread by_support">
                               <div class="chat-view"><img src="assets/img/query-chat.png" alt=""></div>
                               <div class="number-chat">
<!--                                    <h5>Support Team</h5>-->
                                    <p class="chat_desc">How May Help You !</p>
                                    <small class="chat_time">23 OCT 2018, 10:30</small>
                                </div>
                            </li>
                            <li class="chat_thread by_user">
<!--                                <h5>Adam Zampa</h5>-->
                                <div class="chat-use-up">
                                    <p class="chat_desc">Need Some Help plz..</p>
                                </div>
                                <div class="dtae-up"><small class="chat_time">23 OCT 2018, 13:19</small></div>
                            </li>
<!--
                            <li class="chat_thread by_user">
                                <h5>Adam Zampa</h5>
                                <p class="chat_desc">When i will get the Lorems??</p>
                                <small class="chat_time">23 OCT 2018, 15:45</small>

                            </li>
                            <li class="chat_thread by_support">
                                <h5>Support Team</h5>
                                <p class="chat_desc">You will get Sooon. Delivery boy will reach soon.</p>
                                <small class="chat_time">23 OCT 2018, 16:05</small>

                            </li>
-->
                        </ul>
                        <div class="send_box">
						    <i class="fa fa-paperclip" aria-hidden="true"></i>
                            <input type="text" class="reply_input" name="" placeholder="Write your message here...">
                            <button class="sned_chat_btn"><i class="fa fa-paper-plane send_chect_icon" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>




    </div>
</div>


<script>
    $('.digit1 input').keyup(function() {
        if ($(this).val().length == $(this).attr("maxlength")) {
            $(this).next().focus();
        }
    });

</script>


<script>

	
$(document).ready(function(){
	$(".cart_icon a:last-child").click(function(){
		//alert();
		$(".bottom_header").slideToggle();
		//$("#banner_slider").toggleClass("search-container")
	});	
});
    </script>	
    <script type="text/javascript">
    	$(document).ready(function(){
    		$(".send_chect_icon").click(function(){
    			var date1=new Date();

    			var months=["JAN","FEB","MAR","APR","MAY","JUN","JUL",
					"AUG","SEP","OCT","NOV","DEC"];
					var valdate =date1.getDate()+" "+months[date1.getMonth()]+" "+date1.getFullYear();

    			var currentdate = new Date(); 
    			var datetime = valdate + ", " + currentdate.getHours() + ":" + currentdate.getMinutes(); 
    			var chatval = $(".reply_input").val();
    			//$(".chat_start").append("<li class='chat_thread by_user'><h5>Adam Zampa</h5><p class='chat_desc'>"+chatval+"</p><small class='chat_time'>"+datetime+"</small></li>");
				$(".chat_start").append("<li class='chat_thread by_user'><div class='chat-use-up'><p class='chat_desc'>"+chatval+"</p></div></li>");
    			$(".reply_input").val("");

    		});
    		
    		$('.reply_input').keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
        var date1=new Date();

    			var months=["JAN","FEB","MAR","APR","MAY","JUN","JUL",
					"AUG","SEP","OCT","NOV","DEC"];
					var valdate =date1.getDate()+" "+months[date1.getMonth()]+" "+date1.getFullYear();

    			var currentdate = new Date(); 
    			var datetime = valdate + ", " + currentdate.getHours() + ":" + currentdate.getMinutes(); 
    			var chatval = $(".reply_input").val();
    			//$(".chat_start").append("<li class='chat_thread by_user'><h5>Adam Zampa</h5><p class='chat_desc'>"+chatval+"</p><small class='chat_time'>"+datetime+"</small></li>");
				$(".chat_start").append("<li class='chat_thread by_user'><div class='chat-use-up'><p class='chat_desc'>"+chatval+"</p></div></li>");
    			$(".reply_input").val("");
    }
});
    	});
    </script>



<?php include 'footer.php';?>
