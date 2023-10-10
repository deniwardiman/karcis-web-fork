<?php
    include "header.php";
    include "function/getProfile.php";

    ?>

<!-- cek tipe session -->
<!-- jika session == admin, redirect ke halaman admin <?php echo $host;?>adminxyz.php -->

<?php
if(@$_SESSION['tipe'] == 'admin'){
    unset($_SESSION["id"]);
    header('Location: '.$host.'adminxyz.php');
    exit;
}
?>

<div class="bg-navy montserrat">
    <br><br><br><br>
    <?php if(@$_GET['status'] == 'success') { ?>
        <div class="card col-4" style="border-radius: 10px; box-shadow: 0px 1px 1px 1px #FFF; margin-left: 90px;">
            <div class="container mt-2 mb-2">
                <h5 style="color: #252E71;">Booked Successfull</h5>
            </div>
        </div>
        <br><br>
    <?php } ?>
    <div class="container">
        <div class="card">
            <div class="container">
                <div class="container">
                    <br>
                    <h4>Profile</h4>
                    <hr>
                    <div class="row">
                        <div class="col ml-2">
                            <label>Nama Lengkap</label>
                            <h5><?php echo $user_profile['fullname'];?></h5>
                            <br>
                            <label>Email</label>
                            <h5><?php echo $user_profile['email'];?></h5>
                            <br>
                            <label>Nomor Handphone</label>
                            <h5><?php echo $user_profile['phone'];?></h5>
                        </div>
                        <div class="col">
                            <label>Identitas (KTP/SIM/PASSPORT)</label>
                            <div class="pb-4 pt-4">
                                <center>
                                    <?php if($user_profile['identity_card']){
                                        echo "<img src =".$host."files/".$user_profile['identity_card']." style='width: 180px'>";
                                    } ?>
                                </center>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <br>
                    <a href="<?php echo $host;?>editProfile.php" class="btn btn-primary" style="background-color: #4972E1; box-shadow: 0px 1px 8px 1px #4972E1; border-radius: 10px; width: 200px; margin-left: 800px;">
                                Edit
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
</div>

<?php
include "footer.php";
?>