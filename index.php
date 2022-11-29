<?php
session_start();
// importo functions
include __DIR__ .'/functions/functions.php';
// controllo if lunghezza is set e non vuota per chiamarci dentro funzione
if(isset($_GET['lunghezza']) && !empty($_GET['lunghezza'])){
    $password = pswGen($_GET['lunghezza']);
    $_SESSION['psw'] = $password;
    header('Location: ./results.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Password Generator</title>
</head>
<body>
    <form action="index.php" method="GET">
        <label for="">Imposta un numero per la lunghezza della tua password</label>
        <input type="number" name="lunghezza" placeholder="Inserisci un numero">
        <button type="submit">Invia</button>
    </form>
</body>
</html>