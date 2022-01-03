<?php
include 'app/require.php';

$user = new UserController;

Session::init();

if (Session::isLogged()) { Util::redirect('/'); }
if ($_SERVER['REQUEST_METHOD'] === 'POST') { $error = $user->loginUser($_POST); }

Util::head('Login');

?>
<body class="bg-gradient-primary">
	<br>
	<br>
	<br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10" style="margin-left: -79px;width: 795px;max-width: 647px;min-width: 80px;">
                <div class="card shadow-lg o-hidden border-0 my-5" style="margin: 60px;margin-top: 49px;width: 90%;background-color: rgb(38,38,38);border-radius: 5px;border: 2px solid #7b7a7a;">
                    <div class="card-body p-0" style="background-color: rgba(50,50,50,0);">
                        <div class="row" style="background-color: #343434;padding: 0px;padding-right: 0px;margin-left: 0px;margin-right: 0px;">
                            <div class="col-lg-6 offset-xl-3 text-center" style="max-width: 100%;">
                                <div class="p-5" style="background-color: #343434;height: 416px;width: 411px;margin-left: -67px;margin-top: 8px;margin-bottom: 15px;margin-right: 10px;padding: 56px;padding-right: 80px;">
                                    <h1 class="text-center" style="color: rgb(255,255,255);">FuckJSONPanel<br></h1>
                                    <div class="text-center"></div>
                                    <form class="user" style="margin-top: 34px;" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                                        <div class="form-group"><input class="form-control form-control-user" type="text" id="Username" placeholder="Username" name="username" style="background-color: rgb(48,48,48);"></div>
                                        <div class="form-group"><input class="form-control form-control-user" type="password" id="password" placeholder="Password" name="password" style="background-color: rgb(48,48,48);"></div>
										<button class="btn btn-primary btn-block text-white btn-user" data-bss-hover-animate="pulse" type="submit" style="background-color: rgb(217, 150, 68);border-color: #a26319;border-radius: 5px;" id="submit" type="submit" value="submit">Login</button>
                                        <hr style="color: rgb(250,250,255);filter: hue-rotate(0deg) invert(100%);"><a class="text-center small" href="register.php" style="color: rgb(217, 150, 68);align-items: center;">Create an Account!</a>
                                        <hr style="filter: invert(100%);">
                                    </form>
                                    <div class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>


<?php Util::footer(); ?>