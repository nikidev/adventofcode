<?php
/**
 * Created by PhpStorm.
 * User: nikolay
 * Date: 17.12.2016 г.
 * Time: 20:34
 */

$input = 'L5, R1, R3, L4, R3, R1, L3, L2, R3, L5, L1, L2, R5, L1, R5, R1, L4, R1, R3, L4, L1, R2, R5, R3, R1, R1, L1, R1, L1, L2, L1, R2, L5, L188, L4, R1, R4, L3, R47, R1, L1, R77, R5, L2, R1, L2, R4, L5, L1, R3, R187, L4, L3, L3, R2, L3, L5, L4, L4, R1, R5, L4, L3, L3, L3, L2, L5, R1, L2, R5, L3, L4, R4, L5, R3, R4, L2, L1, L4, R1, L3, R1, R3, L2, R1, R4, R5, L3, R5, R3, L3, R4, L2, L5, L1, L1, R3, R1, L4, R3, R3, L2, R5, R4, R1, R3, L4, R3, R3, L2, L4, L5, R1, L4, L5, R4, L2, L1, L3, L3, L5, R3, L4, L3, R5, R4, R2, L4, R2, R3, L3, R4, L1, L3, R2, R1, R5, L4, L5, L5, R4, L5, L2, L4, R4, R4, R1, L3, L2, L4, R3';

$x = 0;
$y = 0;
$heading = 0;

$steps = explode(', ',$input);

foreach ($steps as $step)
{
    $letter = $step[0];
    $distance = (int) substr($step,1);

//    var_dump($heading);

    if ($letter === 'L')
    {
        $heading -= 1;
    }
    if ($letter === 'R')
    {
        $heading += 1;
    }
    if ($heading < 0 )
    {
        $heading += 4;
    }
    else
    {
        $heading %= 4;
    }

    if ($heading === 0)
    {
        $y+= $distance;
    }
    elseif ($heading === 1)
    {
        $x += $distance;
    }
    elseif ($heading === 2)
    {
        $y -= $distance;
    }
    elseif ($heading === 3)
    {
        $x -= $distance;
    }
}

echo (abs($x) + abs($y));
