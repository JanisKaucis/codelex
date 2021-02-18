<?php

function numbers(): void{
    for ($i=0;$i<10;$i++){
        echo $i.' ';
    }
   echo PHP_EOL;
}

function names(){
    $nameArray = ['Janis','Peteris','Dainis','Marta'];
    foreach ($nameArray as $value){
        echo 'My name is '.$value.PHP_EOL;
    }
}