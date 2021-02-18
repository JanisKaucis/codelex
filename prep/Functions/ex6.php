<?php

$values = [1,2,3,1.21,'Dog'];
for ($i = 0;$i<count($values);$i++)
{
    if (is_numeric($values[$i])){
        echo ($values[$i]*2).PHP_EOL;
    }
}