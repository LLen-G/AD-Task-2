<?php
if (!defined('BASE_URL')) {
    define('BASE_URL', '/AD-Task-2');
}
if (!defined('BASE_PATH')) {
    define('BASE_PATH', realpath(__DIR__ . '/../../'));
}

require_once BASE_PATH . '/vendor/autoload.php';
require_once BASE_PATH . '/bootstrap.php';

include BASE_PATH . '/components/templates/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Battle Simulator</title>
    <link rel="stylesheet" href="./css/battleSim.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Honk&family=Share+Tech&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main">
        <div class="character-enemy-container">
            <div class="characters">
                <img src="./img/Furina.png" alt="Furina" class="character">
                <img src="./img/Skirk.png" alt="Skirk" class="character2">
            </div>
            <div class="game-text">
                <h1>Genshin Impact Battle Simulator</h1>
                <?php
                $characters = [
                    [
                        "name" => "Furina",
                        "hp" => 100,
                        "atk" => 8,
                        "element" => "Hydro"
                    ],
                    [
                        "name" => "Skirk",
                        "hp" => 100,
                        "atk" => 10,
                        "element" => "Cryo"
                    ]
                ];

                $enemy = [
                    "name" => "Ruin Guard",
                    "hp" => 200,
                    "atk" => 10,
                    "status" => ""
                ];

                function attackEnemy(&$enemy, $character, $bonusDmg = 0)
                {
                    $totalDmg = $character["atk"] + $bonusDmg;
                    $enemy["hp"] -= $totalDmg;
                    echo "{$character['name']} dealt $totalDmg {$character['element']} damage to {$enemy['name']}!<br>";
                }

                function enemyAttack(&$characters, $enemy)
                {
                    foreach ($characters as &$char) {
                        $char["hp"] -= $enemy["atk"];
                    }
                    echo "{$enemy['name']} used spin attack and dealt {$enemy['atk']} damage to all characters.<br><br>";
                }

                $turn = 1;
                $hasCryo = false;
                $hasHydro = false;

                while ($enemy["hp"] > 0) {
                    echo "Turn: $turn<br>";

                    foreach ($characters as $char) {
                        echo "{$char['name']} | HP: {$char['hp']} | ATK: {$char['atk']}<br>";
                    }
                    echo "{$enemy['name']} | HP: {$enemy['hp']}<br><br>";

                    attackEnemy($enemy, $characters[0]); // Hydro attack
                    $hasHydro = true;

                    attackEnemy($enemy, $characters[1]); // Cryo attack
                    $hasCryo = true;

                    if ($hasHydro && $hasCryo) {
                        $bonusDmg = 10;
                        attackEnemy($enemy, $characters[1], $bonusDmg);
                        echo "{$enemy['name']} is frozen and can't attack!<br><br>";
                        $hasCryo = $hasHydro = false;
                    } else {
                        enemyAttack($characters, $enemy);
                    }

                    if ($enemy["hp"] <= 0) {
                        echo "You win!<br>";
                    }

                    $turn++;
                }
                ?>
                <br>
                <a href="../../index.php" class="btn-link">Back to Homepage</a>
            </div>

            <div class="enemy">
                <img src="./img/ruinGuard.png" alt="Ruin Guard" class="enemy-img">
            </div>
        </div>
    </div>
</body>

</html>