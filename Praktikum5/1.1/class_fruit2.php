<?php
class Fruit  {
    public $name;
    protected $color;
    private $weight;

    public function set_color($c) {
        return $this->color = $c;
    }
    public function set_weight($w) {
        return $this->weight = $w;
    }
}

$mango = new Fruit();
echo $mango->name = 'Mango';
echo '<br/>';
echo $mango-> set_color('Yellow');
echo '<br/>';
echo $mango-> set_weight('300');