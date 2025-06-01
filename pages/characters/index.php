<?php
define('BASE_URL', '/AD-Task-2');
define('BASE_PATH', realpath(__DIR__ . '/../../'));
include BASE_PATH . '/components/templates/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Characters</title>
    <link rel="stylesheet" href="./css/chara.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Honk&family=Share+Tech&display=swap" rel="stylesheet">
</head>

<body>
    <?php

    $characters = [
        [
            "name" => "Furina",
            "image" => "./img/Furina.png",
            "description" => "Furina de Fontaine is  the flamboyant and overconfident Hydro Archon, Furina's theatrics are eventually revealed to be a public persona, which she later discards in favor of living a relatively humbler life as an actress and artistic consultant.",
            "stats" => [
                "HP" => 100,
                "Attack" => 8,
                "Element" => "Hydro"
            ]
        ],
        [
            "name" => "Skirk",
            "image" => "./img/Skirk.png",
            "description" => "Skirk is a mysterious swordswoman who was Tartaglia's master during his time in the Abyss and is the disciple of Surtalogi.",
            "stats" => [
                "HP" => 100,
                "Attack" => 10,
                "Element" => "Cryo"
            ]
        ],
    ];
    ?>

    <h1>Characters</h1>
    <div class="characters-container">
        <?php foreach ($characters as $char): ?>
            <section class="character-section">
                <img src="<?php echo htmlspecialchars($char['image']); ?>" alt="<?php echo htmlspecialchars($char['name']); ?>" class="character-img" />
                <h2 class="character-name"><?php echo htmlspecialchars($char['name']); ?></h2>
                <p class="character-desc"><?php echo htmlspecialchars($char['description']); ?></p>
                <p class="character-stats">
                    HP: <?php echo htmlspecialchars($char['stats']['HP']); ?> |
                    Attack: <?php echo htmlspecialchars($char['stats']['Attack']); ?> |
                    Element: <?php echo htmlspecialchars($char['stats']['Element']); ?>
                </p>
            </section>
        <?php endforeach; ?>
    </div>

    <a href="<?php echo BASE_URL; ?>../../index.php" class="btn-link">Back to Homepage</a>

</body>

</html>