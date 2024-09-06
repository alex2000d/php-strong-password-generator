<?php
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

?>