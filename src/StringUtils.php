<?php

namespace App;

function capitalize($text): string
{
    if ($text === '') {
        return '';
    }
    $firstSymbol = strtoupper($text[0]);
    $restSubstring = substr($text, 1);
    return "{$firstSymbol}{$restSubstring}";
};