<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-inverse">

      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">WebSiteName</a>
      </div>
      <ul class="nav navbar-nav">
        <li class=""><a href="?page=about.php">ABOUT</a></li>
        <li class=""><a href="?page=upload.php">UPLOAD</a></li>
      </ul>
    </nav>
  </div>
  <div class="container">
    <h1 class="text-centet">WELL COME MY WebSite</h1>
  <?php
    if(isset($_GET['page'])){
      include "page/".$_GET['page'];
    }
   

    ?>

  </div>
</body>
</html>