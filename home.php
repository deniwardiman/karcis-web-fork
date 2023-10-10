<?php include "conn.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Beli Karcis Kekinian </title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Animation-Cards-1.css">
    <link rel="stylesheet" href="assets/css/Animation-Cards.css">
    <link rel="stylesheet" href="assets/css/booking.css">
    <link rel="stylesheet" href="assets/css/Drag--Drop-Upload-Form.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="assets/css/Lista-Productos-Canito.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/profile.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="assets/css/untitled-1.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <style>
        body {
        font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body style="font-family:-apple-system, BlinkMacSystemFont, sans-serif !important;">  
    <div class="bg-landing">
        <nav class="navbar navbar-expand-md navigation-clean-button bg-navy montserrat">
            <div class="container" id="nav-menu"><a class="navbar-brand" href="<?php echo $host; ?>home.php"><img src="assets/img/logo_white.png" width="150"> </a>

            <?php
                @session_start();
                $id = @$_SESSION['id'];?>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                        <?php
                        if($id) {?>
                            <ul class="navbar-nav mt-3">
                              <li class="nav-item" style="margin-right: 70px;">
                                  <div class="input-group" style="margin-left: 80px;">
                                    <form action="search.php" method="get">
                                        <div class="input-group mt-1">
                                            <input type="text" class="form-control col-10" placeholder="Search ID Booking" name="IDBOOKING" style="border-top-left-radius: 10px;border-bottom-left-radius: 10px; ">
                                            <div class="input-group-append">
                                                <button type="submit" style="width: 50px; border-top-right-radius: 10px; border-bottom-right-radius: 10px; background-color: #4972E1;">
                                                    <i class="fa fa-search text-white" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-white" href="tickets.php">Find Ticket</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-white" href="myBookings.php">My Bookings</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-white" href="myRewards.php">My Rewards</a>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="assets/img/avatar.png" width="40" style="padding-top: 1px;">
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="profile.php">My Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="changePassword.php">Change Password</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?php echo $host;?>function/logout.php">Logout</a>
                                </div>
                              </li>
                            </ul>
                            <?php } else { ?>
                            <a class="mt-3 btn btn-outline-light" href="signin.php" style="margin-left: 740px;" >Sign In</a>
                            <a class="mt-3 btn btn-primary" href="signup.php" style="background-color: #4972E1; box-shadow: 0px 1px 8px 1px #4972E1;">Sign Up</a>
                        <?php } ?>
                    </span>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-8 mt-5 montserrat">
                    <h1 class="text-white" style="font-weight: 520;">Buy Tickets Without Hassle?</h1>
                    <h2 class="text-white">Only at CyberArmy!</h2>
                    <a href="" class="btn btn-primary mt-5" style="width: 200px; background-color: #4972E1; margin-left: 3px; box-shadow: 0px 1px 8px 1px #4972E1;">Order Now</a>
                </div>
                <div class="col">
                    <center>
                        <img src="assets/img/icon-landing.svg" class="mt-2" width="90%" >
                    </center>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <center>
            <h1 class="text-navy montserrat">Partnership</h1>
            <img src="assets/img/icon1.svg" style="margin: 30px;" width="150" class="img-responsive">
            <img src="assets/img/travel.svg" style="margin: 30px;" width="150" class="img-responsive">
            <img src="assets/img/icon2.svg" style="margin: 30px;" width="150" class="img-responsive">
        </center>
    </div>

    <div class="p-5 text-center" style="background-color: #252E71; overflow: hidden; margin-top: 90px;">
        <div class="container">
            <br>
            <center>
                <h1 class="text-white montserrat">Order now to get Special Offer!</h1>
                <a href="" class="btn btn-primary mt-4" style="background-color: #3154DF; width: 20%; box-shadow: 0px 1px 8px 1px #4972E1;">Order Now</a>
            </center>
        </div>
    </div>
    <div class="container">
        <div></div>
    </div>
    <div class="container">
        <div></div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/bs-animation.js"></script>
</body>

</html>