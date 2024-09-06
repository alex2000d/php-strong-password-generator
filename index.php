<?php
       include 'function.php';

     if (isset($_GET["lunghezza_password"])){
          // creo una variabile che chiamo lunghezza
        $lunghezza = $_GET["lunghezza_password"];
        $miaPassword = createdPassword($lunghezza);
         
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Password generator</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 gy-3">
                    <h1 class="text-center">Password Generator</h1>
                </div>
                <div class="col-12">
                  <form action="./index.php" method="GET">
                      <div class="form-group mt-5">
                                <div class="control-label">lunghezza password</div>
                                <input type="number" class="form-control" name="lunghezza_password" placeholder="inserisci la lunghezza">
                            </div>
                      </div>
                      <div class="col-12">
                            <button type="submit" class="btn btn-primary mt-5">invia</button>
                      </div>
                      <div class="mt-5 text-primary"><?php echo "la tua Password è: $miaPassword"?></div>
                 </div>
             </div>
          </div>
      </main>
  </body>
</html>