<!DOCTYPE html>
<!--
The source code for this website is available on GitHub:
https://github.com/nils-soderman/www.nilssoderman.com
-->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dodge Golf - Nils Söderman</title>
  <meta name="description" content="Dodge Golf is a local party game with up to 4 players. The goal of the game is to obtain the balloon by successfully hitting it with a ball.">
  <meta name="keywords" content="nils söderman, future games, dodge golf, party game, multiplayer game">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://nilssoderman.com/resources/images/icons/dodge-golf.ico" rel="shortcut icon" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="./../../resources/css/main.min.css">
  <link rel="stylesheet" type="text/css" href="./../../resources/css/video_wrapper.css">

  <style>

    /* Page Content */
    @font-face {
      font-family: 'Open Sans';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v17/mem8YaGs126MiZpBA-UFVZ0b.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
      font-family: 'Bangers';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: local('Bangers Regular'), local('Bangers-Regular'), url(https://fonts.gstatic.com/s/bangers/v12/FeVQS0BTqb0h60ACH55Q2A.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    #Content {
      margin-top: 20px;
    }

    #project-description{
      margin-top: 35px;
      font-size: 18px;
    }

    #title {
      margin-top: 50px;
      margin-bottom: 20px;
      text-align: center;
      font-size: 20px;
      font-family: 'Bangers';
    }

    #description{
      font-family: 'Open Sans', sans-serif;
      max-width: 1280px;
      margin: 0 auto;
      margin-bottom: 100px;
    }

    #menu-item-projects {
        text-decoration:underline;
    }

  </style>

</head>

<body>

    <?php include('./../../resources/includes/header.html'); ?>

    <div id="Content">

      <div id="title">
        <h1>Dodge Golf</h1>
      </div>

      <div class="videoWrapper">
        <iframe width="1280" height="720" src="https://www.youtube.com/embed/a7KPQ8YzI6U?rel=0&amp;showinfo=0" allowfullscreen></iframe>
      </div>

      <div id="description">
        <div id="project-description">
          <p>
            Dodge Golf is a local party game with up to 4 players. The goal of the game is to obtain the balloon by successfully hitting it with a ball.<br>
            Once you got the balloon your score will slowly tick up, and at the same time you need to dodge all of the balls coming your way.<br>
            <br>
            This is a student project made on FutureGames over the course of two weeks. We were a team of 9 people and our criteria was to create a party game for 2-4 players, combining two different sports.<br>
          </p>
        </div>
        </div>
    </div>

  <?php include('./../../resources/includes/footer.html'); ?>

</body>
</html>