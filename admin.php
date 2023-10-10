<?php
    include "header.php";

    @session_start();
    
    $id = @$_SESSION['id'];
    $tipe = @$_SESSION['tipe'];
   
    if($tipe != 'admin'){
        unset($_SESSION["id"]);
        header('location:'.$host.'adminxyz.php');
    }
?>

    <div class="bg-navy montserrat">
        <br><br><br>
        <center>
            <div class="card col-7">
                <h2 class="text-dark card-body">Halaman Admin</h2>
            </div>
        </center>
        <br><br><br><br><br><br>
    </div>

<?php
    include "footer.php";
?>