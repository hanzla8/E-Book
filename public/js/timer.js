var deadline = new Date();
deadline.setHours(deadline.getHours() + 3);

var timerInterval = setInterval(function() {

    var now = new Date().getTime();

    var distance = deadline - now;

    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("timer").innerHTML = "Your Time Starts Now: " + hours + "h " + minutes + "m " + seconds + "s ";

    if (distance < 0) {
        clearInterval(timerInterval);
        document.getElementById("timer").innerHTML = "Time's up! You cannot submit anymore.";
        document.querySelector('input[type="submit"]').disabled = true;
    }
}, 1000);

