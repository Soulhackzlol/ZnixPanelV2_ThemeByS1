<?php

require_once 'app/require.php';
require_once 'app/controllers/CheatController.php';

$user = new UserController;
$cheat = new CheatController;

Session::init();

if (!Session::isLogged()) { Util::redirect('/login.php'); }

$username = Session::get("username");

Util::banCheck();
Util::head($username);

?>
<body id="page-top" style="background-color: #303030;">
    <div id="wrapper" style="margin: 24px;margin-left: 15%;margin-right: 15%;">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="margin: 69px;margin-bottom: -1px;background-color: rgb(38,38,38);opacity: 1;filter: blur(0px) brightness(100%) contrast(100%) grayscale(0%) hue-rotate(0deg) invert(0%);height: 100px;min-height: 332px;border: 1px solid #777777;border-radius: 5px;">
            <div class="container-fluid d-flex flex-column p-0">
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar" style="height: 100%;width: 106px;">
                    <li class="nav-item" style="margin-top: 10px;"><a class="nav-link text-center active" href="index.php" title="General Information" style="padding: 21px;padding-top: 15%;width: 103px;"><i class="fas fa-tachometer-alt"></i><span style="
    margin: -13px;
">Dashboard</span></a></li>
                    <li class="nav-item" style="width: 125px;"><a class="nav-link text-center" href="profile.php" style="padding: 24px;padding-top: 15%;width: 103px;"><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link text-center" href="vip.php" style="padding: 21px;padding-top: 15%;width: 103px;"><i class="fas fa-star" style="color: #D99644;"></i><span style="color: #d99644;">Premium</span></a></li>
                    <li class="nav-item"><a class="nav-link text-center" href="logout.php" style="padding: 22px;padding-top: 15%;width: 103px;"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top" style="background-color: rgb(38,38,38);margin: -1px;margin-top: 69px;margin-right: 57px;margin-left: -1px;border: 1px solid #777777;border-radius: 5px;border-left: 3px solid #77777777;">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars" style="margin-right: 0px;margin-left: 0px;"></i></button><i class="fas fa-star" style="color: #D99644;"></i>
                        <h3 class="text-dark mb-0" style="font-family: ABeeZee, sans-serif;font-size: 16px;visibility: show;margin-left: 10px;">Premium</h3>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <div class="input-group-append">
									

								</div>
                            </div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="text-capitalize shadow-sm d-none d-lg-inline mr-2 text-gray-600 small"><?php echo $username?></span><img class="border rounded-circle img-profile" src="https://th.bing.com/th/id/Rf8b3c0057307f8f9a0b2642ac20bca68?rik=OogxNdnyg9PgMw&amp;riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fdownload_132909.png&amp;ehk=pdAlvZWvzFExG2Cp3ySeyBniEjk3hPtWk297IA18bQQ%3d&amp;risl=&amp;pid=ImgRaw"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" style="background-color: rgb(59,59,59);margin: 0px;margin-right: 0px;margin-top: 0px;border-radius: 0px 0px 5px 5px;border: 1px solid #777777;border-top: none;"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
				<!--Statistics-->
				<div class="container-fluid" style="padding-left: 0px;padding-right: 0px;">
                    <div class="col" style="margin-right: 0px;max-width: 95%;margin-left: 4px;">
                        <div class="card shadow mb-3" style="max-width: 100%;width: 99%;">
						<div class="card-header py-3" style="max-width: 100%;min-width: 100%;width: 100%;border-bottom: 1px solid #343434;">
				<div class="h5 border-bottom border-secondary pb-1"><i class="fas fa-download"></i> Download Client</div>
				<div class="row text-muted">
                    <button onclick="window.location.href='download.php';" class="btn btn-primary btn-block text-white btn-user" data-bss-hover-animate="pulse" style="background-color: rgb(217, 150, 68);border-color: #a26319;border-radius: 5px; padding: 10px; margin-left:15%; margin-right:15%; margin-top:1%">Download</button>
					
				
			



	</div>
            </div>
			
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
		
    </div>
    <footer class="bg-white sticky-footer" style="position: absolute;left: 0;bottom: 0;width: 100%;color: #FFFFFF;background: #06303A;font-size: 1.5em;text-align: center;line-height: 100px;">
        <div class="container my-auto">
            <div class="text-center my-auto copyright"><span>Copyright © mortifiers 2021</span></div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>


</main>
<?php Util::footer(); ?>
