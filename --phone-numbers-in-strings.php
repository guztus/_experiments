<?php
//

//Our customer care representatives are available to assist you 24 hours a day, 7 days a week on : 0000000000, 9999999999 and 0777778899
//
//0777778899

$s = stream_get_line(STDIN, 500 + 1, "\n");

// echo $s;

$ss = explode(' ', $s);


foreach($ss as $word) {
    preg_match_all('/[0-9]/', $word, $matches);

    if (sizeof($matches[0]) > 0) {
        $imp []= implode('', $matches[0]);
    }
}

// var_dump($imp);

foreach ($imp as $num) {
    // foreach() {
    //     if substr_count($n ,$num)
    // }

    if ($num[0] == 0 && strlen($num) == 10) {
        echo $num;
    }

}



?>