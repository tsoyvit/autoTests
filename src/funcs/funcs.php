<?php

function debug($data): void
{
    echo '<pre>' . print_r($data, true) . '</pre>';
}