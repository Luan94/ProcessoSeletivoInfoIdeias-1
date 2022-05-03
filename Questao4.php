<?php

function SEQUENCIACRESCENTE()
{

    $arrayOriginal = func_get_args();
    $sorted = array_values($arrayOriginal);
    sort($sorted);

    if ( $arrayOriginal === $sorted ) {
        // array foi organizado
      }

      $primeiro = 0;
      $segundo = 0;
      $count = 0;

      for ($i = 1; $i < count($arrayOriginal); $i++) {
        if ($arrayOriginal[i] < $arrayOriginal[i - 1]) {
            $count++;

            if ($primeiro == 0)

            {
                $primeiro = i;
            }

            else {
                $segundo = $i;
            }
                
        }

        if ($count > 2)
        return false;

        if($count == 0);
        return true;

        if ($count == 2){
            ($arrayOriginal[$primeiro - 1], $arrayOriginal[$segundo]) = ($arrayOriginal[$segundo], $arrayOriginal[$primeiro - 1]);
        }

        else if (count == 1){
            ($arrayOriginal[$primeiro - 1], $arrayOriginal[$primeiro]) = ($arrayOriginalarr[$primeiro], $arrayOriginal[$segundo - 1]);
        }

        for ( $i = 1; $i < count($arrayOriginal); $i++){
            if ($arrayOriginal[$i] < $arrayOriginal[$i - 1])
            return false;
        }
 
        return true;
    }

    print_r($sorted);
 
};

SEQUENCIACRESCENTE(1,3,2,1);

?>