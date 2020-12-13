$(document).on('submit','#index',function(e){
    e.preventDefault();
   
    $.ajax({
    method:"POST",
    url: "connection.php",
    data:$(this).serialize(),
    success: function(data){
    $('#msg').html(data);
    $('#userForm').find('input').val('')
}});
});