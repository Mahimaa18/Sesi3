<?php
    //MODEL1
    //$age = array("Peter"=>"35","Joe"=>"43","Ben"=>"29");
    
    //model2
    $age["AGUS"] ="35";
    $age["LAYLA"] ="20";
    $age["KIMMY"] ="12";
    $age["MIYA"] ="18";

    header("Content-Type: application/json");
    echo json_encode($age);
