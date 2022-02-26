<form method="GET" action="index.php">
    <label>Ingrese los números separados por coma(,)</label>
    <input type="text" name="valores" required/>
    <input type="submit" value="Calcular"/>
    <br/>
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
</form>