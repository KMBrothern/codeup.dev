<!DOCTYPE html>
<html>
<head>
    <title>Defuse the BOM</title>
</head>
<body class = bomb>
<link rel="stylesheet" href="css/defuse_the_bom.css">

<h2 id="message">This BOM will self destruct in <span id="timer">5</span> seconds...</h2>

    

    <button id="defuser">Defuse the BOM</button>

    <script>
        document.getElementById('defuser').innerHTML = "Save Humanity"
        var detonationTimer = 5;

        // TODO: This function needs to be called once every second
        // setInterval(updateTimer, 1000); is the same as what I have below but without the function itself equal to another variable.
var bomInterval = setInterval(function updateTimer()
        {
            if (detonationTimer == 0) {
                alert('EXTERMINATE!');
                document.body.innerHTML = '';
            } else if (detonationTimer > 0) {
                document.getElementById('timer').innerHTML = detonationTimer;
            }

            detonationTimer--;
        }, 1000);

        // TODO: When this function runs, it needs to
        // cancel the interval/timeout for updateTimer()
        function defuseTheBOM()
        {
                 clearInterval(bomInterval);
                 alert("We are not going to blow up!");
                 document.getElementById('message').innerHTML = "The BOM is shutdown, the apocalypse has been avoided!";


              }
         

        // Don't modify anything below this line!
        //
        // This causes the defuseTheBOM() function to be called
        // when the "defuser" button is clicked.
        // We will learn about events in the DOM lessons
        var defuser = document.getElementById('defuser');
        defuser.addEventListener('click', defuseTheBOM, false);
    </script>
</body>
</html>
