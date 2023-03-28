<?php

$mhs = array (
    array("Ardika", "222227777", "Denpasar"),
    array("Miya", "3333333", "Malang"),
    array("Kimmy", "44444444", "Surabaya"),
    array("Argus", "22347777", "Denmark"),
);

header("Content-Type: application/json");
echo json_encode($mhs);
