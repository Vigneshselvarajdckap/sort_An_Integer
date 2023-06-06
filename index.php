<?php

function sortAnInteger($input){
    $assignVAl = $input;
    rsort($input);
    sort($assignVAl );
    print_r($assignVAl );
    print_r($input);
    
}
sortAnInteger([1,3,2,4,7,8,0,9,12,-10,4,3]);