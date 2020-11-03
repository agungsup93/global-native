<?php include "../view/header-login.php"; ?>
<?php session_start()?>

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Login</b> Inventory</a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silahkan Login</p>
		<?php 
			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal"){
					echo "
						<div class='alert alert-danger alert-dismissible'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<h6><i class='icon fas fa-ban'></i> Uppsss..!</h6>
							  Cek dulu mungkin ada yang salah
						</div>";
				}else if($_GET['pesan'] == "logout"){
					echo "
						<div class='alert alert-success alert-dismissible'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<h6><i class='icon fas fa-check'></i> Yeeeahh...!</h6>
							  Anda Berhasil Logout
						</div>";
				}else if($_GET['pesan'] == "belum_login"){
					echo "
						<div class='alert alert-warning alert-dismissible'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<h6><i class='icon fas fa-exclamation-triangle'></i> Uppsss..!</h6>
							  Silahkan Login Kembali
						</div>";
				}
			}
		?>
      <form action="../function/login_inventory/controller_auth" method="post">
        <div class="input-group mb-3">
          <input type="text" name="email" class="form-control" placeholder="Email" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="password" type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span id="mybutton" onclick="change()"><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
			<center>
				<img src="../function/captcha/controller_captcha">
			</center>
		<br>
			<div class="form-group">
				<input type="text" class="form-control" name="captcha" required="required" placeholder="captcha harus di isi" autocomplete="off">
			</div>
		<br>	
        <div class="row">
          <div class="col-6">
		  <a href="../index">
            <button type="button" class="btn btn-danger btn-block"><span class="fas fa-backspace"></span>&nbsp;&nbsp;Back</button>
          	<br>		
		  </div>
		  </a>
		  <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block">Sign In&nbsp;&nbsp;<span class="fas fa-external-link-alt"></span></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include "../view/footer-login.php";?>