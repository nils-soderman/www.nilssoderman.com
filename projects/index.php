<!DOCTYPE html>
<!--
The source code for this website is available on GitHub:
https://github.com/nils-soderman/www.nilssoderman.com
-->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nils Söderman - Projects</title>
  <meta name="description" content="Here are some the games and other projects I've worked on recently. Altiia and the Trial Islands, Voice of the Monolith, Dodge Golf and more.">
  <meta name="keywords" content="game project, future games, future games stockholm, student games">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="./../favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="./../resources/css/main.min.css">
  
  <style>

    /* Page Content */

    #Content {
      margin-top: 50px;
      min-height: 500px;
    }

    .poster {
        margin-left: 3%;
        margin-right: 0%;
        margin-top: 20px;
        margin-bottom: 50px;
        height: 5000px;
    }

    .poster img{
      margin-top: 50px;
      border-radius: 2px;
      -webkit-transition: opacity .35s;
      transition: opacity .35s;
    }

    .poster img:hover{
      opacity: 0.8;
    }

    .poster img:active{
      opacity: 0.6;
    }

    #posters-content {
      max-width: 1280px;
      margin: 0 auto;
    }

    @media (max-width: 1322px) {
      .poster {
        margin-left: 7.5%;
      }
    }

    @media (max-width: 1127px) {
      .poster {
        margin-left: 14%;
      }
    }

    @media (max-width: 811px) {
      .poster {
        margin-left: 30%;
      }
    }

    @media (max-width: 580px) {
      .poster {
        margin-left: 18%;
      }
    }

    #menu-item-projects {
        text-decoration: underline;
    }

  </style>
</head>

<body>

    <?php include('./../resources/includes/header.html'); ?>
    
    <div id="Content">
      <div id="posters-content">

          <a class="poster" href=""><img src="./../resources/images/poster/poster-it-takes-two.jpg" width=256 height=362 alt="It Takes Two - Hazelight"></a>

          <a class="poster" href="./altiia-and-the-trial-islands/"><img src="./../resources/images/poster/Poster_Altiia-and-the-Trial-Islands.jpg" width=256 height=362 alt="Altiia and the Trial Islands"></a>

          <a class="poster" href="./voice-of-the-monolith/"><img src="./../resources/images/poster/Poster_Voice-of-the-Monolith.jpg" width=256 height=362 alt="Voice of the Monolith"></a>

          <a class="poster" href="./dodge-golf/"><img src="./../resources/images/poster/Poster_Dodge-Golf.jpg" width=256 height=362 alt="Dodge Golf"></a>
      </div>
    </div>

    <?php include('./../resources/includes/footer.html'); ?>

</body>

</html>

