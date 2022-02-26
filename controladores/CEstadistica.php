<?php
class CEstadistica {
    
    
    
    public function procesar() {
        require_once './controladores/EstadisticaV2.php';
        $valores    =$_SESSION['numeros'];
        Estadistica::asignar($valores);
        $fun        =   $_GET['funcion'];
        if ($fun=='p') {
            $promedio   =  Estadistica::promedio();
        }elseif ($fun=='my') {
            $mayor      =  Estadistica::mayor();
        }elseif ($fun=='mn') {
            $menor      =  Estadistica::menor();
        }elseif ($fun=='mo') {
            $moda      =  Estadistica::moda();
        }        
        include './vistas/vestadistica.php';
    }
    private function verificar_numeros($datos) {
        $arr_co =array();
        foreach ($datos as $valor) {
            if(is_numeric($valor)){
                $arr_co[]   =$valor;
//                array_push($arr_co, $valor);
//                array_unshift($arr_co, $valor);
//                $arr_co[count($arr_co)] =$valor;                
            }
        }
        return $arr_co;
    }
    public function registrar_numero() {
        $numeros    =array();
        $numeros    =  isset($_SESSION['numeros'])?$_SESSION['numeros']:NULL;                
        if(!isset($_GET['valor'])){            
            return $numeros;
        }
        $numero =$_GET['valor'];
        $numeros[]  =$numero;       
        $_SESSION['numeros']    =$numeros;
        return $numeros;
    }
}