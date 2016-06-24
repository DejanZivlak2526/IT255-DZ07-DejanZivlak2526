<?php
$a = $_POST['a'];

function povrsina($a) {
    $povrsina=0;
    $povrsina = $a * $a * 3.14;
    return $povrsina;
}

header("Content-type: application/json");
$test_array = array ('povrsina kruga je: ' => povrsina($a),);
echo json_encode($test_array);
?>