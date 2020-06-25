<?php
    header('Content-type: text/plain; charset=utf-8' );
    header('Access-Control-Allow-Origin: *'); 
    // Попов Никита
    //$today = date("r");
    //echo $today;
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $op = $_POST["op"];
    if ($op == 'add') {
        $r = $n1." + ".$n2." = ".($n1 + $n2);
    } elseif ($op == 'substract') {
        $r = $n1." - ".$n2." = ".($n1 - $n2);
    } elseif ($op == 'multiply') {
        $r = $n1." * ".$n2." = ".($n1 * $n2);
    } elseif ($op == 'divide') {
        $r = $n1." / ".$n2." = ".($n1 / $n2);
    } elseif ($op == 'exponentiate') {
        $r = $n1." ** ".$n2." = ".($n1 ** $n2);
    }
    echo $r;
?>
