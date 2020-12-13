<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/upload.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <div class="container" style="margin: 0 auto;">
    <form action="controller/pushfile.php" method="POST" enctype="multipart/form-data">
        <div class="title">Drop file to upload</div>
            <input type="file" class="input" name="file">
            <input style="display: inline-block;" type="submit" name="submit">
    </form>
  </div>
