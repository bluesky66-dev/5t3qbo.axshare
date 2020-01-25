<?php
require_once( "common/header.php" );
?>

<header id="header">
    <div id="newset" class="header-relative">
        <div id="landing-img" class="logo">
            <div class="logo-img">
                <a href="landing.php"><img src="images/tag.png"></a>
            </div>
            <div class="logo-span">
                <a href="landing.php"><span>CVLink</span></a>
            </div>

        </div>

        <div class="header-button ">
            <a href="Home.php">
                <button>How it works</button>
            </a>
        </div>
    </div>
</header>

<div class="angle-landing" style="">
    <div id="about">
        <div class="container">
            <div id="under"></div>
            <div>
                <div class="row landing-row">
                    <div class="col-xl-6 your-first">
                        <div class="first">
                            <a href="Home.php"><p>Your first impression starts here!</p></a>
                        </div>
                        <div class="first-span">
                            <span style="font-family:'Poppins';font-weight:400;">Don't just send your CV into a </span>
                            <span style="font-family:'Poppins';font-weight:700;"> black hole</span>
                            <span style="font-family:'Poppins';font-weight:400;">, rather pitch employers with your CVLink and make that first and lasing impression count.</span>
                        </div>

                        <div class="square-landing-video-box">
                            <div class="square-landing-video embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/Ohf_1212tqM? frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay=1; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen=yes"
                                        scrolling="no" frameborder="0" webkitallowfullscreen="" mozallowfullscreen=""
                                        allowfullscreen=""></iframe>
                            </div>
                        </div>

                        <a href="#mission-row">
                            <button class="see">See how it works</button>
                        </a>

                    </div>
                    <div  class="col-xl-6 your-second" style="">
                        <div class="login">
                            <div class="square-landing-book">
                                <h1 class="sign-name"> Sign up</h1>
                                <span class="account">Already have account?</span>
                                <button class="login-button" onclick="insign()">
                                    Login
                                </button>
                            </div>


                            <form id="register-form" class="square-sign-login-box">

                                <div class="square-sign-box">
                                    <div class="error-textarea">
                                        <div class="col-md-12">
                                            <div class="contact-result" style=""></div>
                                        </div>
                                    </div>
                                         <input id="first_name" type="text" name="first_name" value="" placeholder="First name"
                                           class="register-input">
                                    <div class="error-last">
                                        <div class="col-md-12">
                                            <div class="contact-result" style=""></div>
                                        </div>
                                    </div>
                                        <input id="last_name" type="text" name="last_name" value="" placeholder="Last name"
                                           class="register-input">
                                    <div class="error-email">
                                        <div class="col-md-12">
                                            <div class="contact-result" style=""></div>
                                        </div>
                                    </div>
                                        <input id="email" type="email" name="email" value="" placeholder="Email address"
                                           class="register-input">
                                    <div class="error-password">
                                        <div class="col-md-12">
                                            <div class="contact-result" style=""></div>
                                        </div>
                                    </div>
                                        <input id="password" type="password" name="password" value="" placeholder="Password"
                                           class="register-input">
                                    <div class="error-liner">
                                        <div class="col-md-12">
                                            <div class="contact-result" style=""></div>
                                        </div>
                                    </div>
                                        <input id="user_liner" type="text" name="user_liner" value=""
                                           placeholder="Your one liner e.g. 'Hardworking,Trustworthy,Dynamic, and Determined Individual' "
                                           class="register-input" maxlength="100">
                                    <div class="landing-bottom">
                                        <div class="example">
                                            <label class="checkbox-button">
                                                <input type="checkbox" class="checkbox-button__input" id="choice1-1"
                                                       name="choice1">
                                                <span class="checkbox-button__control"></span>
                                                <span class="checkbox-button__label"
                                                      style="color:  #131031;">I agree to  <span class="terms"> cvlink terms</span></span>
                                            </label>
                                        </div>

                                        <div class="your-cvlink">
                                            <button type="submit">Sign up</button>
                                        </div>


                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="login-signin"   style="display: none;">
                            <div class="square-landing-book">
                                <h1 class="sign-name" > Sign in</h1>
                                <span  class="account">Don't have an account?</span>
                                <button id="upsign" class="login-button" onclick="upsign()" >
                                    Sign up
                                </button>
                            </div>

                            <form id="login-form" class="square-sign-login-box">
                                <div class="square-sign-box">
                                    <div class="error-email-signin">
                                        <div class="col-md-12">
                                            <div class="contact-result" style=""></div>
                                        </div>
                                    </div>
                                    <input   type="email" name="email" value="" placeholder="Email address"  class="register-input">
                                    <div class="error-password-signin">
                                        <div class="col-md-12">
                                            <div class="contact-result" style=""></div>
                                        </div>
                                    </div>
                                    <input  type="password" name="password" value="" placeholder="Password"  class="register-input">

                                    <div class="landing-bottom">
                                        <div class="error-check">
                                            <div class="col-md-12">
                                                <div class="contact-result" style=""></div>
                                            </div>
                                        </div>
                                        <div class="example" >
                                            <label class="checkbox-button" >
0                                               <input type="checkbox" class="checkbox-button__input" id="check_out" name="check_out">
                                                <span class="checkbox-button__control" ></span>
                                                <span class="checkbox-button__label" style="color:  #131031;">Remember me</span>
                                            </label>
                                        </div>

                                        <div class=" sign-in" ><a href="Home.php"><button >Sign in</button></a></div>

                                    </div>
                                    <a href="javascript: void (0);"><div class="forgot">
                                        <p id="forgot" onclick="forgotpass()">Forgot your password?</p>
                                    </div></a>
                                </div>

                            </form>

                        </div>

                        <div   class="forgot-screen" style="display: none">
                            <div class="square-landing-book">
                                <h1 class="sign-name" > Forgot your password?</h1>
                            </div>

                            <form id="login-forgot">
                                <div class="square-sign-box">
                                    <div class="error-email-address">
                                        <div class="col-md-12">
                                            <div class="contact-result" style=""></div>
                                        </div>
                                    </div>
                                    <input   type="email" name="email" value="" placeholder="Email address"  class="register-input">
                                    <div class="landing-recover-bottom">
                                        <button class="recover" style="width: 100%">Recover password</button>
                                    </div>
                                    <a href="javascript: void (0);" >
                                        <div class="never">
                                        <p onclick="never()">Never mind I have remembered</p>
                                    </div>
                                    </a>

                                </div>

                            </form>

                        </div>

                    </div>
                </div>
                <div id="mission-row" style="">

                </div>
                <div class="mission">
                    <div class="we_are"><p>We're On A Mission</p></div>
                    <div class=" give"><span>To give every job seekers the right opportunity to showcase their talent and make a first and lasting impression that count.</span>
                    </div>
                </div>
                <div class="row landing-row">
                    <div class="col-xl-4 col-lg-6 account_people">
                        <img src="images/people.png">
                        <div class="account_p"><p>Create your account</p></div>
                        <br>

                        <div class="account-span"><span>Easily create your account in simple easy steps</span></div>
                    </div>
                    <div class="col-xl-4 col-lg-6 account_people">
                        <img src="images/sa.png">
                        <div class="account_p"><p>Get your CVLink</p></div>
                        <br>
                        <div class="account-span"><span>You get your personalised CVLink</span><br></div>
                    </div>
                    <div class="col-xl-4 col-lg-6 account_people">
                        <img src="images/update.png">
                        <div class="account_p"><p>Upload your pitch</p></div>
                        <br>
                        <div class="account-span"><span>Simply upload your pitch and other documents </span><br></div>
                    </div>
                    <div class="col-xl-4 col-lg-6 account_people">
                        <img src="images/triangle.png">
                        <div class="account_p"><p>Share your CVLink</p></div>
                        <br>
                        <div class="account-span">
                            <span>You simple share your CVLink with recruiters and employers</span></div>
                    </div>
                    <div class="col-xl-4 col-lg-6 account_people">
                        <img src="images/email.png">
                        <div class="account_p"><p>Get Interview Invite</p></div>
                        <br>
                        <div class="account-span"><span>Get invited for interview</span><br></div>
                    </div>
                    <div class="col-xl-4 col-lg-6 account_people">
                        <img src="images/star.png">
                        <div class="account_p"><p>Get Feedback</p></div>
                        <br>
                        <div class="account-span"><span>Or get constructive feedback on your CVLInk </span><br></div>
                    </div>
                </div>
                <div class="let_your">
                    <p>Don't let your CV end up in a black hole.</p>
                </div>
                <div class="cv-get">
                    <a href="#about">
                        <button>Sign up & Get your CVLink</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once( "common/footer.php" );
?>

