window.onload = function() {
    setInterval("hora()", 1000);
}
function hora() {
    var agora = new Date();
    var hora = agora.getHours();
    var minutos = agora.getMinutes();
    var second = agora.getSeconds();
    if(second < 10) {
        second = "0" + agora.getSeconds();
    }

    var FullTime = hora + ":" + minutos + ":" + second;
    document.getElementById("h1").innerText = FullTime;

    
}