<?php

function PRIMOS($n1,$n2)
    {
        $numberArray = [];
        function IsPrimo($n)
            {
                for($x=2; $x<$n; $x++)
                    {
                        if($n %$x ==0)
                            {
                                $primo=false;
                            return $primo;
                            }
                    }
                $primo=true;
                return $primo;
            };

            for ($i = $n1; $i <= $n2; $i++) {

            //Array Push
            if (isPrimo($i) == true)
            {
                array_push($numberArray, $i);
            }

        } //endFor
    print_r($numberArray);
};

PRIMOS(1,10);
?>