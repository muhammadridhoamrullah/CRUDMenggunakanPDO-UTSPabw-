<?php
 include('koneksi.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<style type="text/css">
		* {
  box-sizing: border-box;
}
body {
  margin: 0;
  font-family: sans-serif;
}
a {
  color: #666;
  font-size: 14px;
  display: block;
}
.logo {
  width: 190px;
  height: 60px;
  background: #DDD;
}
.login-title {
color:#F5FFFA;
  flex-basis: 100%;
}
#login-page {
  display: flex;
}
.login {
  width: 30%;
  height: 100vh;
  background: linear-gradient(110deg, #fdcd3b 60%, #ffed4b 60%);
  padding: 50px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  align-content: center;
  text-align: center;
}
.login a {
  margin-top: 25px;
}
.form-login label {
  text-align: center;
  font-size: 13px;
  margin-top: 5px;
  display: block;
  color: #F5FFFA;
}
.input-email,
.input-password {
  width: 100%;
  background: #FFF;
  border: 40;
  border-radius: 25px;
  margin: 4px 0 8px 0;
  padding: 10px;
  float: left;
  display: flex;
}
.icon {
  padding: 4px;
  color: #666;
  min-width: 30px;
  text-align: center;
}
input[type="text"],
input[type="password"] {
  width: 100%;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 14px 0;
  outline: none;
}
input[type="submit"] {
  width: 100%;
  border: 40;
  border-radius: 25px;
  padding: 14px;
  background: none;
  color: #F5FFFA;
  display: inline-block;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
  margin-top: 10px;
}

.background {
  width: 70%;
  padding: 220px;
  height: 100vh;
  background: linear-gradient(110deg, #fdcd3b 60%, #ffed4b 60%);
  background-size: cover;
  display: flex;
  flex-wrap: wrap;
  align-items: flex-end;
  justify-content: flex-end;
  align-content: center;
  flex-direction: row;
}
.background h1 {
  max-width:600px;
  color: #FFF;
  font-size: 60px;
  text-align: left;
  padding: 0;
  margin: 10px;
}
.background p {
  max-width: 650px;
  color: #FFF;
  font-size: 23px;
  text-align: right;
  padding: 20px;
  margin: 15px 0 0 0;
}
.madeby {
  position: absolute;
  bottom: 30px;
  right: 40px;
}
.madeby p {
  font-weight: bold;
  color: #9EBD13;
}
.madeby a {
  color: #222;
  text-decoration: none;
}
	</style>
</head>
<body>
<div id="login-page">
  <div class="login">
    <h2 class="login-title">SILAHKAN LOGIN</h2>
    <?php
      if (isset($message)) {
        echo "Nama Pengguna & Kata Sandi Salah";
      }
    ?>
    <form class="form-login"  method="POST">
      <label for="email">Nama Pengguna</label>
      <div class="input-email">
        <i class="fas fa-envelope icon"></i>
        <input type="text" name="Username" placeholder="Masukkan Nama Pengguna">
      </div>
      <label for="password">Kata Sandi</label>
      <div class="input-password">
        <i class="fas fa-lock icon"></i>
        <input type="password" name="Password" placeholder="Masukkan Kata Sandi">
      </div>
      <input type="submit" value="Masuk" name="login">
    </form>
      <p>untuk login silahkan ketik</p>
      <p>Nama Pengguna & Kata Sandi : admin</p>
      
  </div>
  <div class="background">
    <h1>Masjid Al-Ikhlas</h1>
    <p>Gersang bumi dikala tanpa hujan, pula gersang di hati tanpa adanya iman</p></br>
<p>Gersang akal dikla tanpa ilmu, pula gersang di jiwa tanpa adanya amal</p></br>
<p>Selamat menyambut ibadah puasa, Marhaban ya Ramadhan</p>
  </div>
</div>
</body>
</html>