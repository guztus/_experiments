<?php

// YOINK if there is what we want
// YEET if there is not what we want

$wishlist = 'TV, Sofa, Chair, Monitor,';
$exploded = explode(', ', $wishlist);

$item = 'Sofa';

if (in_array($item, $exploded)) {
    echo "YOINK\n";
} else {
    echo "YEET\n";
}
