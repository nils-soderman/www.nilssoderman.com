<!DOCTYPE html>
<!--
The source code for this website is available on GitHub:
https://github.com/nils-soderman/www.nilssoderman.com
-->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nils Söderman - 404 Not Found</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://nilssoderman.com/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="https://nilssoderman.com/resources/css/main.min.css">

  <style>
    /* Page Content */
    @font-face {
      font-family: 'Press Start 2P';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: local('Press Start 2P Regular'), local('PressStart2P-Regular'), url(https://fonts.gstatic.com/s/pressstart2p/v8/e3t4euO8T-267oIAQAu6jDQyK3nVivM.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    #error-message {
        text-align: center;
        font-family: 'Press Start 2P', cursive;
        line-height: 150%;
        margin: 200px 0 150px 0;
    }
    h1{
        font-size:100px;
    }
  </style>

</head>

<body>

    <?php include('./../resources/includes/header.html'); ?>

    <div id="error-message">
        <h1>404</h1>
        <p>The page you were looking for could not be found.</p>
    </div>

    <?php include('./../resources/includes/footer.html'); ?>

</body>
</html>