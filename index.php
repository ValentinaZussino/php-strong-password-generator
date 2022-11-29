<?php
session_start();
// importo functions
include __DIR__ .'/functions/functions.php';
// controllo if lunghezza is set e non vuota per chiamarci dentro funzione
if(isset($_POST['lunghezza']) && !empty($_POST['lunghezza']) && isset($_POST['ripeti'])){
    // $password = pswGen($_POST['lunghezza']);

    $alfabeto = 'abcdefghijklmnopqrstuvwxyz';
    $upperalfabeto = strtoupper($alfabeto);
    $numeri = '0123456789';
    $simboli = '[]()/<>*#!%&?;@-_.';
    $unione = $alfabeto.$upperalfabeto.$numeri.$simboli;
    $password = '';
    $lung = $_POST['lunghezza'];
    $radio = $_POST['ripeti'];
    // while lunghezza$password non è uguale a $lung continua a prelevare da $unione
    while(strlen($password) < $lung){
        if($radio == 'ripeti'){
            $elemento = getElem($unione);
            $password .= $elemento;
        }else{
            $elemento = getElem($unione);
            if(!str_contains($password, $elemento)){
                $password .= $elemento;
            }
        }
    }
    $password = str_shuffle($password);

    $_SESSION['psw'] = $password;
    header('Location: ./results.php');
};
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
    <h1>strong password generator</h1>
    <h2 class="text-white text-center">Genera una password sicura</h2>
        <?php if(isset($_POST['lunghezza'])){
            if(empty($_POST['lunghezza'])){ ?>
            <div class="alert alert-danger w-50 m-auto mt-4">
                <p>Inserisci un numero</p>
            </div>
        <?php } }?>
    <div class="vz_container">
        <form action="index.php" method="POST">
            <div class="d-flex justify-content-between pb-5">
                <label for="">Lunghezza della tua password</label>
                <input type="number" name="lunghezza" placeholder="Inserisci un numero">
            </div>
            <div class="d-flex justify-content-between pb-3">
                <label for="">Consenti ripetizioni di uno o più caratteri</label>
                <div class="d-flex flex-column">
                    <div>
                        <input checked type="radio" name="ripeti" id="ripeti" value="ripeti">
                        <label for="ripeti">sì</label>
                    </div>
                    <div>
                        <input type="radio" name="ripeti" id="non-rip" value="non-rip">
                        <label for="non-rip">no</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-danger">Invia</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>
    
</body>
</html>