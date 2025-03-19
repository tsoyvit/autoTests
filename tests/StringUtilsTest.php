<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/StringUtils.php';

use Webmozart\Assert\Assert;



//if (App\capitalize('hello') !== 'Hello') {
//    throw new \Exception('Функция работает неверно!');
//}

//if (App\capitalize('') !== '') {
//    throw new \Exception('Функция работает неверно!');
//}


Assert::eq(App\capitalize(''), '');
Assert::eq(App\capitalize('hello'), 'Hello');


echo 'Все тесты пройдены!';