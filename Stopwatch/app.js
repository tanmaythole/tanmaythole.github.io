window.onload=function(){
    var t=0;
    var s=0;
    var timer=document.getElementById("timer");
    var sec=document.getElementById("sec");
    var tens=document.getElementById("tens");
    var start=document.getElementById("start");
    var stop=document.getElementById("stop");
    var reset=document.getElementById("reset");
    var interval;

    start.onclick=function(){
        
        interval=setInterval(setTimer,10);
        
    }
    stop.onclick=function(){
        clearInterval(interval);
    }
    reset.onclick=function(){
        t=0;
        s=0;
        sec.innerHTML="00";
        tens.innerHTML="00";
        clearInterval(interval);
    }

    function setTimer(){
        t++;
        if(t<=9){
            tens.innerHTML="0"+t;
        }
        if(t>9){
            tens.innerHTML=t;
        }
        if(t>99){
            s++;
            t=0;
            sec.innerHTML="0"+s;
            tens.innerHTML="0"+0;
        }
        if(s>9){
            sec.innerHTML=s;
        }
    }
}