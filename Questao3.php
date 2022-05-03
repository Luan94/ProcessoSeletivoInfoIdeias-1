    <?php
    
    $unique = [];
    $numberArray = [];

        for ($i = 0; $i <= 20; $i++) {           
            array_push($numberArray, rand(1,10));    
        } //endFor

    echo "Array sorteado: ";
    print_r($numberArray);
    $repeating = array_unique($numberArray); 

        for ($i = 0; $i < count($numberArray); $i++) {            
            if (!in_array($numberArray[$i], $repeating))
            {
                $unique[] = $numberArray[$i];
            }  //endIF        
        } //endFor     

    echo "Os números que não se repetem são: ";
    print_r($unique);
?>