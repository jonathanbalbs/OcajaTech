<!doctype html>
<html lang="en">
  <head>
  	<title>Ocaja Technologies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <!-- Scripts -->
  </head>
  <body>

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="px-3 mt-4">
		  		<div class="text-center text-primary mt-3">
                    <a href="#">
                        <span style="font-size: 36px">Ocaja</span>
                        <br>
                    </a>
                </div>
                <div class="text-center">
                    <a href="#">
                        <span style="font-size: 18x">Technologies</span>
                    </a>
                </div>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	              <a href="#"><i class="fa fa-tachometer pr-2"></i>Home</a>
	          </li>
	          <li>
	            <a href="#airtimeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle pr-2">
                    <i class="fa fa-phone pr-2"></i>
                    Airtime
                </a>
	            <ul class="collapse list-unstyled" id="airtimeSubmenu">
                    <li>
                        <a href="#">Send to one</a>
                    </li>
                    <li>
                        <a href="#">Send to many</a>
                    </li>
                    <li>
                        <a href="#">Approvals</a>
                    </li>
                    <li>
                        <a href="#">Transactions</a>
                    </li>
                    <li>
                        <a href="#">Generate report</a>
                    </li>
	            </ul>
	          </li>
	          <li>
                <a href="#dataSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-globe pr-2"></i>
                    Data Bundles
                </a>
                <ul class="collapse list-unstyled" id="dataSubmenu">
                    <li>
                        <a href="#">Send to one</a>
                    </li>
                    <li>
                        <a href="#">Send to many</a>
                    </li>
                    <li>
                        <a href="#">Approvals</a>
                    </li>
                    <li>
                        <a href="#">Transactions</a>
                    </li>
                    <li>
                        <a href="#">Generate report</a>
                    </li>
                </ul>
	          </li>
	          <li>
                <a href="#mmSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-mobile pr-2" style="font-size: 25px"></i>
                    Mobile Money
                </a>
                <ul class="collapse list-unstyled" id="mmSubmenu">
                    <li>
                        <a href="#">Send to one</a>
                    </li>
                    <li>
                        <a href="#">Send to many</a>
                    </li>
                    <li>
                        <a href="#">Approvals</a>
                    </li>
                    <li>
                        <a href="#">Transactions</a>
                    </li>
                    <li>
                        <a href="#">Generate report</a>
                    </li>
                </ul>
              </li>
              <li>
                <a href="#vSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-credit-card pr-2"></i>
                    Credit card
                </a>
                <ul class="collapse list-unstyled" id="vSubmenu">
                    <li>
                        <a href="#">Transactions</a>
                    </li>
                    <li>
                        <a href="#">Reports</a>
                    </li>
                    <li>
                        <a href="#">Settings</a>
                    </li>
                </ul>
              </li>
              <li>
                <a href="#accountSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-cogs pr-2"></i>
                    Settings
                </a>
                <ul class="collapse list-unstyled" id="accountSubmenu">
                    <li>
                        <a href="#">Profile</a>
                    </li>
                    <li>
                        <a href="#">Users</a>
                    </li>
                    <li>
                        <a href="#">API</a>
                    </li>
                </ul>
              </li>
	        </ul>

	        <div class="footer">
	        	<p>
					&copy;<script>document.write(new Date().getFullYear());</script> | Ocaja Technologies</a>
				</p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="pt-0 px-3">

        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto" style="color: #f8b739">
                <li class="nav-item pr-5 mr-5">
                    <a class="nav-link" href="#" style="position: relative; display: inline-block;">
                        <span class="fa fa-bell" style="font-size: 20px !important;"></span>
                        <span style="position: absolute;top: 0px;font-size: 9px;right: 0px;padding: 0px 5px;border-radius: 50%;background: #c00000;color: white;">
                            3
                        </span>
                    </a>
                </li>
                <li class="nav-item pr-3">
                    <a class="nav-link">UGX0</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/Ocaja/public/custom-login" title="Log out">
                        <span class="fa fa-power-off" style="font-size: 20px !important; color: #f8b739"></span>
                    </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="card">
            <div class="card-ttle text-center">
                <h3 class="mb-4">Recent Transactions</h3>
            </div>
            <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
      </div>
		</div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
  </body>
</html>
