<?php

require 'DayClock.php';

$clock = new DayClock('Il est {time}');

$clock->days([
    1 => 'Lundi',
    2 => 'Mardi',
    3 => 'Mercredi',
    4 => 'Jeudi',
    5 => 'Vendredi',
    6 => 'Samedi',
    7 => 'Dimanche',
]);

$clock->at([
    '00:00' => '{d} pile !',
    '01:00' => '{d} pile pass�',
    '05:00' => 'bient�t {d} et quart',
    '06:00' => '{d} et quart',
    '07:00' => '{d} et quart pass�',
    '11:00' => 'bient�t {d} et demi',
    '12:00' => '{d} et demi',
    '13:00' => '{d} et demi pass�',
    '17:00' => 'bient�t {d+1} moins le quart',
    '18:00' => '{d+1} moins le quart',
    '19:00' => '{d+1} moins le quart pass�',
    '23:00' => 'bient�t {d+1}',
]);

echo $clock->time();