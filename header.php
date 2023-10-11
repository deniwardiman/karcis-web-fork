<?php 
@session_start();
include 'conn.php'; 
$id = @$_SESSION['id'];
if($id){
  include "function/getProfile.php";
}
?>


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
<!--    <link rel="stylesheet" href="assets/css/Animation-Cards-1.css">-->
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
</head>

<body style="font-family:-apple-system, BlinkMacSystemFont, sans-serif !important;">
    <div>
        <nav class="navbar navbar-expand-md navigation-clean-button bg-navy montserrat">
            <div class="container" id="nav-menu"><a class="navbar-brand" href="<?php echo $host; ?>home.php"><img src="assets/img/logo_white.png" width="150"> </a>

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
                            <a class="mt-3 btn btn-outline-light" href="signin.php" style="margin-left: 740px;">Sign In</a>
                            <a class="mt-3 btn btn-primary" href="signup.php" style="background-color: #4972E1; box-shadow: 0px 1px 8px 1px #4972E1;">Sign Up</a>
                        <?php } ?>
                    </span>
                </div>
            </div>
        </nav>
    </div>
