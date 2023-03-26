<?php 
    include 'db.php';
    $id = $_GET['id'];
    $sql = "Select * from songs where id = '$id'";
    $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        audio{
            display : block;
            width : 100vw;
        }
        img{
            display : block;
            height : 92vh;
            width : 100vw;
        }
    </style>
</head>
<body>
    <?php while($fetch = mysqli_fetch_assoc($result)) {?>
        <img src="<?php echo $fetch['image'];?>">
    <audio controls="controls" >
        <source src ="<?php echo $fetch['music'];?>" type="audio/mpeg"></source>
    </audio>
    
    <?php } ?>
</body>
</html>