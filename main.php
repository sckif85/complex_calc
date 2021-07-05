<?php

const STRING_COMPLEX_Z1 = '10-10i';
const STRING_COMPLEX_Z2 = '4+2i';

spl_autoload_register(function ($class_name) {
    include $class_name . ".php";
});

try {
    $complexZ1 = Complex::createByString(STRING_COMPLEX_Z1);
    $complexZ2 = Complex::createByString(STRING_COMPLEX_Z2);
} catch (Exception $e) {
    print_r($e->getMessage());
    die();
}

$calculator = new Calculator();

echo 'ADD = ' . $calculator->add($complexZ1, $complexZ2) . "\n";
echo 'SUB = ' . $calculator->sub($complexZ1, $complexZ2) . "\n";
echo 'MUL = ' . $calculator->mul($complexZ1, $complexZ2) . "\n";
echo 'DIV = ' . $calculator->div($complexZ1, $complexZ2) . "\n";