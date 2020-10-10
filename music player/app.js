let fill=document.getElementById("fill");

let audios=["Despacito(PaglaSongs).mp3","Ghungroo Song (Remix) - DJ Rohit n Teju(PaglaSongs).mp3","O Saathi (Baaghi 2) 128 Kbps.mp3","Duniya - Luka Chuppi 128 Kbps.mp3"];
let covers=["1.jpg","2.jpg","3.jpg","4.jpg"];
let titles=["Despacito","Ghungroo Song (Remix) - DJ Rohit n Teju","O Saathi (Baaghi 2)","Duniya - Luka Chuppi"];


let audio=new Audio();
let currSong=0;

window.onload=playSong;

function playSong(){
    audio.src=audios[currSong];
    audio.play();
    document.getElementById("img").src=covers[currSong];
    document.getElementById("audioTitle").innerHTML=titles[currSong];
}


function playpause(){
    
    if(audio.paused){
        audio.play();
        document.querySelector(".play-pause").innerHTML='<i class="fa fa-pause"></i>';
    }else{
        audio.pause();
        document.querySelector(".play-pause").innerHTML='<i class="fa fa-play"></i>';
    }
}

audio.addEventListener("timeupdate", function(){
    let presentTime=audio.currentTime/audio.duration;
    document.getElementById("fill").style.width=presentTime*100+"%";

    currTime(Math.round(audio.currentTime));

    if(audio.ended){
        next();
    }
});

function currTime(sec){
    let mins=Math.floor(sec/60);
    let secs=sec%60;

    if(mins<10){
        mins="0"+mins;
    }
    if(secs<10){
        secs="0"+secs;
    }

    document.getElementById("current").innerHTML=mins+":"+secs;

    TimeDuration(Math.round(audio.duration));
}

function TimeDuration(secs){
    let min=Math.floor(secs/60);
    let sec=secs%60;

    if(min<10){
        min="0"+min;
    }
    if(secs<10){
        sec="0"+sec;
    }
    document.getElementById("remaining").innerHTML=min+":"+sec;
}

function next(){
    currSong++;
    if(currSong>=audios.length){
        currSong=0;
    }
    playSong();
    document.querySelector(".play-pause").innerHTML='<i class="fa fa-pause"></i>';
}

function previous(){
    currSong--;
    if(currSong<0){
        currSong=audios.length-1;
    }
    playSong();
    document.querySelector(".play-pause").innerHTML='<i class="fa fa-pause"></i>';
}

function increase(){
    audio.volume+=0.20;
}

function decrease(){
    audio.volume-=0.20;
}


function volume(){
    if(audio.volume===1){
        audio.volume=0;
        document.getElementById("volumeup").innerHTML='<i class="fa fa-volume-off"></i>';
    }
    else{
        audio.volume=1;
        document.getElementById("volumeup").innerHTML='<i class="fa fa-volume-up"></i>';
    }
}
    