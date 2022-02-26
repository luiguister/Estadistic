<?php
class Estadistica{
    static private $serie_numeros  =array();
    static public function asignar($serie) {
        Estadistica::$serie_numeros =$serie;        
    }
    static public function promedio() {
        $n      =count(Estadistica::$serie_numeros);
        $suma   =0;
        for ($i = 0; $i < $n; $i++) {
            $suma   += Estadistica::$serie_numeros[$i];
            //$suma   = $suma + $this->serie_numeros[$i];
        }
        if($n==0){
            return NULL;
        }
        $prom   =$suma/$n;
        return $prom;
    }
    
    static public function mayor() {
        $n  =count(Estadistica::$serie_numeros);
        if($n==0)
            return null;
        $m  =  Estadistica::$serie_numeros[0];
        for ($i = 1; $i < $n; $i++) {
            if(Estadistica::$serie_numeros[$i] > $m){
                $m  =Estadistica::$serie_numeros[$i];
            }
        }
        return $m;
    }    
    static public function menor() {
        $n  =count(Estadistica::$serie_numeros);
        if($n==0)
            return null;
        $m  =  Estadistica::$serie_numeros[0];
        for ($i = 1; $i < $n; $i++) {
            if(Estadistica::$serie_numeros[$i] < $m){
                $m  =Estadistica::$serie_numeros[$i];
            }
        }
        return $m;
    }    
    static public function moda() {
        $arr_moda   =array();
        $arr_org    =Estadistica::$serie_numeros;
        foreach ($arr_org as $valor) {
            if(!isset($arr_moda[$valor])){
                $arr_moda[$valor]   =1;
            }else{
//                $arr_moda[$valor]   +=1;
                $arr_moda[$valor]++;
            }
        }        
        $moda   =  Estadistica::mayor_v2($arr_moda);
        return $moda;
    }
    static public function mayor_v2($datos) {
        $n  =count($datos);
        if($n==0)
            return null;
        $m  =  NULL;
        foreach ($datos as $indice => $valor) {
            if(is_null($m)){
                $m  =$indice;
            }
            if($datos[$indice]>$datos[$m]){
                $m  =$indice;
            }
        }
        return $m;
    }
}