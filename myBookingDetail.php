<?php
include "header.php";

$id_booking = @$_GET['IDBOOKING'];
$id_ticket = @$_GET['IDTICKET'];

@session_start();
    
$id = @$_SESSION['id'];

if(!$id){
    header('location:'.$host.'signin.php');
}

// get data user
$user = "SELECT tickets.*, booking.id as id_booking, booking.price as booking_price FROM booking LEFT JOIN tickets ON tickets.id = booking.id_ticket WHERE booking.id = $id_booking AND tickets.id = $id_ticket";

$result = $conn->query($user);
$booking = $result->fetch_assoc()
?>

    <div class="bg-navy montserrat">
        <br><br><br><br>
        <div class="container">
            <div class="card">
                <div class="container">
                    <div class="container">
                        <br>
                        <h4>Booking Detail</h4>
                        <hr>
                        <div class="row">
                            <div class="col ml-2">
                                <label>ID Booking</label>
                                <h5><?php echo $booking['id_booking'];?></h5>
                                <br>
                                <label>Destinasi</label>
                                <h5><?php echo $booking['from']." - ".$booking['to'];?></h5>
                                <br>
                                <label>Harga (+PPn)</label>
                                <h5>Rp <?php echo number_format($booking['booking_price'],2,',','.'); ?></h5>
                                <br>
                                <label>Tanggal Pemesanan</label>
                                <h5><?php echo $booking['created_at'];?></h5>
                                <br>
                                <label>Status</label>
                                <h5 class="text-warning">Belum Dibayar</h5>
                            </div>
                        </div>
                        <hr>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br>
    </div>

<?php include "footer.php";?>