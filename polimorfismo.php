<?php

abstract class Animal{
    public function falar(){
        return "Som";
    }
    public function mover(){
        return "Andar";
    }
}

class Cachorro extends Animal{
    public function falar(){
        return"late";
    }
}
class Gato extends Animal{
    public function falar(){
        return "Mia";
    }
}
 class Passaro extends Animal{
     public function falar(){
         return "Canta";
     }
     public function mover(){
         return "Voa e ".parent::mover();
     }
 }

 $plutos= new Cachorro();
 echo $plutos->falar()."<br>";
 echo $plutos->mover()."<br>";
 $garfield= new Gato();
 echo $garfield->falar()."<br>";
 echo $garfield->mover()."<br>";
 $picapau=new Passaro();
 echo $picapau->mover()."<br>";
 echo $picapau->falar()."<br>";
?>