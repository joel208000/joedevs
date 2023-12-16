<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .button-container {
            display: flex;
        }

        .button {
            margin: 0 10px;
            padding: 10px 20px;
            background-color:  #4375b6;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none; /* Supprime le soulignement du lien */
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
    <title>Flex Buttons with Links</title>
</head>
<body>
    <div class="button-container">
        <a href="ad.php" class="button">Ajouts images de gain</a>
        <a href="donn.php" class="button">voir clients </a>
    </div>
</body>
</html>
