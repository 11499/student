<?php
class Fruit {
  public $name;
  public $color;
  function __construct($name) {
    $this->name = $name;
  }
  function __destruct() {
    echo "The fruit is {$this->name}.";
  }
}
$apple = new Fruit("Apple");
?>
<?php
class Fruits {
  public $name;
  protected $color;
  private $weight;
}
$mango = new Fruits();
$mango->name = 'Mango'; 
//$mango->color = 'Yellow';
//$mango->weight = '300'; 
?>
