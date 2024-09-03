<?php 

    function numSplit($num){
        //if the number is 0 return as it is 
        if($num == 0){
            return [$num];
        }
        //convert the number into string and find the length
        $number = (string) abs($num);
        $length = strlen($number);
        $placeValues = [];

        //number is 109 and length is 3 
        for($i = 0; $i < $length; $i++){
            $value = (int) $number[$i] * pow(10,$length - $i - 1);
            //0 index will have number 1 x 10 pow total lengh =3 - current idex 0 and -1 it will be  1 x 100 = 100 (this will be done for all)
            if($value < 0){
                $value = -$value;
            }
            $placeValues[] = $value;
        }
        return $placeValues;
    }


    print_r(numSplit(109));


?>