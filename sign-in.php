
    <script>
        // function upsign() {
        //     var xhttp = new XMLHttpRequest();
        //     xhttp.onreadystatechange = function() {
        //         if (this.readyState == 4 && this.status == 200) {
        //             document.getElementById("upsign").innerHTML =
        //                 this.responseText;
        //         }
        //     };
        //     xhttp.open("GET", "signup.html", true);
        //     xhttp.send();
        // }
        function forgotpass() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("forgot").innerHTML =
                        this.responseText;
                }
            };
            xhttp.open("GET", "forgot.html", true);
            xhttp.send();
        }
    </script>


    <div   style="padding-left: 40px;">
        <div class="square-landing-book">
           <h1 class="sign-name" > Sign in</h1>
            <span  class="account">Don't have an account?</span>
            <button id="upsign" class="login-button" onclick="upsign()" >
                Sign up
            </button>
        </div>

        <div class="square-sign-login-box">
            <div class="square-sign-box">
                <input id="email"  type="email" name="email" value="" placeholder="Email address"  class="register-input">
                <input id="password"  type="password" name="password" value="" placeholder="Password"  class="register-input">
                <div class="landing-bottom">
                    <div class="example">
                        <label class="checkbox-button">
                            <input type="checkbox" class="checkbox-button__input" id="choice1-1" name="choice1">
                            <span class="checkbox-button__control"></span>
                            <span class="checkbox-button__label" style="color:  #131031;">Remember me</span>
                        </label>
                    </div>

                    <a href="Home.php"><button class="your-cvlink" >Sign in</button></a>

                </div>
                <div class="forgot">
                    <a><p id="forgot" onclick="forgotpass()">Forgot your password?</p></a>
                </div>
            </div>

        </div>

    </div>

