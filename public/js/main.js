
var interval = setInterval(timestamphome, 1000);

function timestamphome(){
    var date;
    date = new Date();


    var time = document.getElementById('timediv');


    time.innerHTML = date.toLocaleTimeString();


}

$(".notes-area").hide();
function showNotes($i) {
     $("#task-id-" + $i).toggle();
}
