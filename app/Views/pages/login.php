<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<title>Login</title>
<style>
    .container-fluid {
	width: 40%;
    }
    @media screen and (max-width: 768px) {
        .container-fluid {
            width: 100%;
        }
    }
    .jarak-header {
	margin-top: 80px;
    }
</style>
</head>
<body>

<!--FORM-->
<div class="container-fluid jarak-header">
    <h2 style="color:grey; text-align:center;">Form Login</h2><br>
    <form action="/login/auth" method="post">
	<div class="form-group">
	    <label>Email</label>
    <input type="text" class="form-control" name="email" id="InputForEmail" placeholder="Masukan Email">
	</div>
    <div class="form-group">
	    <label>Password</label>             
    <div class="input-group" id="show_hide_password"><input class="form-control" type="password" name="password" id="InputForPassword" placeholder="Masukan Password">
    <div class="input-group-addon">
        <a style="color:#333;" href="#"><i class="glyphicon glyphicon-eye-close" aria-hidden="true"></i></a>
    </div>
    </input>
    </div>
	</div>
	<div class="form-group">
	    <input type="submit" class="btn btn-success" value="Masuk">
	    <input type="reset" class="btn btn-danger" value="Batal">
	</div>
	</form>
</div>


<div class="container-fluid text-center">
<p>Belum Punya Akun ?
    <button type="button" onclick="window.location.href='/register'" class="btn btn-danger">Daftar disini <i class="glyphicon glyphicon-user"></i></button>
</p>
</div>

<!--JavaScript Show & Hide Function -->
<script>
$(document).ready(function() {
$("#show_hide_password a").on('click', function(event) {
    event.preventDefault();
    if ($('#show_hide_password input').attr("type") == "text") {
        $('#show_hide_password input').attr('type', 'password');
	$('#show_hide_password i').addClass("glyphicon glyphicon-eye-close");
    } 
    else if ($('#show_hide_password input').attr("type") == "password")        {
        $('#show_hide_password input').attr('type', 'text');
        $('#show_hide_password i').removeClass("glyphicon glyphicon-eye-close");
        $('#show_hide_password i').addClass("glyphicon glyphicon-eye-open");
    }
});
$("#show_hide_passwordConf a").on('click', function(event) {
    event.preventDefault();
    if ($('#show_hide_passwordConf input').attr("type") == "text") {
        $('#show_hide_passwordConf input').attr('type', 'password');
	$('#show_hide_passwordConf i').addClass("glyphicon glyphicon-eye-close");
    } 
    else if ($('#show_hide_passwordConf input').attr("type") == "password")        {
        $('#show_hide_passwordConf input').attr('type', 'text');
        $('#show_hide_passwordConf i').removeClass("glyphicon glyphicon-eye-close");
        $('#show_hide_passwordConf i').addClass("glyphicon glyphicon-eye-open");
    }
});
});
</script>
</body>
</html>