<?php 


/*function startGame()
{  
    $roll = false;
    $dice = array(1,2,3,4,5);
    $dice_count = 5;
    $sides = 6;
    
    for($i=1;$i<=$dice_count;$i++)
    {
        $random = rand(1,$sides);
        //echo $random . "<br>";
        echo "<input name='cube' type='radio' class='cube' value='" . $random .  "' id='cube" . $i . "'>";
        $score = 0;
                    
        if ($_POST['cube'] == "1") {          
            $score += 100;  
        }
    }
    
  
    foreach($sides as $dice_count => $score)
    {
        if($sides == 1)
    }
}*/

$roll = false;
$dice = array(1,2,3,4,5);
$score = 0;

function startGame()
{
    $dice_count = 5;
    $sides = 6;
    global $score;

    for($i=1;$i<=$dice_count;$i++)
    {
        $random = rand(1,$sides);
        //echo $random . "<br>";
        echo 
        "
            <label class='cube' id='cube" . $i . "'>
                <input name='cube' type='checkbox' value='" . $random . "'>
                <span>" . $random . "</span>
            </label>
        "; 
    }
}

if(isset($_POST['pickup']))
{
    if(isset($_POST['cube'])) 
    {
        if($_POST['cube'] == 1)
        {
            $score += 100;
            echo "<script>alert('100')</script>";
        }
    }
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
        <div class="player" id="player">
            <!--<ul>
                <li>3x 1 | 1000 points</li>
                <li>1x 1 | 100 points</li>
                <li>3x 5 | 500 points</li>
            </ul>-->
            <p>
                <?php 
                    echo $score;
                ?>
            </p>
        </div>

        <div class="canvas" id="canvas">
            <?php
                if(isset($_POST['roll']))
                {
                    
            ?>
                <form class='dice' method="POST"><?= startGame(); ?></form>
            <?php
                }
            ?>

            <form class="pickup" method="POST">
                <button name="pickup" type="submit" onclick="window.location.reload();">Pick Up</button>
            </form>

            <form class="roll" method="POST">
                <button name="roll" type="submit"><img src="img/roll.png" alt="roll"></button>
            </form>

            <div class="selectedDice">

            </div>
        </div>  
    </div>
</body>
</html>