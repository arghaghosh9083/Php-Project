<?php
include("connect.php");
$name = $_POST["name"];
$number = $_POST['number'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$address = $_POST['address'];
$image = $_FILES['photo']['name'];
$tempimage = $_POST['photo']['temp_name'];
$role = $_POST['role'];
if ($password == $cpassword) {

    move_uploaded_file($tempimage, "../upload/$image");
    $insert = mysqli_query($connect, "INSERT INTO user(Name,Number,Password,Address,photo,Role,Status,Votes)Values('$name','$number','$password','$address','$image','$role',0,0)");
} else {
    echo '<script>
   alert("Password and Confirm Password didnot match");
   window.location="../route/Registration.html";
    </script>';
}
if ($insert) {
    echo '<script>
   alert("Registration Successful");
    window.location = "../";
</script>';
} else {
    echo ' <script>
   alert (" some error occur");
   window.location="../route/Registration.html";
    </script>';
}



?>