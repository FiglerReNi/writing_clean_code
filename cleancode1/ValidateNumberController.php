<?php
include 'ValidatableNumber.php';

$inputNumber = new ValidatableNumber(31);
var_dump($inputNumber->isBiggerThan(15));
var_dump($inputNumber->isBiggerThan(32));