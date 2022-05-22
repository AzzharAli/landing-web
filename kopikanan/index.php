<!DOCTYPE html>
<html>
    <head>
        <title>Oyen Musik Playlist</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="x-icon" href="favicon.ico" />
        <style>
            body {
                background: #222;
                color: #3A3B3C;
                font-family: arial; 
                background-image: url("eula_bg.jpg"); 
                background-repeat: no-repeat;
                background-attachment:fixed;
                height:100%;
                background-position: center;
                background-size: cover;
            }
            #sedang-main {
                padding: 10px;
                font-size: 24px;
                font-weight: bold;
                color: #000;
                margin-bottom: -5px;
                background: #fff
            }
            #audio-player {width:100%;border-radius: 0;
                           background: #fff  ;}
            #playlist {list-style: none;margin: 0;padding: 0; }
            #playlist li {padding: 0px;border-bottom: 1px solid #3A3B3C;}
            #playlist li a {padding: 10px; text-decoration: none;color: #fff;display:block;}
            #playlist li a:hover {background: #555;color: #fff;}
            #cariLagu {width: 100%;
                       background: transparent  ;
                       border: 0;
                       border-bottom: 1px solid #555;
                       padding: 10px;
                       color: #fff;}
            #container-player {
                position: fixed;
                width: 100%;
                bottom: 0px;
                left: 0;
                margin: 0;
            }
            .duration{float:right;margin-top: 10px;color: #3A3B3C;margin-right:10px;}
            #visualizer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                height: 100%;
                z-index: -1;
                opacity: .6    ;
            }

        </style>
    </head>
    <body>
        <canvas id="visualizer"></canvas>
        <div id="container-player">
            <input type="checkbox" id="inputRandom" title="acak" style="position:fixed;top:0;right:0;" />   
            <marquee behavior="alternate" id="sedang-main">Oyen Musik Takedown Project</marquee>
            <audio controls id="audio-player" style="clear:both; color:3A3B3C;">
                <source id="audio-source">
                Browser anda tidak mendukung, Jadul amat woe
            </audio>
            <div style="color:#000; background-color:#fff;">
            <a >| Original MP3 Player by aviantorichad edited by ahang |</a>
            </div>

        </div>

     

        <?php
        // ref: http://www.zedwood.com/article/php-calculate-duration-of-mp3
        //require_once "mp3file.class.php";

        
        session_start();
 
        if (!isset($_SESSION['username'])) {
            header("Location: /login.php");
        }

        $dir = "playlists/";
        if (is_dir($dir)) {
            if ($buka = opendir($dir)) {
                echo '<ul id="playlist">';
                while (($file = readdir($buka)) !== false) {
                    //$mp3file = new MP3File('./'.$dir.$file);
                    //$duration = $mp3file->getDuration(); //(slower) for VBR (or CBR)
                    if (strpos($file, '.mp3')) {
                        //echo '<li><small class="duration">' . MP3File::formatTime($duration) . '</small><a href="javascript:void(0)">' . $file . '</a></li>';
                        echo '<li><a href="javascript:void(0)">' . $file . '</a></li>';
                    }
                }
                echo '</ul>';
                closedir($buka);
            }
        }
        ?>


        <script src="jquery-3.3.1.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#playlist').css('margin-bottom', eval($('#container-player').height() - 15) + "px");
                $('#visualizer').css('bottom', eval($('#container-player').height() - 15) + "px");

                var folder = "<?= $dir ?>";
                var urutan = 0;
                var max = $('#playlist a').length;
                var file, mainkan = "";

                $('#playlist a').on('click', function () {
                    urutan = $(this).parent().prevAll().length;
                    playAudio(urutan);
                });

                $('#audio-player').on('ended', function () {
                    var isRandom = $('#inputRandom').prop('checked');
                    if (isRandom) {
                        urutan = getRandomInt(0, max);
                    } else {
                        urutan++;
                        if (urutan == $('#playlist a').length) {
                            urutan = 0;
                        }
                    }
                    playAudio(urutan);
                });

                function makeVisualizer() {
                    var audio = document.getElementById("audio-player");
//                var audio = document.createElement(audio);
                    //ref: https://codepen.io/nfj525/pen/rVBaab
                    var context = new AudioContext();
                    var src = context.createMediaElementSource(audio);
                    var analyser = context.createAnalyser();

                    var canvas = document.getElementById("visualizer");
                    canvas.width = window.innerWidth;
                    canvas.height = window.innerHeight;
                    var ctx = canvas.getContext("2d");

                    src.connect(analyser);
                    analyser.connect(context.destination);

                    analyser.fftSize = 256;

                    var bufferLength = analyser.frequencyBinCount;
                    console.log(bufferLength);

                    var dataArray = new Uint8Array(bufferLength);

                    var WIDTH = canvas.width;
                    var HEIGHT = canvas.height;

                    var barWidth = (WIDTH / bufferLength) * 2.5;
                    var barHeight;
                    var x = 0;

                    function renderFrame() {
                        requestAnimationFrame(renderFrame);

                        x = 0;

                        analyser.getByteFrequencyData(dataArray);

                        ctx.fillStyle = "#000";
                        ctx.fillRect(0, 0, WIDTH, HEIGHT);

                        for (var i = 0; i < bufferLength; i++) {
                            barHeight = dataArray[i];

                            var r = barHeight + (25 * (i / bufferLength));
                            var g = 250 * (i / bufferLength);
                            var b = 50;

                            ctx.fillStyle = "rgb(" + r + "," + g + "," + b + ")";
                            ctx.fillRect(x, HEIGHT - barHeight, barWidth, barHeight);

                            x += barWidth + 1;
                        }
                    }
                    renderFrame();
                }

                $("#cariLagu").on("keyup", function () {
                    var value = $(this).val().toLowerCase();
                    $("#playlist li").filter(function () {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });


                function getRandomInt(min, max) {
                    min = Math.ceil(min);
                    max = Math.floor(max);
                    return Math.floor(Math.random() * (max - min + 1)) + min;
                }

                function playAudio(urutan) {
                    tandaiTerpilih(urutan);
                    file = $('#playlist a:eq(' + urutan + ')').text();
                    mainkan = folder + file;
                    $('#sedang-main').html(file);
                    $('#audio-source').prop('src', mainkan);
                    $('#audio-player').trigger('load');
                    $('#audio-player').trigger('play');

                    makeVisualizer();
                }

                function tandaiTerpilih(urutan) {
                    $('#playlist li').css('background-color', 'transparent');
                    $('#playlist li').filter(function (index) {
                        return index === urutan;
                    }).css('background-color', '#037' );
                }

            });
        </script>
    </body>
</html>
