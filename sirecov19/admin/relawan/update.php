<?php
// include function file
include_once("function.php");
//Object
$updatedata=new DB_con();
if(isset($_POST['update']))
{
// Get the userid
$userid=intval($_GET['id']);
// Posted Values
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$emailid=$_POST['emailid'];
$contactno=$_POST['contactno'];
$address=$_POST['address'];
$photo=$_POST['photo'];
//Function Calling
$sql=$updatedata->update($fname,$lname,$emailid,$contactno,$address,$userid,$photo);
// Mesage after updation
echo "<script>alert('Record Telah Diperbaharui');</script>";
// Code for redirection
echo "<script>window.location.href='index.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sistem Relawan Covid-19 </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="row">
<div class="col-md-12">
<h3>Update Record | Sistem Relawan Covid-19</h3>
<hr />
</div>
</div>

<?php
// Get the userid
$userid=intval($_GET['id']);
$onerecord=new DB_con();
$sql=$onerecord->fetchonerecord($userid);
$cnt=1;
while($row=mysqli_fetch_array($sql))
  {
  ?>
<form name="insertrecord" method="post">
  <div class="row">
    <div class="col-md-4"><b>Nama Depan</b>
      <input type="text" name="firstname" value="<?php echo htmlentities($row['FirstName']);?>" class="form-control" required>
</div>
  <div class="col-md-4"><b>Nama Belakang</b>
    <input type="text" name="lastname" value="<?php echo htmlentities($row['LastName']);?>" class="form-control" required>
  </div>
</div>
  <div class="row">
    <div class="col-md-4"><b>Email id</b>
      <input type="email" name="emailid" value="<?php echo htmlentities($row['EmailId']);?>" class="form-control" required>
</div>
  <div class="col-md-4"><b>Nomor HP</b>
    <input type="text" name="contactno" value="<?php echo htmlentities($row['ContactNumber']);?>" class="form-control" maxlength="10" required>
  </div>
</div>
  <div class="row">
    <div class="col-md-8"><b>Alamat</b>
    <textarea class="form-control" name="address" required><?php echo htmlentities($row['Address']);?></textarea>
  </div>
    <div class="col-md-8"><b>Foto</b>
      <input type="file" name="photo" value="<?php echo htmlentities($row['photo']);?>" class="form-control" required>
  </div>
</div>
<?php } ?>
<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="update" value="Update">
</div>
</div>
     </form>
            
      
	</div>
</div>

</body>
</htm