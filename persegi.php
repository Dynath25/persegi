<?php

$sisi4 = 7;

// keliling persegi

function keliling($sisi_keempatnya)
{
    // kll=s+s+s+s
    // $hasil = ($sisi_keempatnya + $sisi_keempatnya + $sisi_keempatnya + $sisi_keempatnya);
    // return $hasil;

    // atau kll=4s(keduanya bisa)
    $hasil = 4 * ($sisi_keempatnya);
    return $hasil;
}

$fungsi_keliling = keliling($sisi4);

echo "keliling dari persegi dengan 4 sisi berukuran $sisi4 cm = $fungsi_keliling <br>";

function luas($sisi_keempatnya)
{
    // luas = s * s
    // $hasil = ($sisi_keempatnya * $sisi_keempatnya);
    // return $hasil;

    // atau luas = s ** 2(sama aja)
    $hasil = ($sisi_keempatnya ** 2);
    return $hasil;
}

$fungsi_luas = luas($sisi4);

echo "luas dari persegi dengan 4 sisi berukuran $sisi4 cm = $fungsi_luas";