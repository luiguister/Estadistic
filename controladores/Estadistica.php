<?php
class Estadistica {
    private $serie_numeros  =array();
    public function __construct($serie) {
        $this->serie_numeros    =$serie;
    }
    public function promedio() {
        
        $suma   =0;
        for ($i = 0; $i < count($this->serie_numeros); $i++) {
            $suma   += $this->serie_numeros[$i];
            //$suma   = $suma + $this->serie_numeros[$i];
        }
        if(count($this->serie_numeros)==0){
            return NULL;
        }
        $prom   =$suma/count($this->serie_numeros);
        return $prom;
    }
    
    public function mayor() {
        if(count($this->serie_numeros)==0)
            return null;
        $m  =  $this->serie_numeros[0];
        for ($i = 1; $i < count($this->serie_numeros); $i++) {
            if($this->serie_numeros[$i] > $m){
                $m  =$this->serie_numeros[$i];
            }
        }
        return $m;
    }
    public function menor() {
        if(count($this->serie_numeros)==0)
            return null;
        $m  =  $this->serie_numeros[0];
        for ($i = 1; $i < count($this->serie_numeros); $i++) {
            if($this->serie_numeros[$i] < $m){
                $m  =$this->serie_numeros[$i];
            }
        }
        return $m;
    }
}