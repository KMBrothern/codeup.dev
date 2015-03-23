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

    var bomInterval = setInterval(function updateTimer() {
        if (detonationTimer == 0) {
            alert('EXTERMINATE!');
            document.body.innerHTML = '';
        } else if (detonationTimer > 0) {
            document.getElementById('timer').innerHTML = detonationTimer;
        }

        detonationTimer--;
    }, 1000);

    function defuseTheBOM() {
        clearInterval(bomInterval);
        alert("We are not going to blow up!");
        document.getElementById('message').innerHTML = "The BOM is shutdown, the apocalypse has been avoided!";


    }
         

var defuser = document.getElementById('defuser');
defuser.addEventListener('click', defuseTheBOM, false);
</script>
</body>
</html>
