var UnityVideoPlayer;

EIdNames = {
    VideoElement:   "unity-player-video",
    VideoSource:    "unity-player-video-src",
    PauseBtn:       "pause-button",
    Timeline:       "timeline",
    TimeSlider:     "timeline_drag",
    TimeSliderInput:"unity-player-timeline-input"
}

class VideoPlayerClass{
    constructor(VideoElement, VideoSource, Timeline, TimeSlider){
        this.Video = VideoElement;
        this.VideoSource = VideoSource;
        this.Timeline = Timeline;
        this.TimeSlider = TimeSlider;

        this.Timer = null;

        this.FPS = 30;
        this._bIsPlaying = false;
        this._videoDuration = 0;

        this.Video.onloadedmetadata = this.VideoMetaDataLoaded.bind(this);

    }

    Play(){
        if (this._bIsPlaying){
            this.Pause();
        }
        this.Video.play();
        this._bIsPlaying = true;
        this.Timer = setInterval(this._TickUpdate.bind(this), 1000/this.FPS);
        //document.getElementById(EIdNames.PauseBtn).style = "";
    }

    Pause(){
        this.Video.pause();
        this._bIsPlaying = false;
        clearInterval(this.Timer);
    }

    TogglePlay(){
        if(this._bIsPlaying){
            this.Pause();
            return false;
        } 
        else{
            this.Play();
            return true;
        }
    }

    GetCurrentFrame(){
        return this.GetCurrentTime() * this.FPS;
    }

    GetCurrentTime(){
        return this.Video.currentTime;
    }

    GetPercentage() {
        return this.Video.currentTime / this.Video.duration;
    }

    GetFrameFromTime(Time){
        return Time * this.FPS;
    }

    SetCurrentFrame(Frame){
        this.SetCurrentTime(Frame / this.FPS);
    }

    SetCurrentTime(Time){
        this.Video.currentTime = Time;
    }

    LoadVideo(url){
        this.VideoSource.setAttribute('src', url);
        this.Video.load();
        
    }

    VideoMetaDataLoaded(){
        this._videoDuration = this.Video.duration;
        this.TimeSlider.max = this.GetFrameFromTime(this._videoDuration);
    }

    _TickUpdate(){
        this.TimeSlider.value = this.GetCurrentFrame();
    }

}

function TogglePlayVideo(){
    bPlaying = UnityVideoPlayer.TogglePlay();
}

function AnimationChanged(event){
    var FolderLocation = "https://nilssoderman.com/resources/videos/altiia-and-the-trial-islands/";
    var FileExt = ".mp4";
    var VideoUrl = FolderLocation + event.value + FileExt;
    UnityVideoPlayer.LoadVideo(VideoUrl);
    UnityVideoPlayer.Play();
}

function SetVideoFrame(Frame){
    UnityVideoPlayer.SetCurrentFrame(Frame);
}


function main(){
    var VideoElement = document.getElementById(EIdNames.VideoElement);
    var VideoSource = document.getElementById(EIdNames.VideoSource);
    var Timeline = document.getElementById(EIdNames.Timeline);
    var TimeSlider = document.getElementById(EIdNames.TimeSliderInput);
    UnityVideoPlayer = new VideoPlayerClass(VideoElement, VideoSource, Timeline, TimeSlider);
    UnityVideoPlayer.LoadVideo("https://nilssoderman.com/resources/videos/altiia-and-the-trial-islands/Walk.mp4");
    UnityVideoPlayer.Play();
}

main();


/*


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
    
}*/