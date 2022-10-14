<?php
if(isset($_POST['start']))
{
    header("location: game.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Game</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="main-h1">Dice Game</h1>

    <div class="container">
        <form class="form" id="form" method="POST">
            <button class="startGame" id="startGame" name="start" type="submit">START</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>