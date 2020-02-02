<?php
require_once( "common/load.php" );
require_once( "common/header.php" );
global $cvVerify;

if (isset($_GET['token']) && $_GET['token']) {
    $token = $_GET['token'];
    $result = $cvVerify->resetUser($token);


    if (!$result) {
        header("Location: /");
        exit();
    }
}  else {
    header("Location: /");
    exit();
}

?>





<div class="row" style="">
<div class="col-xl-4"></div>
    <div class="col-xl-4 reset">
        <h1>CV Link</h1>
        <p>Please enter your email address and we'll send you a recovery link.</p>
        <form id="reset-forgot">
            <div class="square-sign-box" style="margin: 0">
                <div class="error-email-address">
                    <div class="col-md-12">
                        <div class="contact-result" style=""></div>
                    </div>
                </div>

                <input   type="password" name="password" value="" placeholder="Password"  class="register-input" style="height: 60px;margin-bottom: 10px">

                <input   type="password" name="password" value="" placeholder="Confirm Password"  class="register-input" style="height: 60px;margin-bottom: 25px">

                <div class="landing-recover-bottom">
                    <button class="recover" onclick="" style="width: 100%">Reset password</button>
                </div>

            </div>

        </form>


    </div>
    <div class="col-xl-4"></div>

</div>
<script src="lib/jquery/jquery.min.js"></script>
<!--    <script src="lib/jquery/jquery-3.2.1.min.js"></script>-->
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/mobile-nav/mobile-nav.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/additional-methods.js"></script>
<!--<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>-->


<!-- Template Main Javascript File -->
<script src="js/main.js"></script>
<script src="js/book.js"></script>

</body>
</html>


<!-- /.wrapper -->

<!-- Start Core Plugins
   =====================================================================-->
<!-- jQuery -->
<script src="lib/jquery/jquery.min.js"></script>
<!--    <script src="lib/jquery/jquery-3.2.1.min.js"></script>-->
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/mobile-nav/mobile-nav.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/additional-methods.js"></script>
<!--<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>-->


<!-- Template Main Javascript File -->
<script src="js/main.js"></script>
<script src="js/book.js"></script>

</body>
</html>