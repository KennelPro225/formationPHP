
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="cookie.php" method="post">
        <div class="center">
            <?php
            if (isset($_COOKIE['nom'])) {
                echo 'Bonjour ' . $_COOKIE['nom'];
            }
            ?>
        </div>
        <div class="center">
            <label for="identifiant">Identifiant</label>
        </div>
        <div class="center">
            <input type="text" name="identifiant">
        </div>
        <div class="center">
            <label for="password">Mot de Passe</label>
        </div>
        <div class="center">
            <input type="text" name="password">
        </div>
        <div class="center">
            <input type="submit">
        </div>
    </form>

    
</body>
</html>
