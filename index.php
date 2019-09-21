<!DOCTYPE html>
<!--
The source code for this website is avaliable on GitHub:
https://github.com/nils-soderman/www.nilssoderman.com
-->
<html lang="en">
<head>

  <meta charset="UTF-8">
  <title>Nils Söderman - Animation Reel</title>
  <meta name="description" content="Nils Söderman's animation reel.">
  <meta name="keywords" content="nils söderman, nils soderman, animator, animation reel, motion capture, future games">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta name="og:title" content="Nils Söderman - Animation Reel"></meta>
  <meta name="og:description" content="Nils Söderman's animation reel"></meta>
  <meta name="twitter:site" content="@nilssoderman"></meta>
  <meta name="og:image" content="https://nilssoderman.com/resources/videos/reel/nils-soderman-animation-reel-2018-thumbnail.jpg"></meta>
  <meta name="twitter:player" content="https://nilssoderman.com/resources/videos/reel/nils-soderman-animation-reel-2018.mp4"></meta>
  <meta name="twitter:card" content="player"></meta>
  <meta name="twitter:player:width" content="1280"></meta>
  <meta name="twitter:player:height" content="720"></meta>

  <link href="./favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./resources/css/main.min.css">


  <style>

    .videoWrapper {
    	position: relative;
    	padding-bottom: 56.25%; /* 16:9 */
      max-width: 1280px;
      margin: 0 auto;
    }

    .videoWrapper iframe {
      z-index: 3;
    	position: absolute;
    	top: 0;
    	left: 0;
      margin: 0 auto;
    	width: 100%;
    	height: 100%;
      max-height: 720px;
      max-width: 1280px;
      border-style: solid;
      border-width: 2px 2px 2px 2px;
      border-color: #000000;
      background-color: #000000;
      border-radius: 1px;
    }

    #Content {
      margin-top: 20px;
      max-height: 720px;
    }
    
    #menu-item-reel {
        text-decoration: underline;
    }

  </style>

</head>


<body>
    <?php include('./resources/includes/header.html'); ?>
    
    <div id="Content">
        <div class="videoWrapper">
            <iframe src="https://player.vimeo.com/video/275416541?title=0&byline=0&portrait=0" width="1280" height="720" webkitallowfullscreen="true" mozallowfullscreen="true" allow="fullscreen"></iframe>
        </div>
    </div>
    
    <?php include('./resources/includes/footer.html'); ?>

</body>

</html>
