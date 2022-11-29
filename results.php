<?php
session_start();
$psw = $_SESSION['psw'];
// echo "<p>La tua password è: {$_SESSION['psw']}</p>";
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
    <title>La tua Password</title>
</head>
<body>
    <div class="vz_container text-center p-5">
        <span>La tua password è:</span>
        <p class="fw-bold fs-3 my-5"><?php echo $psw ?></p>
        <div class="back-btn"><a href="./index.php">Genera una nuova password</a></div>
    </div>
</body>
</html>