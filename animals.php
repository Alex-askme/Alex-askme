<?php
//Animals: lion, mammoth, monkey, shark


class Animals
{
    public  $legs = 0;
    public $eyes = 2;

    function voice ()
    {
        echo $this->voice . PHP_EOL;
    }
}


class Lion extends Animals
{
    public $voice = 'Lion roars';
    public $legs = 4;
    function livein()
    {
        echo 'I live in Zoo' . PHP_EOL;
    }
}

class Monkey extends Animals
{
    public $voice = 'Monkey screams';
    public $legs = 2;
    function livein()
    {
        echo 'I live in Jungle' . PHP_EOL;
    }
}

class Mammoth extends Animals
{
    public $voice = 'Mammoth mooms';
    public $legs = 4;
    function livein()
    {
        echo 'I live in museum' . PHP_EOL;
    }
}


class Shark extends Animals
{
    public $voice = 'Shark says nothing';
    public $legs = 0;
    function livein()
    {
        echo 'I live in Ocean' . PHP_EOL;
    }
}












$lion = new Lion;
$lion->voice();
$lion->livein();

$monkey = new Monkey;
$monkey->voice();
$monkey->livein();

$mammoth = new Mammoth;
$mammoth->voice();
$mammoth->livein();

$shark = new Shark;
$shark->voice();
$shark->livein();