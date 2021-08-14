

function calculatetip(){
    var billamt=document.getElementById("billamt").value;
    var service=document.getElementById("service").value;
    var numofpeople=document.getElementById("people").value;

    if(billamt==="" || service==="0"){
        alert("Please Enter Mandatory Fields");
        return;
    }

    document.getElementById("displaytip").style.display="block";

    if(numofpeople<=1 || numofpeople===""){
        numofpeople=1;
        document.getElementById("each").style.display="none";
    }else{
        document.getElementById("each").style.display="show";
    }

    var tip=billamt*service/numofpeople;
    tip=Math.round(tip*100)/100;
    tip=tip.toFixed(2);
    document.getElementById("tipamt").innerHTML=tip;

    var total=(billamt/numofpeople)+(billamt*service/numofpeople);
    
    total=Math.round(total);
    total=total.toFixed(2);
    document.getElementById("totalamt").innerHTML=total;
}

document.getElementById("displaytip").style.display="none";


document.getElementById("btn").onclick=function(){
    calculatetip();
};

