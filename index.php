<?php
$convert = [[1,2,3,4,5],[7,8] ];
function convertMax($convert) {
    $max = $convert[0][0];
    for($i = 0; $i < count($convert); $i++) {
        for($j=1;$j<count($convert);$j++){
            if ($convert[$i][$j] > $max) {
                $max = $convert[$i][$j];
            }
        }

    }
    return $max;
}
echo convertMax($convert)
?>