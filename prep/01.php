<?php
//declare(strict_types=1);
// deklare strict types

function isUnderAge(stdClass $person): bool
{
    return $person->age < 18;
}

function addCodelex(string $text): string
{
    return $text . ' codelex';
}

echo addCodelex('Hello');