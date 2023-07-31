  <!DOCTYPE html>
<html lang="en">

<head>
    <title>chatbot</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ url('public/assets') . '/' }}dist/jquery.convform.css">
    <link href="{{ url('public/assets') . '/' }}chatBot.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <section id="demo" style="z-index:9999 !important;">
        <div class="chat-screen">
            <div class="chat-header">
                <div class="chat-header-title">
                    Let’s chat? - We're online
                </div>
                <div class="chat-header-option hide">
                    <span class="dropdown custom-dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-more-horizontal">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink1"
                            style="will-change: transform;">
                            <a class="dropdown-item" href="javascript:void(0);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="#bc32ef" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-file-text">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                Send Transcriptions
                            </a>
                            <a class="dropdown-item end-chat" href="javascript:void(0);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="#bc32ef" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-power">
                                    <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
                                    <line x1="12" y1="2" x2="12" y2="12"></line>
                                </svg>
                                End Chat
                            </a>
                        </div>
                    </span>
                </div>
            </div>


            <div class="card no-border">

                <div id="chat" class="conv-form-wrapper">
                    <form action="{{ url('/store-chatbot-data') }}" method="POST" class="hidden">


                        <select name="question1"
                            data-conv-question="Hello! I'm  Alexa from Happiest Resume .Are you looking for some help?"
                            name="first-question">
                            <option value="yes">Yes</option>
                            <option value="sure">no!</option>
                        </select>
                        <input type="text" name="name"
                            data-conv-question="Great! First, tell me your First and Last name.">

                        <input type="text" data-conv-question="Hi {name}, <br> It's a pleasure to meet you."
                            data-no-answer="true">

                        <input data-conv-question="Enter your e-mail"
                            data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"
                            type="email" name="email" required placeholder="What's your e-mail?">

                        <input type="text" name="phone" data-pattern="^\d{10}$"
                            data-conv-question="Please type your Contact Number :">
                        

                        <select name="totalExp"
                            data-conv-question="What is your Work Status?"
                            name="totalExp">
                            <option value="0">Fresher</option>
                            <option value="1-5">1-5 Y</option>
                            <option value="6-10">6-10 Y</option>
                            <option value="10+">10+ Y</option>
                        </select>

						<select name="relocate"
                            data-conv-question="Are you comfortable to relocate?"
                            name="relocate">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        
						<select name="noticePeriod"
                            data-conv-question="What will be your Notice period?"
                            name="noticePeriod">
                            <option value="15-30">15-30 Days</option>
                            <option value="30-60">30-60 Days</option>
                            <option value="60-90">60-90 Days</option>
                        </select>

						<select name="noticePeriodSurving"
                            data-conv-question="Surving Notice period?"
                            name="noticePeriodSurving">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                        </select>
                        
                        <select
                            data-conv-question="Please tell me which kind of help I can do for you.. Either you want to create your resume or you want to search jobs? please select..."
                            name="person_type">
                            <option value="Job">Job</option>
                            <option value="MakeResume">Make Resume</option>
                        </select>

                        <div data-conv-fork="person_type">
                            <div data-conv-case="Job">

                                <input type="text" data-conv-question="you want to search jobs? please check below URL "
                                    data-no-answer="true">
                                <input type="text" data-conv-question="https://happiestresume.com/exclusive-jobs"
                                    data-no-answer="true">
                                <select data-conv-question="Please Confirm">
                                    <option data-callback="google" value="Yes">Confirm</option>
                                </select>
                            </div>
                            <div data-conv-case="MakeResume" data-conv-fork="first-question2">
                                <input type="text"
                                    data-conv-question="Create a beautiful Resume? please check below URL"
                                    data-no-answer="true">
                                <input type="text" data-conv-question="https://happiestresume.com/resumeloginone"
                                    data-no-answer="true">
                                <select data-conv-question="Please Confirm">
                                    <option data-callback="bing" value="Yes">Confirm</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="chat-bot-icon">

            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-message-square animate">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-x ">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </div>
    </section>

    <script type="text/javascript" src="{{ url('public/assets') . '/' }}jquery-1.12.3.min.js"></script>

    <script type="text/javascript" src="{{ url('public/assets') . '/' }}dist/jquery.convform.js"></script>
    <script>
        function google(stateWrapper, ready) {
            window.open("https://happiestresume.com/exclusive-jobs");
            ready();
        }

        function bing(stateWrapper, ready) {
            window.open("https://happiestresume.com/resumeloginone");
            ready();
        }
        var rollbackTo = false;
        var originalState = false;

        function storeState(stateWrapper, ready) {
            rollbackTo = stateWrapper.current;
            console.log("storeState called: ", rollbackTo);
            ready();
        }

        function rollback(stateWrapper, ready) {
            console.log("rollback called: ", rollbackTo, originalState);
            console.log("answers at the time of user input: ", stateWrapper.answers);
            if (rollbackTo != false) {
                if (originalState == false) {
                    originalState = stateWrapper.current.next;
                    console.log('stored original state');
                }
                stateWrapper.current.next = rollbackTo;
                console.log('changed current.next to rollbackTo');
            }
            ready();
        }

        function restore(stateWrapper, ready) {
            if (originalState != false) {
                stateWrapper.current.next = originalState;
                console.log('changed current.next to originalState');
            }
            ready();
        }
    </script>
    <script>
        jQuery(function($) {
            convForm = $('#chat').convform({
                selectInputStyle: 'disable'
            });
            console.log(convForm);
        });
    </script>
    <script>
        $(document).ready(function() {
            //Toggle fullscreen
            $(".chat-bot-icon").click(function(e) {
                $(this).children('img').toggleClass('hide');
                $(this).children('svg').toggleClass('animate');
                $('.chat-screen').toggleClass('show-chat');
            });
            $('.chat-mail button').click(function() {
                $('.chat-mail').addClass('hide');
                $('.chat-body').removeClass('hide');
                $('.chat-input').removeClass('hide');
                $('.chat-header-option').removeClass('hide');
            });
            $('.end-chat').click(function() {
                $('.chat-body').addClass('hide');
                $('.chat-input').addClass('hide');
                $('.chat-session-end').removeClass('hide');
                $('.chat-header-option').addClass('hide');
            });
        });
    </script>
</body>

</html>
