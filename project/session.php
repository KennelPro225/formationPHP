<?php
$identifiant = "Kennel225";
$password = "password123";
if ($_POST['password'] == $password && $_POST['identifiant'] == $identifiant) {
    session_start();

    $_SESSION['identifiant']=$_POST['identifiant'];
    $_SESSION['password'] = $_POST['password'];
    echo 'Vous êtes bien connectés '. $_SESSION['identifiant'];

} else {
    echo 'Les informations entrées ne sont pas corrects veuillez les modifier et réessayer';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="option.php">Voir Plus</a>
</body>
</html>