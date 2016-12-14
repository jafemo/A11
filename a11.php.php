
<?php
class jugadorDado{

//Ponemos los atributos privados
private $minNumDado=0;
private $maxNumDado=0;

//y ahora el publico que será el de tirar el dado
public $tirarDado=0;

//getters

public function getMinNumDado(){
    return $this->minNumDado;
  }
public function getMaxNumDado(){
    return $this->maxNumDado;
  }

//setters

public function setMinNumDado($minNumDado){
    if($minNumDado<0 ){
      $this->minNumDado = 0;
    }
    else{
      $this->minNumDado = $minNumDado;
    }
  }

public function setMaxNumDado($maxNumDado){
    if($maxNumDado>12 ){
      $this->maxNumDado = 12;
    }
    else{
      $this->maxNumDado = $maxNumDado;
    }
  }

  //funcion random

  public function randompos(){
   $this->tirarDado = rand($this->minNumDado,$this->maxNumDado);
   return $this->tirarDado;
  }
}

?>
