let date;
let lane;

document.getElementById("reservationDate").onchange = function(){
    date = document.getElementById("reservationDate").value;
    getAvailableTimes();
};
document.getElementById("reservationLane").onchange = function(){
    lane = document.getElementById("reservationLane").value;
    getAvailableTimes();
};

function getAvailableTimes() {
    if(lane && date) {
        $.ajax({
            url: '/reserveren/time/'+ lane +'/'+ date,
            success: function(data){
                var availableTimes = JSON.parse(data);
                $("#time").empty();
                $.each(availableTimes, function(key, value){
                    $("#time").append("<option value='"+ value + "'>" + value + "</option>");
                })
            }});
    }
}
