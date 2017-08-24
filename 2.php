<?php
abstract class Toy {
    public $name = '';
    public $price = 0;
    public function prepare(){
        echo $this-> name.'is prepared';
    }
    
    public function package(){
        echo $this-> name.'is packaged';
    }
    
    public function label() {
        echo $this->name.'is price at '. $this->price;
    }
    
}

class ToysFactory{
    public $simpleFactory;
    
    public function __construct(SimpleFactory $simpleFactory) {
        $this->simpleFactory = $simpleFactory;
    }
    
    public function produceToy($toyName){
        $toy = null;
         $toy = $this->simpleFactory->createToy($toyName);
         $toy->prepare();
         $toy->package();
         $toy->label();
         return $toy;
    }
}

class Car extends Toy{
    public $name='Carro';
    public $price = 2000;
}

class Helicopter extends Toy{
    public $name='Helicoptero';
    public $price = 3000;
}

class simpleFactory {
    public function crateToy($toyName) {
        $toy =null;
        if ('car' == $toyName) {
            $toy = new Car();
        } else if ('helicopter' == $toyName) {
            $toy = new Helicopter();
        }
        return $toy;
    }
            
}
?>