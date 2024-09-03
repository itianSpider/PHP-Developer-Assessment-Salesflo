<?php 


// there are two possibilities for sorting ASC small to greater and DESC Greater to small  
    $studentArray = array (

        "student-1" => array(
            "id"   => 1,
            "name" => 'James',
            "age"  => 22
        ),
        "student-2" => array(
            "id"   => 2,
            "name" => 'Williams',
            "age"  => 26
        ),
        "student-3" => array(
            "id"   => 3,
            "name" => 'Henry',
            "age"  => 18
        ),
        "student-4" => array(
            "id"   => 4,
            "name" => 'Isabella',
            "age"  => 25
        ),
        "student-5" => array(
            "id"   => 5,
            "name" => 'Alexander',
            "age"  => 19
        )
    );

    $keys = array_keys($studentArray);

    $length = count($studentArray);

    //for ASC

    for ($i = 0; $i < $length - 1; $i++) {
        foreach ($studentArray as $key => $value) {
            $nextKey = array_keys($studentArray)[$i + 1];
            if ($studentArray[$key]["age"] > $studentArray[$nextKey]["age"]) {
                $temp = $studentArray[$key];
                $studentArray[$key] = $studentArray[$nextKey];
                $studentArray[$nextKey] = $temp;
            }
        }
    }


    //For DESC

    // for ($i = 0; $i < $length - 1; $i++) {
    //     foreach ($studentArray as $key => $value) {
    //         $nextKey = array_keys($studentArray)[$i + 1];
    //         if ($studentArray[$key]["age"] < $studentArray[$nextKey]["age"]) {
    //             $temp = $studentArray[$key];
    //             $studentArray[$key] = $studentArray[$nextKey];
    //             $studentArray[$nextKey] = $temp;
    //         }
    //     }
    // }
    

    echo "<pre>";
    print_r($studentArray);
?>