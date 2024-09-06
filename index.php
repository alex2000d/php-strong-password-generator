<?php
     if (isset($_GET["lunghezza_password"])){
          // creo una variabile che chiamo lunghezza
        $lunghezza = $_GET["lunghezza_password"];

          // creo la mia funzione per generare la password randomicamente
           function createdPassword($lunghezza){
            // creo la variabile che contiene la stringa con i caratteri
             $caratteri ="abcdefghilmnopqrstuvzABCDEFGHILMNOPQRSTUVZ123456789?!&/%";
              $password = "";
            //   creo un for per ciclare i miei caratteri randomicamente
               for ($i = 0; $i < $lunghezza; $i++){
                // creo una variabile per la selezione random della lunghezza della mia stringa meno 1
                 $selection = rand(0,strlen($caratteri) -1);
                //  concateno tutto qui
                 $password .= $caratteri[$selection];

               }
               // restituisco il risultato
                 return $password;
                 echo $password;
           }
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
                      <div><?php echo $password?></div>
                 </div>
             </div>
          </div>
      </main>
  </body>
</html>