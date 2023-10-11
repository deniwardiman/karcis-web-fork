<?php
include "header.php";
?>

<div class="bg-navy montserrat">
    <br><br><br><br>
    <div class="container">
        <?php if(@$_GET['status'] == 'success') { ?>
            <div class="card col-6" style="border-radius: 10px; box-shadow: 0px 1px 1px 1px #FFF; margin-left: 240px;">
                <div class="container mt-3 mb-2">
                    <h5 style="color: green;">New Password Saved Successfully</h5>
                </div>
            </div>
            <br><br>
        <?php } ?>
        <?php if(@$_GET['status'] == 'failedKurang'){?>
            <div class="card col-6" style="border-radius: 10px; box-shadow: 0px 1px 1px 1px #FFF; margin-left: 240px;">
                <div class="container mt-3 mb-2">
                    <h5 style="color: red;">Password must be 8 characters</h5>
                </div>
            </div>
            <br><br>
        <?php } ?>
        <?php if(@$_GET['status'] == 'failedBesar' || @$_GET['status'] == 'failedKecil'){?>
            <div class="card col-6" style="border-radius: 10px; box-shadow: 0px 1px 1px 1px #FFF; margin-left: 240px;">
                <div class="container mt-3 mb-2">
                    <h5 style="color: red;">The password must have upper and lower case letters</h5>
                </div>
            </div>
            <br><br>
        <?php } ?>
        <?php if(@$_GET['status'] == 'failedAngka' || @$_GET['status'] == 'failedSymbol'){?>
            <div class="card col-6" style="border-radius: 10px; box-shadow: 0px 1px 1px 1px #FFF; margin-left: 240px;">
                <div class="container mt-3 mb-2">
                    <h5 style="color: red;">The password must contain a combination of numbers and symbols</h5>
                </div>
            </div>
            <br><br>
        <?php } ?>
        <?php if(@$_GET['status'] == 'failedTidakSama'){?>
            <div class="card col-6" style="border-radius: 10px; box-shadow: 0px 1px 1px 1px #FFF; margin-left: 240px;">
                <div class="container mt-3 mb-2">
                    <h5 style="color: red;">Passwords are not the same</h5>
                </div>
            </div>
            <br><br>
        <?php } ?>
        <?php if(@$_GET['status'] == 'failedSama'){?>
            <div class="card col-6" style="border-radius: 10px; box-shadow: 0px 1px 1px 1px #FFF; margin-left: 240px;">
                <div class="container mt-3 mb-2">
                    <h5 style="color: red;">The password is the same as the old password</h5>
                </div>
            </div>
            <br><br>
        <?php } ?>
        <?php if(@$_GET['status'] == 'failedTidakSamaDatabase'){?>
            <div class="card col-6" style="border-radius: 10px; box-shadow: 0px 1px 1px 1px #FFF; margin-left: 240px;">
                <div class="container mt-3 mb-2">
                    <h5 style="color: red;">The old password is wrong</h5>
                </div>
            </div>
            <br><br>
        <?php } ?>
        <div class="card col-7" style="border-radius: 20px; box-shadow: 0px 1px 1px 1px #FFF; margin-left: 240px;">
            <div class="container">
                <div class="container">
                    <br>
                    <h4>Change Password</h4>
                    <hr>
                    <form action="<?php echo $host;?>function/actChangePassword.php" method="post">
                        <div class="form-group">
                            <label>Old Password</label>
                            <input class="form-control" type="password" name="old_password" required>
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input class="form-control" type="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label>Re-enter New Password</label>
                            <input class="form-control" type="password" name="re_password" required>
                        </div>
                        <div class="ml-auto">
                            <button class="btn btn-primary" style="background-color: #4972E1; width: 70%; box-shadow: 0px 1px 8px 1px #4972E1; border-radius: 10px; width: 250px; margin-left: 305px; margin-top: 30px; margin-bottom: 30px;" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

<?php
include "footer.php";
?>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
