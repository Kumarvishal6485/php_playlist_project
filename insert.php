<?php
    include 'db.php';
    $playlist_no = $_POST['playlist_no'];
    $id = $_POST['id'];
    $song = $_POST['song'];
    $music = $_POST['music'];
    $image = $_POST['image'];
    $sql = "insert into songs(id,playlist_no,song,music,image)values('$id','$playlist_no','$song','$music','$image')";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Location:playlists.php");
    }
?>