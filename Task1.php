<?php 
    function isSpecialArray($array){
        if(!is_array($array)){
            return "Please provide an array";
        }

        foreach($array as $index => $value){
            //check if the index is even 
            if($index % 2 === 0){
                //check value is not even 
                if($value % 2 !== 0){
                    return false;
                }
            }else{
                //now index is odd check value is also odd
                if($value % 2 == 0){
                    return false;
                }
            }
        }
        return true;
    }

    var_dump(isSpecialArray([2, 7, 4, 3, 4, 1, 6, 3])); // bool(true)
    var_dump(isSpecialArray([2, 7, 9, 1, 6, 1, 6, 3])); // bool(false)

?>