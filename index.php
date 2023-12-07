<?php
include("FizzBuzz.php");
function testFizz() : bool {
    return (ReturnNumberAsString(3) == "Fizz");
}
function testBuzz() : bool {
    return (ReturnNumberAsString(5) == "Buzz");
}

function testNormalNumber() : bool {
    return (ReturnNumberAsString(7) == "7");
}

function testFizzBuzz() : bool {
    return (ReturnNumberAsString(15) == "FizzBuzz");
}

echo testFizz();
echo testBuzz();
echo testNormalNumber();
echo testFizzBuzz();