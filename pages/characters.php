<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/chara.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Honk&family=Share+Tech&display=swap" rel="stylesheet">
    <title>AD-Task-2</title>
</head>

<body>
    <?php define('BASE_URL', '/AD-Task-2'); ?>
    <?php include '../header.php'; ?>
    <h1>Characters</h1>
    <?php
    $characters = [
        [
            "name" => "Furina",
            "image" => "../img/Furina.png",
            "description" => "A skilled Hydro character with powerful water abilities.",
            "stats" => [
                "HP" => 100,
                "Attack" => 8,
                "Element" => "Hydro"
            ]
        ],
        [
            "name" => "Skirk",
            "image" => "../img/Skirk.png",
            "description" => "A Cryo expert with ice powers that freeze enemies.",
            "stats" => [
                "HP" => 100,
                "Attack" => 10,
                "Element" => "Cryo"
            ]
        ],
    ];

    foreach ($characters as $char): ?>
        <section class="character-section">
            <img src="<?php echo $char['image']; ?>" alt="<?php echo $char['name']; ?>" class="character-img" />
            <div class="character-info">
                <h2 class="character-name"><?php echo $char['name']; ?></h2>
                <p class="character-desc"><?php echo $char['description']; ?></p>
                <p class="character-stats">
                    HP: <?php echo $char['stats']['HP']; ?> |
                    Attack: <?php echo $char['stats']['Attack']; ?> |
                    Element: <?php echo $char['stats']['Element']; ?>
                </p>
            </div>
        </section>
    <?php endforeach; ?>

    <a href="../index.php" class="btn-link">Back to Homepage</a>
</body>

</html>