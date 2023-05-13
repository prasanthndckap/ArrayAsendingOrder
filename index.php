<?php

$input = [1,4,6,10];
$arrayvalues = [];
for ($i = 0; $i < count($input) -1; $i++) {

    if ($input[$i] < $input[$i + 1]) {
        $add = $input[$i];
        $input[$i] = $input[$i + 1];
        $input[$i + 1] = $add;
        $arrayvalues[] = $input;
      print_r($arrayvalues);
    }
    
}

//  for($i=0;$i)

// for ($i=0;$i<count($input)-1; $i++){

// if($input[$i]>$input[$i]){
 
//     array_push($arrayvalues,$input[$i]);
//     print_r($arrayvalues);
// };
// }