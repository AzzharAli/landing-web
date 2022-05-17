<?php
include_once "api.php";

var_dump($mainChannelLastVideoTitle);
echo('<br>');
var_dump($mainChannelLastVideoUploadDate);
echo('<br>');
var_dump($mainUploadDateOnly);
echo('<br>');
var_dump($splitAllDate);
echo('<br>');
var_dump($bulanUpload . "  or  " . $bulanUploadFix);
?>

<!doctype html>
<html lang="en">
  <head>
      <link rel="stylesheet" href="css/eulawangi.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  
  <!-- Test Section -->

  <section class="youtube-recent">
    <div class="container">
        <div class="row">
            <div class="col text-center mb-2">
                <h2> Last Content </h2>
            </div>
        </div>
        <div class="row">
        <div class="col">
        <div class="card mx-auto card-video-youtube">
        <iframe class="card-img-top" width="720" height="720" src="https://www.youtube.com/embed/<?php echo $mainChannelLastVideoId ?>" title="YouTube video player" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div class="card-body">
    <h5 class="card-title"><?php echo $mainChannelLastVideoTitle ?></h5>
  <p class="card-text"><?php echo $mainChannelLastVideoDescription ?></p>

  <div class="text-muted">
    Diupload Pada <?php echo $tanggalUploadEmbed ?>
  </div>
  </div>
</div>
        </div>
        </div>
    </div>
  </section>

  <!-- End Test Section -->



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>