<?php 
    include 'db.php';
    $id = $_GET['id'];
    $sql = "Select * from playlist where id = '$id'";
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
<form action = "insert.php" method="POST">
  <?php while($fetch = mysqli_fetch_assoc($result))
  {
    ?>
    
    <input type="hidden" name = "id" value= "<?php echo $fetch['id'];?>">
    <div class="form-group">
    <label for="exampleInputEmail1">Playlist_no</label>
    <input type="number" name ="playlist_no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Playlist Number">
    </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Song Name</label>
    <input type="text" name ="song" class="form-control" id="exampleInputPassword1" placeholder="Song Name">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Music</label>
    <input type="file" name ="music" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input type="file" name ="image" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <?php } ?>
</form>
</body>
</html>