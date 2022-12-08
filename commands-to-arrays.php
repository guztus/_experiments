<?php
$iA = explode(" ", fgets(STDIN));
// for ($i = 0; $i < 10; $i++)
// {
//     $A = intval($inputs[$i]);
// }
// var_dump($inputs);

$iB = explode(" ", fgets(STDIN));
// for ($i = 0; $i < 10; $i++)
// {
//     $B = intval($inputsB[$i]);
// }
// var_dump($inputsB);

fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    $command = stream_get_line(STDIN, 50 + 1, "\n");
    $ex=explode(' ',$command);
    array_shift($ex);
    // var_dump($ex);
    if ($command[0]=='m') {

    }
    if ($command[0]=='r') {

    }
    if ($command[0]=='a') {

    }
    if ($command[0]=='c') {
        foreach($ex as $e) {
            if ((int)$e==$e) {

            } else {
                if ($e=='A') {
                    $iA=[];
                } else {
                    var_dump('yyy');
                    $iA=[];
                }
            }
        }
    }
}
echo implode(' ',$iA) ."\n";
echo implode(' ',$iB) ."\n";
