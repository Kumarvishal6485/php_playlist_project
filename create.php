<?php 
    include 'db.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $playlist_name = $_POST['playlist_name'];
    $sql = "insert into playlist(email,password,playlist_name) values('$email','$password','$playlist_name')";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Location:playlists.php");
    }
?>