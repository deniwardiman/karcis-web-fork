<?php
include "header.php";
?>

<div class="bg-navy montserrat">
    <br><br><br><br>
    <div class="container">
        <?php if(@$_GET['status'] == 'success') { ?>
            <div class="card col-6" style="border-radius: 10px; box-shadow: 0px 1px 1px 1px #FFF; margin-left: 240px;">
                <div class="container mt-2 mb-2">
                    <h5 style="color: #252E71;">New Password Saved Successfully</h5>
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
                            <input class="form-control" type="password" name="old_password">
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input class="form-control" type="password" name="password">
                        </div>
                        <div class="form-group">
                            <label>Re-enter New Password</label>
                            <input class="form-control" type="password" name="re_password">
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