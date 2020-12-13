<?php
include('database.php');
$db=$conn;// database connection  
//legal input values
 $nama         = legal_input($_POST['nama']);
 $email        = legal_input($_POST['email']);
 $nomor        = legal_input($_POST['nomor']);
 $alamat       = legal_input(md5($_POST['alamat']));
   
if(!empty($nama) && !empty($email) && !empty($nomor) && !empty($alamat)){
    //  Sql Query to insert user data into database table
    Insert_data($nama,$email,$nomor,$alamat);
}else{
 echo "data dibutuhkan";
}
 
// convert illegal input value to ligal value formate
function legal_input($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}
// // function to insert user data into database table
 function insert_data($nama,$email, $nomor, $alamat){
 
     global $db;
      $query="INSERT INTO ajax_user(nama,email,nomor,alamat) VALUES('$nama','$email','$nomor','$alamat')";
     $execute=mysqli_query($db,$query);
     if($execute==true)
     {
       echo "data berhasil dimasukkan";
     }
     else{
      echo  "Error: " . $sql . "<br>" . mysqli_error($db);
     }
 }
?>