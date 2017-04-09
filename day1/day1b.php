<?php

$input = 'L5, R1, R3, L4, R3, R1, L3, L2, R3, L5, L1, L2, R5, L1, R5, R1, L4, R1, R3, L4, L1, R2, R5, R3, R1, R1, L1, R1, L1, L2, L1, R2, L5, L188, L4, R1, R4, L3, R47, R1, L1, R77, R5, L2, R1, L2, R4, L5, L1, R3, R187, L4, L3, L3, R2, L3, L5, L4, L4, R1, R5, L4, L3, L3, L3, L2, L5, R1, L2, R5, L3, L4, R4, L5, R3, R4, L2, L1, L4, R1, L3, R1, R3, L2, R1, R4, R5, L3, R5, R3, L3, R4, L2, L5, L1, L1, R3, R1, L4, R3, R3, L2, R5, R4, R1, R3, L4, R3, R3, L2, L4, L5, R1, L4, L5, R4, L2, L1, L3, L3, L5, R3, L4, L3, R5, R4, R2, L4, R2, R3, L3, R4, L1, L3, R2, R1, R5, L4, L5, L5, R4, L5, L2, L4, R4, R4, R1, L3, L2, L4, R3';

//$input = "R8, R4, R4, R8";


$x = 0;
$y = 0;
$heading = 0;
$visited = [];

define('NORTH',0);
define('EAST',1);
define('SOUTH',2);
define('WEST',3);


$steps = explode(', ',$input);


foreach ($steps as $step)
{
    $letter = $step[0];
    $distance = (int) substr($step,1);

    $location = $x . ':' .$y;

    $visited[] = $location;

    if ($letter === 'L')
    {
        $heading --;
    }
    if ($letter === 'R')
    {
        $heading ++;
    }
    if ($heading < 0 )
    {
        $heading += 4;
    }
    else
    {
        $heading %= 4;
    }

    if ($heading === NORTH)
    {
        $y+= $distance;
    }
    elseif ($heading === EAST)
    {
        $x += $distance;
    }
    elseif ($heading === SOUTH)
    {
        $y -= $distance;
    }
    elseif ($heading === WEST)
    {
        $x -= $distance;
    }
}

//echo (abs($x) + abs($y));
if(in_array($location,$visited))
{
   echo 'visited twice';
}
