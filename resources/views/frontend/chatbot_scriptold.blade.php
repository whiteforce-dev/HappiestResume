<!DOCTYPE html>
<html lang="en">
<head>
	<title>chatbot</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
   
      <link rel="stylesheet" type="text/css" href="{{url('public/assets').'/'}}dist/jquery.convform.css"> 
    <link href="{{url('public/assets').'/'}}chatBot.css" rel="stylesheet" type="text/css"/> 

</head>
<body>
	
	                   <section id="demo">
	   
						<div class="chat-screen">
							<div class="chat-header">
								<div class="chat-header-title">
									Let’s chat? - We're online
								</div>
								<div class="chat-header-option hide">
									<span class="dropdown custom-dropdown">
										<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
										</a>
										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink1" style="will-change: transform;">
											<a class="dropdown-item" href="javascript:void(0);">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#bc32ef" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
												Send Transcriptions
											</a>
											<a class="dropdown-item end-chat" href="javascript:void(0);">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#bc32ef" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power"><path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path><line x1="12" y1="2" x2="12" y2="12"></line></svg>
												End Chat
											</a>
										</div>
									</span>
								</div>
							</div>
					
							
										<div class="card no-border">
	                  
						   <div id="chat" class="conv-form-wrapper" >
								<form action="" method="" class="hidden">
								
	                                <select  name="question1" data-conv-question="Hello! I'm  Cherry  from happiest .Are you looking for some help?" >
	                                    <option value="yes">Yes</option>
	                                    <option value="sure">no!</option>
	                                </select>
	                                <input  id="name" type="text" name="name" data-conv-question="Great! First, tell me your full name.">
	                                <input type="text" data-conv-question="Howdy, {name}:0! It's a pleasure to meet you. " data-no-answer="true">
	                           
                                   <input id="email" data-conv-question="Type in your e-mail" data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" id="email" type="email" name="email" required placeholder="What's your e-mail?">
								   <input name="phone" id="phone" data-conv-question="Please type your Contact Number :" > 
								
                                   <select name="type" id="type" data-conv-question="Please tell me which kind of help I can do for you.. Either you want to create your resume or you want to search jobs? please select...?" >
	                                    <option value="Job" >Job</option>
	                                    <option value="CreateRessume">Create Ressume</option>
	                                 
									</select>
						
									<div data-conv-fork="type">
	                                    <div data-conv-case="Job">
										
										
										 <input type="text" data-conv-question="if you want job ,plesae click below url " data-no-answer="true">
                                         <input type="text" data-conv-question="https://happiestresume.com/hot-jobs " data-no-answer="true">
                                       
	                                    </div>
	                                    <div data-conv-case="CreateRessume">

		                                 
											<input type="text" data-conv-question="We are delight to know that you want to create your resume in our website.. To create or edit resume please sign in or register through top right "SIGN IN" button.." data-no-answer="true">
	                                    </div>
	                                </div>
								
	                              
	                                <select data-conv-question="This is it! If you like me,  If you need support, contact me. When the form gets to the end, the chatbot submits it normally, like you had filled it." id="">
	                                    <option value="">Thank you!</option>
									</select>
									
								
	                            </form>
							
							</div>
						
			</div>
		
						</div>	 
						<div class="chat-bot-icon">
							<img src="{{url('public/assets').'/'}}img/we-are-here.svg"/>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square animate"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg> 
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x "><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
						</div>
	</section>
 
	<script type="text/javascript" src="{{url('public/assets').'/'}}jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="{{url('public/assets').'/'}}dist/autosize.min.js"></script>
	<script type="text/javascript" src="{{url('public/assets').'/'}}dist/jquery.convform.js"></script>

    <script>
		jQuery(function($){
			convForm = $('#chat').convform({selectInputStyle: 'disable'});
			console.log(convForm);
		});
    </script>
     <script>
		$(document).ready(function () {
			//Toggle fullscreen
			$(".chat-bot-icon").click(function (e) {
				$(this).children('img').toggleClass('hide');
				$(this).children('svg').toggleClass('animate');
				$('.chat-screen').toggleClass('show-chat');
			});
			$('.chat-mail button').click(function () {
				$('.chat-mail').addClass('hide');
				$('.chat-body').removeClass('hide');
				$('.chat-input').removeClass('hide');
				$('.chat-header-option').removeClass('hide');
			});
			$('.end-chat').click(function () {
				$('.chat-body').addClass('hide');
				$('.chat-input').addClass('hide');
				$('.chat-session-end').removeClass('hide');
				$('.chat-header-option').addClass('hide');
			});
		});
	
	</script>
</body>
</html>