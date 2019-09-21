<!DOCTYPE html>
<!--
The source code for this website is available on GitHub:
https://github.com/nils-soderman/www.nilssoderman.com
-->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nils Söderman - About</title>
  <meta name="description" content="Nils Söderman is currently a junior animator at Hazelight.">
  <meta name="keywords" content="nils söderman, nils soderman, animator, animation reel, about, rymdnisse">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="./../favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./../resources/css/main.min.css">
  <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
  
  <style>

    #Content {
      margin-top: 100px;
      height: 500px;
      max-height: 720px;
    }

    #profile-picture {
      float: left;
    }

    #contact{
      max-width: 300px;
      font-family: 'Dosis', sans-serif;
      text-align: center;
      margin-top: 7px;
    }

    #bio{
      font-family: 'Merienda', cursive;
      font-size:16px;
      float:left;
      margin-left: 50px;
      max-width: 800px;
      width: 530px;
    }

    #about{
      margin: 0 auto;
      max-width: 900px;
    }

    #about_email {
      font-size: 26px;
    }

    #about_phone {
      font-size: 18px;
      margin-top: 5px;
    }

    #about_social-media{
      margin-top: 15px;
    }

    @media (max-width: 998px) {
      #bio {
        width: 400px;
      }
    }

    @media (max-width: 850px) {
      #bio {
        width: 250px;
      }
    }

    @media (max-width: 685px) {
      #bio {
        width: 90%;
        margin-left: 10px;
        text-align:center;
      }
      #profile-picture{
        width: fit-content;
        margin: 0 auto;
        float: none;
      }
      #Content {
        margin-top: 30px;
      }
    }

    #menu-item-about {
        text-decoration: underline;
    }

  </style>

</head>

<body>

    <?php include('./../resources/includes/header.html'); ?>

    <div id="Content">
        <div id = "about">
            <div id="profile-picture">
              <img src="./../resources/images/nils_soderman.png" width=300 alt="Nils Soderman">
              <div id="contact">
                <div id="about_email">contact@nilssoderman.com</div>
                <div id="about_phone"></div>
                <div id="about_social-media">
                  <a class="icon" href="https://www.linkedin.com/in/nilssoderman/" target="_blank" title="LinkedIn"><img src="./../resources/images/linkedin-icon.png" width=32 alt="LinkedIn: nilssoderman"></a>
                  <a class="icon" href="https://twitter.com/nilssoderman" target="_blank" title="Twitter"><img src="./../resources/images/twitter-icon.png" width=32 alt="Twitter: @nilssoderman"></a>
                </div>
              </div>
            </div>

            <div id="bio">
                <p>Junior animator at <a href="https://www.hazelight.se" target="_blank">Hazelight</a>.<br></p>
            </div>
        </div>    
    </div>

</body>

</html>