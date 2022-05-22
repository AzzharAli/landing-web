<?php
//session_start();
 
//if (!isset($_SESSION['username'])) {
//    header("Location: /login.php");
//}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- CSS DEWE WOI -->
    <link rel="stylesheet" href="css/eulawangi.css">

    <!-- Include API -->
    <?php include_once 'api.php'; ?>

    <title>AHANG</title>
  </head>
  <body>



  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
  <div class="container">
    <a class="navbar-brand" href="#">AHANG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <a class="nav-link" href="musik">Music Player</a>
        <a class="nav-link" href="kopikanan">Takedown Project</a>
        <a class="nav-link" href="redirdrive.php">Off Vocal Free</a>
        <a class="nav-link" href="abot.php">About</a>
      </div>

      <div class="navbar-nav ms-auto">
        <a class="nav-link active" href="https://www.youtube.com/c/OyenMusik"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
</svg></a>

        <a class="nav-link active" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
  <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z"/>
</svg></a>

        <a class="nav-link active" href="https://instagram.com/wflmt100"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg></a>

        <a class="nav-link active" href="#"><a href="https://trakteer.id/oyenmusik" target="_blank"><img id="wse-buttons-preview" src="https://cdn.trakteer.id/images/embed/trbtn-red-1.png" height="40" style="border:0px;height:40px;" alt="Trakteer Saya"></a></a>
      </div>
      
    </div>
  </div>
</nav>

<!-- EULA WANGI NO DEBAT -->

<!-- Jumbotron -->
<section class="jumbotron text-center mb-3" style="padding-top: 2rem; padding-bottom: 2rem; background-color: #bfbfbf;">
    <img class="rounded-circle" src="imeg/i.png" alt="Me" width="200">
  <h1 class="display-4">AHANG</h1>
  <p class="lead">Unlock Character on 50.000 Subscriber</p>
  
</section>

<!-- Akhir Jumbotron -->



<!-- Channel List -->

<section class="youtube-section">
    <div class="container">
        <div class="row">
            <div class="col text-center" >
                <h2>My Channel</h2>
            </div>
        </div>

        <div class="row text-center pt-3">
            <!-- main -->
            <div class="col-6">

            <div class="card mb-3 me-auto" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo $mainChannelProfilePicture ?>" class="img-fluid rounded-circle mt-3" alt="<?php echo $mainChannelName ?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $mainChannelName ?></h5>
        <p class="card-text"><?php echo $mainChannelSubscribe ?> Subscriber</p>
        <p class="card-text"><small class="text-muted"><a class="text-dark" href="https://www.youtube.com/channel/UCutjtQpRYr3utArPja0sFKQ">Visit <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
</svg></small></a></p>
      </div>
    </div>
  </div>
</div>




            </div>
            <!-- secondary -->
            <div class="col-6">

            
            <div class="card mb-3 ms-auto" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo $secondaryChannelProfilePicture ?>" class="img-fluid rounded-circle mt-3" alt="<?php echo $secondaryChannelName ?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $secondaryChannelName ?></h5>
        <p class="card-text"><?php echo $secondaryChannelSubscribe ?> Subscriber</p>
        <p class="card-text"><small class="text-muted"><a class="text-dark" href="https://www.youtube.com/channel/UCI9F_k7LDS8Z1ruzm25rALw">Visit <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
</svg></small></a></p>
      </div>
    </div>
  </div>
</div>



            </div>
        </div>
    </div>
</section>
<hr>
<!-- end channel section -->

<!-- Section Last Video -->


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


  <div class="text-muted">
    Diupload Pada <?php echo $tanggalUploadEmbed ?>
  </div>
  </div>
</div>
        </div>  
        </div>
    </div>
  </section>

<!-- End Last Video -->
<br><hr><br>
<!-- Section Penjelasan Fitur -->

<section>
  <div class="container text-center">
    <div class="row">
      <div class="col">
      <h2> Penjelasan Fitur </h2>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <!-- accor -->
        <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <h4>Musik Player</h4>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><br>
        <p> Musik Player adalah fitur untuk memutar lagu secara online dengan Playlist yaitu lagu yang ada di Channel Youtube Oyen Musik, untuk mengakses fitur ini anda diharuskan untuk membuat akun terlebih dahulu </p>
        <img src="imeg/ss_musikplayer.png " alt="Screenshot Musik Player" style="width:100%;"><br><br>
        <p> Fitur ini memungkinkan untuk pemutaran non stop selama internet lancar dan yang pasti anti iklan, file yang di load per lagu sekitar 10MB bisa lebih </p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <h4>Takedown Project</h4>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <a>Berisi Beberapa lagu yang ditakedown oleh pihak yang bersangkutan seperti ini</a><br><br><br>
        <img src="imeg/ss_kopikanan.png" alt="Email Copyright" style="max-width: 100%;"><br><br><br>
        <a>Jadi kalian para viewer tetap bisa mendengarkan hasil remix saya yang sudah kena Takedown, syaratnya harus bikin akun disini buat akses konten, kalo mau file MP3 bisa hubungi admin via Discord atau jika punya skill scraping bisa langsung ambil disini</a>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        <h4>Off Vocal Free</h4>
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <a> Berisi OFF Vocal atau bisa disebut karaoke dari musik yang diupload di Channel Oyen Musik, Akan tersedia di Google Drive </a>
      </div>
    </div>
  </div>
</div>
        <!-- end accor -->
      </div>
    </div>
  </div>
</section>

<br><hr><br><br>

<!-- Discord Section -->

<section>
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <h2>Discord Server</h2>
        </div>
      </div>
      <div class="row">
        <div class="col">
        <iframe class="discord-embed" src="https://discord.com/widget?id=736148090486259743&theme=dark" width="720" height="480" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
        </div>
      </div>
    </div>
  </section>

<!-- end Discord Section -->






<!-- Footer -->

<footer class="bg-dark text-white text-center mt-5 ">
    <p>Created by AHANG <a href="http://waifu.eula.my.id">Secret Web</a></p>
</footer> 




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html> 

