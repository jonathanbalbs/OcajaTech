<!doctype html>
<html lang="en">
  <head>
  	<title>Ocaja Technologies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}" />

    <!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

  </head>
  <body>

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="px-3 mt-4">
		  		<a href="#" class="img logo rounded-circle mb-5 bg-light">
                  <img src="{{ asset('images/ot-logo-sm.png') }}" style="">
                </a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	              <a href="#"><i class="fa fa-tachometer pr-2"></i>Home</a>
	          </li>
	          <li>
	            <a href="#airtimeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle pr-2">
                    <i class="fa fa-dollar pr-2"></i>
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
                <a href="#voiceSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-phone pr-2"></i>
                    Voice Bundles
                </a>
                <ul class="collapse list-unstyled" id="voiceSubmenu">
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

        <nav class="navbar navbar-expand-lg navbar-custom ">
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
                <li class="nav-item pr-4">
                    <p class="nav-link" title="Account Balance">
                        UGX 0.00
                    </p>
                </li>
                <li class="nav-item pr-4">
                    <p class="nav-link" title="Account">
                        <span class="fa fa-user"></span>
                        Balbs Computer Laboratories
                    </p>
                </li>
                <li class="nav-item pr-4">
                    <a class="nav-link" href="#" style="position: relative; display: inline-block;" title="Notifications">
                        <span class="fa fa-bell" style="font-size: 20px !important;"></span>
                        <span style="position: absolute;top: 0px;font-size: 9px;right: 0px;padding: 0px 5px;border-radius: 50%;background: #c00000;color: white;">
                            3
                        </span>
                    </a>
                </li>
                <li class="nav-item logout-link">
                    <a class="nav-link logout-link" href="http://localhost/Ocaja/public/custom-login" title="Log out">
                        <span class="fa fa-power-off" style="font-size: 20px !important;"></span>
                    </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="card">
            <div class="card-header text-center">
                <h3>Recent Transactions</h3>
            </div>
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Data Bundle Purchase</h5>
                        <small>5 minute(s) ago</small>
                        </div>
                        <div class="row text-small">
                            <div class="col text-sm"><span class="font-weight-bold">Account: </span>+256781118292</div>
                            <div class="col text-sm"><span class="font-weight-bold">Volume: </span>2.0GB</div>
                            <div class="col text-sm"><span class="font-weight-bold">Charge: </span>UGX 25000.0</div>
                            <div class="col text-sm"><span class="font-weight-bold">Exp Date: </span>26/06/2020 15:34:19</div>
                        </div>
                        <small><span class="">Transaction status: Successful</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Cash Transfer</h5>
                        <small>9 hour(s) ago</small>
                        </div>
                        <div class="row">
                            <div class="col text-sm"><span class="font-weight-bold">Sender: </span>+256754033080</div>
                            <div class="col text-sm"><span class="font-weight-bold">Reciever: </span>+256755880303</div>
                            <div class="col text-sm"><span class="font-weight-bold">Amount: </span>UGX 152000.0</div>
                            <div class="col text-sm"><span class="font-weight-bold">Charge: </span>UGX 300.0</div>
                            <div class="col text-sm"><span class="font-weight-bold">Message: </span>Corvid-19</div>

                        </div>
                        <small><span class="">Transaction status: Successful</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Airtime Purchase</h5>
                        <small>2 day(s) ago</small>
                        </div>
                        <div class="row text-small">
                            <div class="col text-sm"><span class="font-weight-bold">Account: </span>+256752138826</div>
                            <div class="col text-sm"><span class="font-weight-bold">Provider: </span>Airtel UG</div>
                            <div class="col text-sm"><span class="font-weight-bold">Amount:</span>UGX 1000.0</div>
                            <div class="col text-sm"><span class="font-weight-bold">Charge: </span>UGX 50.0</div>
                        </div>
                        <small><span class="">Transaction status: Successful</small>
                    </a>
                    </div>
            </div>
        </div>
        <div class="card my-5">
            <div class="card-header text-center">
                <h3>Quick Links</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <h5 class="text-center text-secondary">Airtime</h5>
                        <hr>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione nobis sint corporis fugit eveniet suscipit aliquam incidunt totam, aut a iure quae, accusamus atque, autem voluptatibus enim ullam in inventore.</p>
                        <div class="text-center">
                            <div class="tet-center">
                                <a href="#" class="btn btn-secondary btn-block">Buy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h5 class="text-center text-secondary">Data Bundles</h5>
                        <hr>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione nobis sint corporis fugit eveniet suscipit aliquam incidunt totam, aut a iure quae, accusamus atque, autem voluptatibus enim ullam in inventore.</p>
                        <div class="text-center">
                            <div class="tet-center">
                                <a href="#" class="btn btn-secondary btn-block">Load</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h5 class="text-center text-secondary">Voice Bundles</h5>
                        <hr>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione nobis sint corporis fugit eveniet suscipit aliquam incidunt totam, aut a iure quae, accusamus atque, autem voluptatibus enim ullam in inventore.</p>
                        <div class="text-center">
                            <div class="tet-center">
                                <a href="#" class="btn btn-secondary btn-block">Buy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h5 class="text-center text-secondary">Mobile Money</h5>
                        <hr>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione nobis sint corporis fugit eveniet suscipit aliquam incidunt totam, aut a iure quae, accusamus atque, autem voluptatibus enim ullam in inventore.</p>
                        <div class="text-center">
                            <div class="tet-center">
                                <a href="#" class="btn btn-secondary btn-block">Send</a>
                            </div>
                        </div>
                    </div>
                </div>
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
