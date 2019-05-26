<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <title>Nils Söderman - Animation Reel</title>
  <link href="./favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./resources/css/main.css">
  <meta name="description" content="Nils Söderman's animation reel.">
  <meta name="keywords" content="nils söderman, nils soderman, animator, animation reel, motion capture, future games">
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
