<form method="GET" action="index.php">
    <label>Ingrese un número</label>
    <input type="number" name="valor" required/>
    <input type="submit" value="Agregar"/>
</form>    
<?php


    if(!is_null($numeros)){
        echo '<table>';
        echo '<tr>';
        foreach ($numeros as $numero) {
            echo '<td>'.$numero.'</td>';
        }
        echo '</tr>';
        echo '</table>';
    }
?>
<form method="GET" action="index.php">
    <input type="radio" name="funcion" id="funcion_p" checked value="p"/>
    <label for="funcion_p">Promedio</label>
    <br/>
    <input type="radio" name="funcion" id="funcion_my" value="my"/>
    <label for="funcion_my">Mayor</label>
    <br/>
    <input type="radio" name="funcion" id="funcion_mn" value="mn"/>
    <label for="funcion_mn">Menor</label>
    <br/>
    <input type="radio" name="funcion" id="funcion_mo" value="mo"/>
    <label for="funcion_mo">Moda</label>
    <br/>
    <input type="submit" value="Calcular"/>
</form>
<a href="index.php?op=bs">Borrar sesión</a>