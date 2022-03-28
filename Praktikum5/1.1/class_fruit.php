<?php
class Fruit  {
    public $name;
    protected $color;
    private $weight;
}

$mango = new Fruit();
echo $mango->name = 'Mango';
echo '<br/>';
echo $mango->color = 'Yellow';
echo '<br/>';
echo $mango->weight = '300';
?>