<!DOCTYPE html>
<!--
The source code for this website is available on GitHub:
https://github.com/nils-soderman/www.nilssoderman.com
-->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nils Söderman Animator - About Me</title>
  <meta name="description" content="Nils Söderman is an animator working in the video game industry, he is currently working on Hazelight's next game It Takes Two.">
  <meta name="keywords" content="nils söderman, nils soderman, animator, animation reel, about, rymdnisse, technical animator, developer, game developer">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="./../favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="./../resources/css/main.min.css">
  <link rel="stylesheet" type="text/css" href="./about.min.css">

</head>

<body>

    <?php include('./../resources/includes/header.html'); ?>

    <div id="content">
        <div id = "about">
            <div id="profile">
              <img class="undraggable" id="profile-picture" src="./../resources/images/nils_soderman.png" width="300" height="300" alt="Nils Soderman">
              <div id="contact">
                <div id="about_email">contact@nilssoderman.com</div>
                <div id="about_social-media">
                  <div class="icon-holder">
                    <a class="icon" href="https://www.flickr.com/photos/nilssoderman/" target="_blank" title="Flickr" rel="noopener"><img class="undraggable" src="./../resources/images/icons/flickr-icon-32x.png" width="32" height="32" alt="Flickr: nilssoderman"></a>
                  </div>
                  <div class="icon-holder">
                    <a class="icon" href="https://www.linkedin.com/in/nilssoderman/" target="_blank" title="LinkedIn" rel="noopener"><img class="undraggable" src="./../resources/images/linkedin-icon.png" width="32" height="32" alt="LinkedIn: nilssoderman"></a>
                  </div>
                  <div class="icon-holder">
                    <a class="icon" href="https://github.com/nils-soderman" target="_blank" title="GitHub" rel="noopener"><img class="undraggable" src="./../resources/images/icons/github-icon-32x.png" width="32" height="32" alt="GitHub: nils-soderman"></a>
                  </div>
                  <div class="icon-holder">
                    <a class="icon" href="https://twitter.com/nilssoderman" target="_blank" title="Twitter" rel="noopener"><img class="undraggable" src="./../resources/images/twitter-icon.png" width="32" height="32" alt="Twitter: @nilssoderman"></a>
                  </div>
                </div>
              </div>
            </div>

            <div id="about-text">
              <div id="bio">
                  <p>Hi, I'm an animator with a love for video games. I've always liked the technical challenges that comes with creating animations for a game, trying to come up with smart solutions on how to bring the chararacters in engine to life.</p>
              </div>

              <div id="work-experience">
                <h2>Work experience</h2>
                <div class="line-break"></div>
                <ul>

                  <li>
                    <h3 class="company-title"><a href="https://www.hazelight.se" target="_blank" rel="noopener">Hazelight Studios</a></h3>
                    <div class="date">(2018 - present)</div>
                    <p class="description">Animator</p>
                  </li>

                  <li>
                    <h3 class="company-title"><a href="https://www.poliigon.com" target="_blank" rel="noopener">Poliigon</a></h3>
                    <div class="date">(2016 - 2019)</div>
                    <p class="description">Developer - Responsible for writing pipeline scripts/tools for a wide range of different DCCs such as Maya, 3ds Max, Cinema 4D & Blender. As well as general automation tools for Photoshop & Windows.</p>
                  </li>

                </ul>
              </div>

              <div id="education">
                <h2>Education</h2>
                <div class="line-break"></div>
                <ul>

                  <li>
                    <h3 class="company-title"><a href="http://futuregames.se" target="_blank" rel="noopener">FutureGames</a></h3>
                    <div class="date">(2017 – 2019)</div>
                    <p class="description">3D Artist</p>
                  </li>

                  <li>
                    <h3 class="company-title"><a href="https://www.animationmentor.com" target="_blank" rel="noopener">AnimationMentor</a></h3>
                    <div class="date">(2016 – 2017)</div>
                    <p class="description">Classes: Animation Basics, Body Mechanics, Advanced Body Mechanics & Introduction to Acting.</p>
                  </li>

                  <li>
                    <h3 class="company-title"><a href="https://www.his.se/utbildning/dataspelsutveckling/dataspelsutveckling-animation-dsapg/" target="_blank" rel="noopener">University of Skövde</a></h3>
                    <div class="date">(2015 – 2016)</div>
                    <p class="description">Studied Game development - Animation. However I only studied here for about half a year before I began studying at AnimationMentor instead.</p>
                  </li>

                </ul>
                <br/><br/><br/>
              </div>
            </div>

        </div>    
    </div>

<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Person",
    "familyName": "Söderman",
    "givenName": "Nils",
    "worksFor": {
      "@type": "Organization",
      "name": "Hazelight Studios"
    },
    "alumniOf": {
      "@type": "Organization",
      "name": "FutureGames"
    },
    "jobTitle": "Animator",
    "image": "https://nilssoderman.com/resources/images/nils_soderman.png",
    "gender": "http://schema.org/Male",
    "sameAs": ["https://twitter.com/nilssoderman","https://www.linkedin.com/in/nilssoderman/","https://www.youtube.com/rymdnisse"],
    "nationality": {
      "@type": "Country",
      "name": "Sweden"
    },
    "url": "https://nilssoderman.com",
    "birthDate": "1996-06-04"
  }
</script>

</body>

</html>