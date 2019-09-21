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
  <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://nilssoderman.com/resources/css/main.min.css">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

  <style>
    /* Page Content */

    #Content {
      margin-top: 100px;
      height: 325px;
      max-height: 720px;
    }

    #error-message {
        text-align: center;
        font-family: 'Press Start 2P', cursive;

    }

    #error-code {
        font-size:100px;
    }

  </style>

</head>

<body>

    <?php include('./../resources/includes/header.html'); ?>

    <div id="error-message">
        <h1 id="error-code">404</h1>
        <p>The page you were looking for could not be found.</p>
    </div>

    <?php include('./../resources/includes/footer.html'); ?>

</body>
</html>