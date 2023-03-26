<?php 
    include 'db.php';
    $id = $_GET['id'];
    $sql = "Delete from playlist where id = '$id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Location:playlists.php");
    }
?>