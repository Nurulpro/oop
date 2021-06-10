
<?php


class Person{

  
    public $name= "Nurul Islam";
    public $age;

    public function PersonName(){
      echo "person name is:".$this->name."<br>";
    }

    public function PersonAge($agvalu){
        echo"Person age is:".$this->age=$agvalu;

    }
}

$PersonOne = new Person;
// echo $PersonOne->name; 
$PersonOne->name="Ariful Islam";
$PersonOne->PersonName();
$PersonOne->PersonAge("40");



?>