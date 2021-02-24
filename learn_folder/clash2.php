<?php
$word = 'Bingo';

for ($i = 0; $i <= strlen($word); $i++) {
    echo substr_replace($word, '*', strlen($word) - $i) . str_repeat("*", $i) . "\n";
}
?>