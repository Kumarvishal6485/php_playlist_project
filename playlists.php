<?php
    include 'db.php';
    $sql = "Select * from playlist";
    $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <table class="table table-dark">
        <tr>
            <th>Playlist Name</th>
            <th>Action</th>
        </tr>
        <?php
        while($fetch = mysqli_fetch_assoc($result))
        {?>
            <tr>
                <td><?php echo $fetch['playlist_name']?></td>
                <td><a href="add.php?id=<?php echo $fetch['id']?>" class="btn btn-primary">Add</a><a href="delete.php?id=<?php echo $fetch['id']?>" class="btn btn-danger">Remove</a><a href="play.php?id=<?php echo $fetch['id']?>" class="btn btn-success">Play All</a></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>