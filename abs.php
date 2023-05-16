<?php
abstract class car{
    public $name;
    public function __construct($name){
        $this->$name=$name;
    }
   abstract public function intro();
}
class audi extends car{
    public function intro(){
        return "$this->name";
    }
}
$audi=new audi("audi");
echo $audi->intro();

?>