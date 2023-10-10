<?php
include "header.php";

$hash = @$_GET['hash'];

$reset_password = "SELECT link FROM forgot_password WHERE hash = '$hash'";

$reset_password_result = $conn->query($reset_password);

$r_reset_password = mysqli_fetch_row($reset_password_result);

?>

<div class="bg-navy montserrat">
	<br><br><br><br>

	<?php if($r_reset_password) { ?>
	<div class="container">
		<div class="form-group">
			<a href="<?php echo $r_reset_password[0]; ?>">
				<button class="btn btn-primary" style="background-color: #4972E1; box-shadow: 0px 1px 8px 1px #4972E1; border-radius: 10px; width: 500px; margin-left: 350px; margin-top: 30px; margin-bottom: 30px;" type="submit">Reset Password</button>
			</a>
		</div>
	</div>
	 <?php } else {
	        echo "Data Not Found, <a href=login.php>Login</a>";
	        
	    } ?>
	<br><br><br><br>
</div>

<?php
include "footer.php";
?>