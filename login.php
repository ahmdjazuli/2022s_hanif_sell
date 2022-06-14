<?php error_reporting(0); ?>
<!DOCTYPE html> <html lang="en">
<head>
  <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<title>Hanif Komputer</title>
        <link rel="stylesheet" href="assets/css/fontGoogle.css">
        <!-- favicon start -->
        <link rel="shortcut favicon" href="assets/icon/kaira2.ico">
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/icon/hanif.jfif" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/icon/hanif.jfif" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/icon/hanif.jfif" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/icon/hanif.jfif" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="assets/icon/hanif.jfif" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="assets/icon/hanif.jfif" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="assets/icon/hanif.jfif" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="assets/icon/hanif.jfif" />
        <link rel="icon" type="image/png" href="assets/icon/hanif.jfif" sizes="196x196" />
        <link rel="icon" type="image/png" href="assets/icon/hanif.jfif" sizes="96x96" />
        <link rel="icon" type="image/png" href="assets/icon/hanif.jfif" sizes="32x32" />
        <link rel="icon" type="image/png" href="assets/icon/hanif.jfif" sizes="16x16" />
        <link rel="icon" type="image/png" href="assets/icon/hanif.jfif" sizes="128x128" />
        <meta name="application-name" content="&nbsp;"/>
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="assets/icon/hanif.jfif" />
        <meta name="msapplication-square70x70logo" content="assets/icon/hanif.jfif" />
        <meta name="msapplication-square150x150logo" content="assets/icon/hanif.jfif" />
        <meta name="msapplication-wide310x150logo" content="assets/icon/hanif.jfif" />
        <meta name="msapplication-square310x310logo" content="assets/icon/hanif.jfif" />
  <style>
	    body{
		margin:5;
		background: linear-gradient(105deg, #019bfb, transparent);
		font:600 16px/18px 'Open Sans',sans-serif;
	}
	*,:after,:before{box-sizing:border-box}
	.clearfix:after,.clearfix:before{content:'';display:table}
	.clearfix:after{clear:both;display:block}
	a{color:inherit;text-decoration:none}

	.login-wrap{
		width:100%;
		margin:auto;
		max-width:525px;
		min-height:670px;
		position:relative;
		box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
	}
	.login-html{
		width:100%;
		height:100%;
		position:absolute;
		padding:50px 70px 50px 70px;
		background-color: #000000ba;
	}
	.login-html .sign-in-htm,
	.login-html .sign-up-htm{
		top:0;
		left:0;
		right:0;
		bottom:0;
		position:absolute;
		transform:rotateY(180deg);
		backface-visibility:hidden;
		transition:all .4s linear;
	}
	.login-html .sign-in,
	.login-html .sign-up,
	.login-form .group .check{
		display:none;
	}
	.login-html .tab,
	.login-form .group .label,
	.login-form .group .button{
		text-transform:uppercase;
	}
	.login-html .tab{
		font-size:22px;
		margin-right:15px;
		padding-bottom:5px;
		margin:0 15px 10px 0;
		display:inline-block;
		border-bottom:2px solid transparent;
	}
	.login-html .sign-in:checked + .tab,
	.login-html .sign-up:checked + .tab{
		color:#fff;
		border-color:#0a9ffc;
	}
	.login-form{
		min-height:345px;
		position:relative;
		perspective:1000px;
		transform-style:preserve-3d;
	}
	.login-form .group{
		margin-bottom:15px;
	}
	.login-form .group .label,
	.login-form .group .input,
	.login-form .group .button{
		width:100%;
		color:#fff;
		display:block;
	}
	.login-form .group .input,
	.login-form .group .button{
		border:none;
		padding:15px 20px;
		background:rgba(255,255,255,.1);
	}
	.login-form .group input[data-type="password"]{
		text-security:circle;
		-webkit-text-security:circle;
	}
	.login-form .group .label{
		color:#aaa;
		font-size:12px;
	}
	.login-form .group .button{
		background:#0a9ffc;
	}
	.login-form .group label .icon{
		width:15px;
		height:15px;
		border-radius:2px;
		position:relative;
		display:inline-block;
		background:rgba(255,255,255,.1);
	}
	.login-form .group label .icon:before,
	.login-form .group label .icon:after{
		content:'';
		width:10px;
		height:2px;
		background:#fff;
		position:absolute;
		transition:all .2s ease-in-out 0s;
	}
	.login-form .group label .icon:before{
		left:3px;
		width:5px;
		bottom:6px;
		transform:scale(0) rotate(0);
	}
	.login-form .group label .icon:after{
		top:6px;
		right:0;
		transform:scale(0) rotate(0);
	}
	.login-form .group .check:checked + label{
		color:#fff;
	}
	.login-form .group .check:checked + label .icon{
		background:#1161ee;
	}
	.login-form .group .check:checked + label .icon:before{
		transform:scale(1) rotate(45deg);
	}
	.login-form .group .check:checked + label .icon:after{
		transform:scale(1) rotate(-45deg);
	}
	.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
		transform:rotate(0);
	}
	.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
		transform:rotate(0);
	}

	.hr{
		height:2px;
		margin:60px 0 50px 0;
		background:rgba(255,255,255,.2);
	}
	.foot-lnk{
		text-align:center;
	}
  </style>
</head>
<body>
<?php
	?> <script src="assets/js/sweetalert2.all.min.js"></script> <?php
	if ($_GET['m'] == "gagal") {?>
		<script type="text/javascript">
			Swal.fire({
				type: 'error',
				title: 'Oops...',
				text: 'Username/Password Tidak Sesuai!',
			})
		</script>
	<?php }
?>
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Masuk</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Daftar</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<form method="POST" action="ceklogin.php">
				<div class="group">
					<label class="label">Username</label>
					<input type="text" class="input" name="username">
				</div>
				<div class="group">
					<label class="label">Password</label>
					<input type="password" class="input" name="password">
				</div>
				<div class="group">
					<input type="submit" name="go" style="color:#342e26;font-weight:bolder; cursor: pointer;" class="button" value="Masuk"><br>
					<input type="button" style="background-color:#ffffff;color: #0a9ffc;font-weight:bolder; cursor: pointer;" class="button" value="Kembali" onclick="window.location='./'">
				</div>
				<div class="hr"></div>
				</form>
			</div>
			<div class="sign-up-htm">
				<form method="POST" action="daftar.php" autocomplete="off">
				<div class="group">
					<label class="label">Nama Lengkap</label>
					<input type="text" class="input" name="nama">
				</div>
				<div class="group">
					<label class="label">Username dan Password</label>
					<div class="input-group input-group-mb" style="margin-bottom: 10px">
					<div class="input-group-prepend" style="width: 50%; float: left;">
					    <input type="text" class="input" name="username" placeholder="username">
					</div>
					<input type="password" class="input" name="password" style="width: 50%">
				</div>
				<div class="group">
					<label class="label">Jenis Kelamin</label>
					<input type="radio" name="jk" value="0" checked> Laki-Laki
					<input type="radio" name="jk" value="1"> Perempuan<br>
				</div>
				<div class="group">
					<label class="label">Alamat</label>
					<input type="text" class="input" name="alamat">
				</div>
				<div class="group">
					<label class="label">Telp</label>
					<input type="text" class="input" name="telp">
				</div>
				<div class="group">
					<label class="label">Email</label>
					<input type="email" class="input" name="email">
				</div>
				<div class="group">
					<input type="submit" name="daftar" style="color:#342e26;font-weight:bolder; cursor: pointer;" class="button" value="Daftar Sekarang!">
				</div>
				<div class="hr"></div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>

