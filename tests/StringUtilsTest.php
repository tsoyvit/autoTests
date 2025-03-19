<?php
/*
Нажмите кнопку run чтобы запустить тесты.
Попробуйте изменять код функции / тестов, запуская проверки заново.
*/

require __DIR__ . '/../src/StringUtils.php';

if (App\capitalize('hello') !== 'Hello') {
    throw new \Exception('Функция работает неверно!');
}

if (App\capitalize('') !== '') {
    throw new \Exception('Функция работает неверно!');
}

echo 'Все тесты пройдены!';