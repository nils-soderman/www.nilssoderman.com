<!DOCTYPE html>
<!--
The source code for this website is available on GitHub:
https://github.com/nils-soderman/www.nilssoderman.com
-->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nils Söderman - 403 Forbidden</title>
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
        font-size:80px;
    }

  </style>

</head>

<body>

    <?php include('./../resources/includes/header.html'); ?>

    <br/><br/>
    <div id="error-message">
        <h1 id="error-code">403</h1>
        <p id="message">Forbidden, You do not have permission to access the requested url on this server.</p>
    </div>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

    <?php include('./../resources/includes/footer.html'); ?>

</body>

</html>