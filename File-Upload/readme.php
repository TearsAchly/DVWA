<?php
    echo '
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>./hacked by xlcfr./</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            position: relative;
            height: 100vh;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            overflow: hidden;
        }
        
        .container {
            position: relative;
            height: 100vh;
        }
        
        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            padding: 30px;
            border-radius: 10px;
            display: inline-block;
            width: 400px;
            max-width: 600px;
        }
        
        .content h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        
        .content p {
            font-size: 20px;
            margin-bottom: 30px;
        }
        
        .notranslate {
            will-change: contents;
        }
        
        @media screen and (min-width: 768px) {
            .container {
                position: relative;
                height: 100vh;
            }
            
            .content {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
                color: white;
                padding: 30px;
                border-radius: 10px;
                display: inline-block;
                width: 900px;
                max-width: 1200px;
            }
            
            .content h1 {
                font-size: 60px;
                margin-bottom: 40px;
            }
            
            .content p {
                font-size: 40px;
                margin-bottom: 60px;
            }
        }
        
        @media screen and (max-width: 767px) {
            .content {
                width: 90%;
                color: white;
            }
            
            .content h1 {
                font-size: 30px;
                margin-bottom: 15px;
            }
            
            .content p {
                font-size: 18px;
                margin-bottom: 25px;
            }
        }
        
        #background-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }
        
        #background-video video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .audio-container {
            text-align: center;
            margin-top: 20px;
        }
        
        .audio-control {
    display: inline-block;
    background-color: transparent;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
}

    </style>
</head>

<body>
    <div id="background-video">
        <video autoplay loop muted id="bg-video">
            <source src="https://drive.google.com/uc?export=download&id=11QHOvU4T2wLst3MkUzGcT7lLBi51vOya" type="video/mp4">
        </video>
    </div>
    <div class="container">
        <div class="content">
            <h1 class="notranslate">./hacked by xlcfr./</h1>
            <p class="notranslate">I choose solitude for tranquility, my loneliness is not about being alone, but my loneliness is about a heart that I let die</p>
            <div class="audio-container">
                <p class="audio-text">Wanna hear this song?</p>
                <audio id="audio-player" controls>
                    <source src="https://drive.google.com/uc?export=download&id=123AmCftkpklZ51dnQfE87_KsF1XHuGiF" type="audio/mpeg">
                </audio>
            </div>
        </div>
    </div>
</body>
</html>
    ';
?>
