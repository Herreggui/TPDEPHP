<?php function calculerTTc(float $ht, float $tva):float {
    $ttc = $ht + ($ht * $tva);
    return $ttc;
}
echo calculerTTc(13.8, 20.0);