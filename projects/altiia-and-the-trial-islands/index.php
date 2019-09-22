<!DOCTYPE html>
<!--
The source code for this website is available on GitHub:
https://github.com/nils-soderman/www.nilssoderman.com
-->
<html lang="en">
<head>   
    <meta charset="UTF-8">
    <title>Altiia and The Trial Islands - Nils Söderman</title>
    <meta name="description" content="Breakdown of the animations done for the Altiia and the Trial Islands game project. This was a student project made at Futuregames and the game was made in Unity.">   
    <meta name="keywords" content="unity animation example, game animation breakdown, futuregames, free open world game, student game">   
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="./../../resources/css/main.min.css">  
    <link rel="stylesheet" type="text/css" href="./../../resources/css/video_wrapper.css">   
    <link rel="stylesheet" type="text/css" href="./../../resources/css/download-button.css">  
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">   
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">   
    <link href="https://nilssoderman.com/resources/images/icons/altiia-and-the-trial-islands-icon.ico" rel="shortcut icon" type="image/x-icon">   
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

   <style>

   /* Page Content */
   #project-description{     
       margin-top: 35px;     
       font-size: 18px;   
    }
    #title {
        margin-top: 50px;
        margin-bottom: 20px; 
        text-align: center;
        font-size: 20px;
        font-family: 'Cinzel', serif;
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
   
   #download_txt{       
       font-size:24px;
       text-align:center;
    }
   #download_url{       
       color:#001456;
    }
   
   #download_url:hover{
       color:#293b77;
   }
   
   #download_url:active{
       color:#5469af;
       }


   :root {
       --button-color: #90c9e8;
       --dl-buton-width: 290px;
       --dl-buton-height: 50px;
   }
   
   .download-button-wrapper{
       margin: 0 auto;
   }
   
   #rig-wrapper{
       width:100%;
       height:500px;
   }
   
   #rig-wrapper-center{
       height:500px;
       display: block;
       margin-left: auto;
       margin-right: auto;
       width: 690px;
   }
   
   @media (max-width: 700px) {
       #rig-wrapper-center{
           width: 400px;
       }
       
       #rig-features-list{
           width:500px;
       }
       
   }
   
   #img-rig{
       float:left;
   }
   
   .subtitle{
       font-family: 'Cinzel', serif;
       font-size:36px;
       text-align:center;
   }
   
   #rig-features-list{
       float:left;
   }
   
   #rig-features-list li{
       list-style-image: url('https://nilssoderman.com/resources/images/icons/image02.png');
   }
   
   #rig-features-list li:hover{
       opacity:.6;
       cursor:pointer;
       text-decoration:underline;
   }
   
   .popup{
       display:none;
       position:fixed;
       top:0px;
       left:0px;
       height:100%;
       width:100%;
   }
   
   .center-content{
       display: block;
       margin-left: auto;
       margin-right: auto;
       text-align:center;
   }
   
   .popup-background{
       -webkit-transition: all 2s; /* Safari */
       transition: all 2s;
       position:absolute;
       top:0;
       width:100%;
       height:100%;
       background-color:#000000;
       opacity:.75;
       z-index:2;
   }
   
   .popup-content{
       height:50%;
       position:absolute;
       top: 40%;
       left:50%;
       z-index:5;
   }
   .popup-content2{
       position:relative;
       top:-50%;
       left: -50%;
       color:#fff;
       text-align:center;
   }
   .popup-content2 p{
       background-color:rgba(0,0,0,.7);
       border-radius:5px;
       font-family: 'Open Sans', sans-serif;
   }
   
   .popup-image{
       z-index:5;
       border-radius: 3px;
       margin-bottom:15px;
   }
   
   .cursive{
       font-style: italic;
   }
   
   #animation-player-wrapper{
       background-color:#333233;
       font-family: arial;
       display: block;
       margin-left: auto;
       margin-right: auto;
       width:866px;
       height:449px;
       margin-bottom:100px;
       box-shadow: 0px 0px 20px #999999;
       border-style: outset;
       border-color: #bbbbbb;
       border-width: 1px;
       -webkit-touch-callout: none;
       -webkit-user-select: none;
       -khtml-user-select: none;
       -moz-user-select: none;
       -ms-user-select: none;
       user-select: none;
   }
   
   #animation-list{
       float:left;
       background-color:#c2c2c2;
       width:150px;
       height:449px;
   }
   
   #play-button {
       position:absolute;
       margin-left:153px;
       margin-top:-26px;
       width:33px;
       height:20px;
   }
  
   
   #play-button:hover{
       cursor:pointer;
   }
   
   #pause-button{
       height:21px;
       
   }
   
   #animation-video{
       margin-top:-5px;
   }
   
   input{
       position:absolute;
       height:0px;
   }
   
   .input-label{
       font-size:13px;
       float:left;
       cursor:pointer;
   }
   
   .input-label:hover{
       background-color:#a4b1c5;
   }
   
   input:checked + .input-label {
       background-color: #3e7de7;
   }
   
   .anim-clip-i{
       margin-right:5px;
       margin-left:10px;
       
   }
   
   .txt{
       width:500px;
   }
   
   .border-right-unityp{
       border-left:3px solid #a2a2a2;
   }
   
   #animation-title{
       color:#dedede;
       position:absolute;
       font-size:11.5px;
       font-weight:bold;
       margin-left:160px;
       margin-top:24px;
   }
   


   
   #player-popup{
       position:absolute;
       background-color:rgba(220, 216, 153, 0.9);
       height:30px;
       width:200px;
       font-size:18px;
       font-weight:bold;
       border-radius:3px;
       text-align:center;
       margin-top:45px;
       margin-left:-225px;
       box-shadow: 7px 4px 20px #999999;
   }
   
   #player-popup p{
       margin-top:5px;
   }
   
   .arrow-right {
       position:absolute;
       margin-left:200px;
       margin-top:-29px;
       width: 0; 
       height: 0; 
       border-top: 7px solid transparent;
       border-bottom: 7px solid transparent;
       border-left: 20px solid rgba(220, 216, 153, 0.9);
   }
   
   @media (max-width: 1300px) {
       #player-popup{
           margin-left:0px;
           margin-top:-40px;
       }
       
       .arrow-right {
         border-left: 15px solid transparent;
         border-right: 15px solid transparent;
         margin-left:0px;
         margin-top:-15px;
         border-top: 15px solid rgba(220, 216, 153, 0.9);
       }
   }
   
   #timeline_drag{
       width:2px;
       height:20px;
       position:absolute;
   }
   #timeline_drag:hover{
       cursor:pointer;
   }
   #timeline{
       position:absolute;
       height:20px;
       width:683px;
       opacity:.5;
       margin-left:183px;
       margin-top:-21px;
   }
   
   .unity-player-image{


       user-select: none;
       -moz-user-select: none;
       -webkit-user-drag: none;
       -webkit-user-select: none;
       -ms-user-select: none;
   }

 </style>

</head>

<body>

   <?php include('./../../resources/includes/header.html'); ?>

 <div id="title">
   <h1>Altiia and the trial islands</h1>
 </div>


 <div class="videoWrapper">
   <iframe id="trailer" width="1280" height="720" src="https://www.youtube.com/embed/hW6YyvUAC6s?rel=0&amp;showinfo=0" allowfullscreen></iframe>
 </div>


 <div id="description">
   <div id="project-description">
       
   <div id="download-button">
       <div class="download-button-wrapper">
           <a href="https://tobias-nylin.itch.io/altiia-and-the-trial-islands" target="_blank">
               <div class="download-button">
                   <i class="dl-image material-icons">get_app</i>
                   <span class="dl-text">
                       Download the game at itch.io
                   </span>
               </div>
           </a>
       </div>
   </div>
       
     <p>
         
       
       <br>
       Be ready to embark on a journey filled with exploration and challenges. In this game you play as Altiia, a feisty creature named after her passion for high altitudes. On the hunt for treasures and adventure, she has discovered a cluster of islands which have ruins and temples scattered all around. Your journey begins as she has found a way inside a temple where an adaptable staff resides inside. This staff can be extended at command which can allow her to pole vault with finesse. However, the staff is missing a vital piece which may be hidden on one of the other islands.<br>
       <br>
       This was a student project made at Future Games during the course of 7 weeks and we were a team of 10 people. The goal was to create a sandbox game with customization, while keeping audience awareness in mind. 
       During this project I was mainly responsible for the animation, rigging as well as set-dressing some parts the world.<br>
       <br>
     </p>
       
       <h2 class="subtitle">Animations</h2>
       
       <div id="animation-player-wrapper">
           
           <div id="player-popup"><p>Click to view a clip</p> <div class="arrow-right"></div></div>
           
           <div id="animation-list">
               <h3 id="animation-title" >Walk</h3>
               <img class="unity-player-image" src="https://nilssoderman.com/resources/images/image/unity-player-project.png" alt="Video Clips"/>


               <input type="radio" name="animation" value="Walk" id="Walk" checked>
               <label class="input-label" for="Walk"><img class="anim-clip-i" src="https://nilssoderman.com/resources/images/icons/animation-clip.png" alt="Play"/>Walk<span style="margin-right:94px;"></span></label>
               <br>
               
               <input type="radio" name="animation" value="Running" id="Running">
               <label class="input-label" for="Running"><img class="anim-clip-i" src="https://nilssoderman.com/resources/images/icons/animation-clip.png" alt="Play"/>Running<span style="margin-right:74px;"></span></label>
               <br>
               
               <input type="radio" name="animation" value="Running_Left" id="Running_Left">
               <label class="input-label" for="Running_Left"><img class="anim-clip-i" src="https://nilssoderman.com/resources/images/icons/animation-clip.png" alt="Play"/>Running_Left<span style="margin-right:45px;"></span></label>
               <br>
               
               <input type="radio" name="animation" value="Running_Right" id="Running_Right">
               <label class="input-label" for="Running_Right"><img class="anim-clip-i" src="https://nilssoderman.com/resources/images/icons/animation-clip.png" alt="Play"/>Running_Right<span style="margin-right:36px;"></span></label>
               <br>
               
               <input type="radio" name="animation" value="Jump" id="Jump">
               <label class="input-label" for="Jump"><img class="anim-clip-i" src="https://nilssoderman.com/resources/images/icons/animation-clip.png" alt="Play"/>Jump<span style="margin-right:91px;"></span></label>
               <br>
               
               <input type="radio" name="animation" value="Doubble_Jump" id="Doubble_Jump">
               <label class="input-label" for="Doubble_Jump"><img class="anim-clip-i" src="https://nilssoderman.com/resources/images/icons/animation-clip.png" alt="Play"/>Doubble_Jump<span style="margin-right:35px;"></span></label>
               <br>
               
               <input type="radio" name="animation" value="Pole_Vault" id="Pole_Vault">
               <label class="input-label" for="Pole_Vault"><img class="anim-clip-i" src="https://nilssoderman.com/resources/images/icons/animation-clip.png" alt="Play"/>Pole_Vault<span style="margin-right:61px;"></span></label>
               <br>
               
               <input type="radio" name="animation" value="Landing" id="Landing">
               <label class="input-label" for="Landing"><img class="anim-clip-i" src="https://nilssoderman.com/resources/images/icons/animation-clip.png" alt="Play"/>Landing<span style="margin-right:76px;"></span></label>
               <br>
               
               <input type="radio" name="animation" value="Roll" id="Roll">
               <label class="input-label" for="Roll"><img class="anim-clip-i" src="https://nilssoderman.com/resources/images/icons/animation-clip.png" alt="Play"/>Roll<span style="margin-right:100px;"></span></label>
               <br>
               
               <input type="radio" name="animation" value="Falling" id="Falling">
               <label class="input-label" for="Falling"><img class="anim-clip-i" src="https://nilssoderman.com/resources/images/icons/animation-clip.png" alt="Play" />Falling<span style="margin-right:84px;"></span></label>
               <br>
               
               <input type="radio" name="animation" value="Falling_Fast" id="Falling_Fast">
               <label class="input-label" for="Falling_Fast"><img class="anim-clip-i" src="https://nilssoderman.com/resources/images/icons/animation-clip.png" alt="Play" />Falling_Fast<span style="margin-right:52px;"></span></label>
               <br>
               
               <input type="radio" name="animation" value="Falling_Airboost" id="Falling_Airboost">
               <label class="input-label" for="Falling_Airboost"><img class="anim-clip-i" src="https://nilssoderman.com/resources/images/icons/animation-clip.png" alt="Play" />Falling_Airboost<span style="margin-right:29px;"></span></label>
               <br>
               
               <input type="radio" name="animation" value="Falling_Airboost_Fast" id="Falling_Airboost_Fast">
               <label class="input-label" for="Falling_Airboost_Fast"><img class="anim-clip-i" src="https://nilssoderman.com/resources/images/icons/animation-clip.png" alt="Play" />Falling_Airboost_Fas<span style="margin-right:0px;"></span></label>
               <br>
               
               <input type="radio" name="animation" value="Hanggliding" id="Hanggliding">
               <label class="input-label" for="Hanggliding"><img class="anim-clip-i" src="https://nilssoderman.com/resources/images/icons/animation-clip.png" alt="Play" />Hanggliding<span style="margin-right:54px;"></span></label>
               <br>
               
               <input type="radio" name="animation" value="Hanggliding_Left" id="Hanggliding_Left">
               <label class="input-label" for="Hanggliding_Left"><img class="anim-clip-i" src="https://nilssoderman.com/resources/images/icons/animation-clip.png" alt="Play" />Hanggliding_Left<span style="margin-right:25px;"></span></label>
               <br>
               
               <input type="radio" name="animation" value="Hanggliding_Right" id="Hanggliding_Right">
               <label class="input-label" for="Hanggliding_Right"><img class="anim-clip-i" src="https://nilssoderman.com/resources/images/icons/animation-clip.png" alt="Play" />Hanggliding_Right<span style="margin-right:16px;"></span></label>
               <br>
               
               <input type="radio" name="animation" value="Hanggliding_Boost" id="Hanggliding_Boost">
               <label class="input-label" for="Hanggliding_Boost"><img class="anim-clip-i" src="https://nilssoderman.com/resources/images/icons/animation-clip.png" alt="Play" />Hanggliding_Boost<span style="margin-right:13px;"></span></label>
               <br>
               
               <input type="radio" name="animation" value="Glider_Expand" id="Glider_Expand">
               <label class="input-label" for="Glider_Expand"><img class="anim-clip-i" src="https://nilssoderman.com/resources/images/icons/animation-clip.png" alt="Play" />Glider_Expand<span style="margin-right:37px;"></span></label>
               <br>
               
               <input type="radio" name="animation" value="Glider_Idle" id="Glider_Idle">
               <label class="input-label" for="Glider_Idle"><img class="anim-clip-i" src="https://nilssoderman.com/resources/images/icons/animation-clip.png" alt="Play" />Glider_Idle<span style="margin-right:60px;"></span></label>
               <br>
               
               <input type="radio" name="animation" value="Glider_Retract" id="Glider_Retract">
               <label class="input-label" for="Glider_Retract"><img class="anim-clip-i" src="https://nilssoderman.com/resources/images/icons/animation-clip.png" alt="Play" />Glider_Retract<span style="margin-right:39px;"></span></label>
               <br>
                   
           </div>
           <div id="unity-player">
               <img class="border-right-unityp unity-player-image" src="https://nilssoderman.com/resources/images/image/unity-player-ui.png" alt="Player"/>
               <div id="timeline">
                   <div id="timeline_drag"></div>
               </div>
               <div id="play-button" onclick="playPause()">
                   <img id="pause-button" class="unity-player-image" src="https://nilssoderman.com/resources/images/image/unity-player-pause.jpg" alt="Pause" />
               </div>
               <video width="713" id="animation-video" class="border-right-unityp" loop muted>
               </video>
           </div>
           
       </div>
       
       
       
       <img class="center-content" id="img-tree" src="https://nilssoderman.com/resources/images/image/altiia-and-the-trial-islands-animtree.png" style="width:80%;" alt="Unity animation tree"/>
       <br>
       <span class="center-content">This is the animation tree for the character movement set. <span class="cursive">(Everything with the prefix "B_" is a blendtree)</span></span>
       <br><br><br>
       
       <div class="center-content">
       <img id="img-tree-layer" src="https://nilssoderman.com/resources/images/image/altiia-and-the-trial-islands-animtree-layer.png" style="width:60%;" alt="Additive animation tree for eyes"/>
       <video autoplay loop muted style="margin-left:-5px; width:10.9%;">
           <source src="https://nilssoderman.com/resources/videos/altiia-and-the-trial-islands/altiia-and-the-trial-islands-rig-blinks.mp4"/>
       </video>
       </div>
       <br>
       <span class="center-content">The eyes were animated on an additive animation layer. It'll always loop an eye dart animation, and then play a blink on a random interval between 2-10 sec.</span>
       <br><br>
       <h2 class="subtitle">Maya rig</h2>
       
       <div id="rig-wrapper">
           
           <div id="rig-wrapper-center">
               <img id="img-rig" src="https://nilssoderman.com/resources/images/image/altiia-and-the-trial-islands-character-rig.png" width=400 alt="Maya Character Rig"/>
               
               <ul id="rig-features-list">
                   <li id="IKlegs" style="color:#3066a1">IK legs</li>
                   <li id="footroll" style="color:#a16b30">Footroll</li>
                   <li id="ik-fk-blend" style="color:#6f30a1">IK/FK blend for the arms</li>
                   <li id="face" style="color:#30a15c">Face rig</li>
                   <li id="fingers" style="color:#a1306b">Fingers</li>
                   <li id="MB_Rig" style="color:#9ea130">MotionBuilder support</li>
                   <li id="export-script" style="color:#30a1a1">Animation export script</li>
               </ul>
               
           </div>
       </div>
       
       <div class="center-content">
           The character model was made by <a href="https://linnpennanen.com/projects/YNLvX" class="text-url" target="_blank">Linn Pennanen</a>.<br>
           And the character concepts were made by <a href="https://www.artstation.com/mendoart" class="text-url" target="_blank">Marie Sommerdahl</a>.
       </div>
       
     
   </div>
 </div>
 




   <?php include('./../../resources/includes/footer.html'); ?>





<div class="popup" id="IKlegs_popup">
   <div class="popup-content">
       <div class="popup-content2">
       <video autoplay loop muted>
           <source src="https://nilssoderman.com/resources/videos/altiia-and-the-trial-islands/altiia-and-the-trial-islands-rig-ik-legs.mp4"/>
       </video>
       </div>
   </div>
   <div class="popup-background" id="apopup-background"></div>

</div>



<div class="popup" id="footroll_popup">
   <div class="popup-content">
       <div class="popup-content2">
       <video autoplay loop muted>
           <source src="https://nilssoderman.com/resources/videos/altiia-and-the-trial-islands/altiia-and-the-trial-islands-rig-footroll.mp4"/>
       </video>
       </div>
   </div>
   <div class="popup-background"></div>

</div>



<div class="popup" id="ik-fk-blend_popup">
   <div class="popup-content">
       <div class="popup-content2">
       <video autoplay loop muted>
           <source src="https://nilssoderman.com/resources/videos/altiia-and-the-trial-islands/altiia-and-the-trial-islands-rig-ik-blend.mp4"/>
       </video>
       </div>
   </div>
   <div class="popup-background"></div>

</div>



<div class="popup" id="face_popup">
   <div class="popup-content">
       <div class="popup-content2">
           <video autoplay loop muted>
               <source src="https://nilssoderman.com/resources/videos/altiia-and-the-trial-islands/face-rig.mp4"/>
           </video>
       </div>
   </div>
   <div class="popup-background"></div>

</div>



<div class="popup" id="fingers_popup">
   <div class="popup-content">
       <div class="popup-content2">
           <video autoplay loop muted>
               <source src="https://nilssoderman.com/resources/videos/altiia-and-the-trial-islands/rig-fingers.mp4"/>
           </video>
       </div>
   </div>
   <div class="popup-background"></div>

</div>



<div class="popup" id="export-script_popup">
   <div class="popup-content">
       <div class="popup-content2">
           <video autoplay loop muted>
               <source src="https://nilssoderman.com/resources/videos/altiia-and-the-trial-islands/altiia-and-the-trial-islands-export-script.mp4"/>
           </video>
           <p>
           A one click solution to bring the animations into the Unity project. The name of the animation will be the same as the Maya file.<br>
           This script was written in Python.
           </p>
       </div>
   </div>
   <div class="popup-background"></div>

</div>



<div class="popup" id="MB_popup">
   <div class="popup-content">
       <div class="popup-content2">
           <video autoplay loop muted>
               <source src="https://nilssoderman.com/resources/videos/altiia-and-the-trial-islands/MB_Rig.mp4"/>
           </video>
       </div>
   </div>
   <div class="popup-background"></div>

</div>



<div class="popup" id="gameplay_popup">
           <div class="videoWrapper" style="margin-top:50px">
               <iframe width="1280" height="720" src="https://www.youtube.com/embed/5_rynVP9OGU?rel=0&amp;showinfo=0" allowfullscreen></iframe>
           </div>
   <div class="popup-background"></div>

</div>





<script>
   
   
   
   var viewing = false;
   var popups = document.getElementsByClassName("popup");
   for (i = 0; i < popups.length; i++) {
       popups[i].onclick = function(){
           for (i = 0; i < popups.length; i++) {
               popups[i].style.display = "none";
               document.getElementById('trailer').style.display = "block";
           }
       }
   }
   
   var video = document.getElementById("animation-video");
   function playPause() { 
       if (video.paused) {
           video.play();
           document.getElementById('pause-button').style.display = "block";
   }
       else {
           video.pause(); 
           document.getElementById('pause-button').style.display = "none";
       }
   } 
   
   var radios = document.getElementsByName("animation");
   var source = document.createElement('source');
   var previousSel = "Walk"
   source.setAttribute('src', 'https://nilssoderman.com/resources/videos/altiia-and-the-trial-islands/Walk.mp4');
   video.appendChild(source);
   video.play()
   
   for (i = 0; i < radios.length; i++) {
        radios[i].onclick = function() {
            if (this.value != previousSel){
                previousSel = this.value
                var videoURL = "https://nilssoderman.com/resources/videos/altiia-and-the-trial-islands/"+this.value+".mp4"
                source.setAttribute('src', videoURL);
                video.load();
                video.play();
                document.getElementById('pause-button').style.display = "block";
                document.getElementById("animation-title").innerHTML = this.value;
                document.getElementById("player-popup").style.display = "none";
            }
           
        }
   }
   
   
   
   
   //timeline
   dragElement(document.getElementById("timeline_drag"));
   var timeline = document.getElementById('timeline'),
   duration = video.duration
   
   function dragElement(elmnt) {
       
   }
   
   
   
   document.getElementById('IKlegs').onclick = function(){
       viewing = true;
       document.getElementById("IKlegs_popup").style.display = "block";
   }
   
   document.getElementById('footroll').onclick = function(){
       viewing = true;
       document.getElementById("footroll_popup").style.display = "block";
   }
   
   document.getElementById('ik-fk-blend').onclick = function(){
       viewing = true;
       document.getElementById("ik-fk-blend_popup").style.display = "block";
   }
   
   document.getElementById('face').onclick = function(){
       viewing = true;
       document.getElementById("face_popup").style.display = "block";
   }
   
   document.getElementById("fingers").onclick = function(){
       viewing = true;
       document.getElementById('fingers_popup').style.display = "block";
   }
   
   document.getElementById('export-script').onclick = function(){
       viewing = true;
       document.getElementById('export-script_popup').style.display = "block";
   }
   
   document.getElementById('MB_Rig').onclick = function(){
       viewing = true;
       document.getElementById('MB_popup').style.display = "block";
   }
   
   /*document.getElementById('gameplay-link').onclick = function(){
       viewing = true;
       document.getElementById('gameplay_popup').style.display = "block";
       document.getElementById('trailer').style.display = "none";
   }*/
</script>

</body>

</html>