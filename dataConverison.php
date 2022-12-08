<?php
/**
 * Good luck ! :)
 **/

[$diskSize, $diskUnit] = [10, 'MiB'];
[$fileSize, $fileUnit] = [512, 'KiB'];

//fscanf(STDIN, "%f %s", $diskSize, $diskUnit);
//fscanf(STDIN, "%f %s", $fileSize, $fileUnit);

$output = '';

// if same
if ($diskUnit == $fileUnit) {
    echo ($diskSize - $fileSize) . " " . $diskUnit;
    exit;
}

// if
function convToB($size, $unit){
    if ($unit == 'GiB') {
        $size *= 8589934592;
    } else if ($unit == 'MiB') {
        $size *= 8388608;
    } else if ($unit == 'TiB') {
        $size *= 1099511627776;
    }
    return $size;
}

$dsk = convToB($diskSize, $diskUnit);
$fle = convToB($fileSize, $fileUnit);

function convBack($size, $unit){
    if ($unit == 'GiB') {
        $size = $size/ 8589934592;
    } else if ($unit == 'MiB') {
        $size = $size / 8388608;
    } else if ($unit == 'TiB') {
        $size = $size/ 1099511627776;
    }
    return $size;
}

$fin = $dsk - $fle;
echo convBack($fin, $diskUnit) . " " . $diskUnit;