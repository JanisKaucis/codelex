<?php

$persons = new stdClass();
$persons->name = 'Janis';
$persons->handGunLicense = 'a';
$persons->RifleLicense = 'b';
$persons->shotgunLicense = 'c';
$persons->cash = 10000;

$guns = [[
    'license' => 'a',
    'price' => 1000,
    'name' => 'revolver'
],[
    'license' => 'b',
    'price' => 15000,
    'name' => 'ak 47'
    ],[
    'license' => 'c',
    'price' => 5000,
    'name' => 'winchester'
]];

$licenses = array_column($guns, 'license');

    if (in_array($persons->handGunLicense, $licenses) &&
        $persons->cash >= 1000){
        echo 'You can buy handgun';
    } else {
        echo 'You cannot buy handgun';
    }

if (in_array($persons->RifleLicense, $licenses) &&
    $persons->cash >= 15000){
    echo 'You can buy rifle';
} else {
    echo 'You cannot buy rifle';
}

if (in_array($persons->shotgunLicense, $licenses) &&
    $persons->cash >= 5000){
    echo 'You can buy shotgun';
} else {
    echo 'You cannot buy shotgun';
}