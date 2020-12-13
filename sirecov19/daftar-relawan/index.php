<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="user-detail">
    <h2>Masukkan Data Diri</h2>
    <h5>Kami Akan Segera Menghubungi Anda Untuk Proses Registrasi Selanjutnya</h5>
    <p id="msg"></p>
    <form id="userForm" method="POST">
          <label>Nama Lengkap</label>
          <input type="text" placeholder="Masukkan Nama Lengkap" name="nama" required>
          <label>Email</label>
          <input type="email" placeholder="Masukkan Email" name="email" required>
          <label>Nomor HP</label>
          <input type="text" placeholder="Masukkan Nomor" name="no" required>
          <label>Alamat</label>
          <input type="text" placeholder="Alamat Anda" name="address" required>
          <button type="submit">Submit</button>
    </form>
        </div>
</div>
<!--====form section start====-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax-script.js"></script>
</body>
</html>

<style>
* {
  box-sizing: border-box;}
.user-detail {
    height: 100vh;
    border: 2px solid #f1f1f1;
    padding: 16px;
    background-color: white;
    width: 30%;}
input{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;}
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;}
button[type=submit] {
    background-color: #434140;
    color: #ffffff;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    font-size: 20px;}
label{
  font-size: 18px;;}
button[type=submit]:hover {
  background-color:#3d3c3c;}
  #msg{
    color: green;
    font-size: 16px;
  }
</style>