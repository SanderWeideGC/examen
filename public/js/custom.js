let date;
let lane;

// Controleren of er een datum is ingevoerd
document.getElementById("reservationDate").onchange = function(){
    date = document.getElementById("reservationDate").value;
    getAvailableTimes();
};

// Controleren of er een baan is ingevoerd
document.getElementById("reservationLane").onchange = function(){
    lane = document.getElementById("reservationLane").value;
    getAvailableTimes();
};

// Controleren welke tijden er voor een specifieke baan en datum nog beschikbaar zijn
function getAvailableTimes() {
    // Controleren of baan en datum allebij ingevult zijn
    if(lane && date) {
        // AJAX request naar de server met de geselecteerde baan en datum
        $.ajax({
            url: '/reserveren/time/'+ lane +'/'+ date,
            success: function(data){
                let availableTimes = JSON.parse(data);
                // Alle beschikbare tijden in de dropdown zetten
                $.each(availableTimes, function(key, value){
                    $("#time").append("<option value='"+ value + "'>" + value + "</option>");
                })
            }});
    }
}
