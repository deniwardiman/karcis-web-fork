<?php
include "header.php";
?>

<div class="bg-navy montserrat">
    <br>
    <div class="container">
        <center>
            <br>
            <div class="card col-4" style="padding-top: 20px; box-shadow: 0px 1px 8px 0.5px #FFF; border-radius: 20px;">
                <div class="card-body">
                    <form method="post" action="<?= $host; ?>function/actSigninAdmin.php">
                        <!-- if signup failed -->
                         <?php
                            if(@$_GET['status'] == 'failed'){
                        ?>
                            <b style="display: block;position: relative;text-align:center; color: rgb(244,71,107)">Email dan Password tidak sesuai</b>
                        <?php } else if(@$_GET['status'] == 'success'){ ?>
                            <b class="montserrat" style="text-align: center; color: #339FDC; font-size: 17px;" >Sign Up Successfull</b><br>
                        <?php } ?>
                        <h2 class="text-dark mb-2">Login Admin</h2>
                        <center>
                            <img src="assets/img/icon-landing.svg" class="img-responsive" style="margin-bottom: 70px; margin-top: 20px;">
                        </center>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control mb-5">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit" style="background-color: #4972E1; width: 70%; box-shadow: 0px 1px 8px 1px #4972E1; border-radius: 10px;">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </center>
    </div>
    <br><br><br><br>
</div>
<?php
include "footer.php";
?>