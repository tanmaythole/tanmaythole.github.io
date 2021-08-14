document.getElementById("container").style.display="none";
document.getElementById("timeup").style.display="none";

var timeraudio=document.getElementById("timeraudio");
function calc(){
    var name=document.getElementById("event").value;
    var date=document.getElementById("date").value;
    var time=document.getElementById("time").value;
    
    if(time!="" && date!=""){
        var finaldate=new Date(date+" "+time).toISOString();
        var totaltime=new Date(finaldate).getTime();

        setInterval(function(){
            var presentTime=new Date().getTime();
            document.getElementById("form").style.display="none";
            document.getElementById("container").style.display="block";
            var timediff=(totaltime-presentTime)/1000;
            if(timediff<=0){
                timeraudio.play();

                document.getElementById("clock").style.display="none";
                document.getElementById("timeup").style.display="block";    

                document.getElementById("days").innerText=0;
                document.getElementById("hrs").innerText=0;
                document.getElementById("mins").innerText=0;
                document.getElementById("sec").innerText=0;
            }
            else{
                updatedTime(timediff);
            }
        });
    }
    else{
        alert("Fill required Fields......");
    }
    function updatedTime(time_diff){
        var days=Math.floor(time_diff/86400);
        time_diff-=days*86400;

        var hrs=Math.floor(time_diff/3600)%24;
        time_diff-=hrs*3600;

        var mins=Math.floor(time_diff/60)%60;
        time_diff-=mins*60;

        var secs=Math.floor(time_diff)%60;
    
        document.getElementById("days").innerText=days;
        document.getElementById("hrs").innerText=hrs;
        document.getElementById("mins").innerText=mins;
        document.getElementById("sec").innerText=secs;
    }
    document.getElementById("eventname").innerHTML=name;
}