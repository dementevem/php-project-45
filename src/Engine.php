<?php

namespace BrainGames\Engine;

require_once __DIR__ . '/../vendor/autoload.php';

use function cli\line;
use function cli\prompt;

function greeting() 
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
};

function questions($nameGame)
{
if ($nameGame == 'BrainEven') {
    $randomNumber = mt_rand(1, 20);
    print_r("Question: {$randomNumber}\n");
    $isEven = $randomNumber % 2;
    return $isEven;
} elseif ($nameGame == 'BrainCalc') {
    $randomNumberOne = mt_rand(1, 10);
    $randomNumberTwo = mt_rand(1, 10);
    $operations = ["+", "-", "*"];
    $randomOperationKey = array_rand($operations, 1);
    $randomOperation = $operations[$randomOperationKey];
    if ($randomOperation == "+") {
        $answerProg = $randomNumberOne + $randomNumberTwo;
        } elseif ($randomOperation == "-") {
        $answerProg = $randomNumberOne - $randomNumberTwo;
        } else {
        $answerProg = $randomNumberOne * $randomNumberTwo;
     };    
    print_r("Question: {$randomNumberOne} {$randomOperation} {$randomNumberTwo}\n");
    return $answerProg;
}
};

function comparison($isEven, $answerUser, $i, $name)
{
if (($answerUser == 'yes') && ($isEven == 0)) {
    print_r("Correct!\n");
    return $i = $i + 1;
    } elseif (($answerUser == 'yes') && ($isEven != 0)) {
    print_r("'yes' is wrong answer ;(. Correct answer was 'no'.\nLet's try again, {$name}!\n");
    return $i=4;
    } elseif (($answerUser == 'no') && ($isEven != 0)) {
    print_r("Correct!\n");
    return $i = $i +1;
    } elseif (($answerUser == 'no') && ($isEven == 0)) {
    print_r("'no' is wrong answer ;(. Correct answer was 'yes'.\nLet's try again, {$name}!\n");
    return $i=4;
    } elseif (($answerUser != 'no') || ($isEven != 'yes' )) {
    print_r("'{$answerUser}' is wrong answer ;(.\nLet's try again, {$name}!\n");
    return $i=4;
    }
}

