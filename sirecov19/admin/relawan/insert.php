<?php
// include database connection file
require_once'function.php';
// Object creation
$insertdata=new DB_con();
if(isset($_POST['insert']))
{
// Posted Values
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$emailid=$_POST['emailid'];
$contactno=$_POST['contactno'];
$address=$_POST['address'];
$photo=$_POST['photo'];
//Function Calling
$sql=$insertdata->insert($fname,$lname,$emailid,$contactno,$address,$photo);
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record Telah Dimasukkan');</script>";
echo "<script>window.location.href='index.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Ada yang salah. Tolong Diulangi Kembali');</script>";
echo "<script>window.location.href='index.php'</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sistem Relawan Covid-19</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="row">
<div class="col-md-12">
<h3>Masukkan Record | Sistem Relawan Covid-19</h3>
<hr />
</div>
</div>


<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>NamaDepan</b>
<input type="text" name="firstname" class="form-control" required>
</div>
<div class="col-md-4"><b>Nama Belakang</b>
<input type="text" name="lastname" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-md-4"><b>Email id</b>
<input type="email" name="emailid" class="form-control" required>
</div>
<div class="col-md-4"><b>Nomor HP</b>
<input type="text" name="contactno" class="form-control" maxlength="10" required>
</div>
</div>  



<div class="row">
<div class="col-md-8"><b>Alamat</b>
<textarea class="form-control" name="address" required></textarea>
</div>
</div>

<div class="row" style="margin-top:1%">
<div class="col-md-8"><b>Foto</b>
<input type="file" name="photo" id="photo">
</div>
</div> 

<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="insert" value="Submit">
</div>
</div> 
     
         

</form>           
</div>
</div>
</body>
</html>