<?php if(isset($promedio)): ?>
<b>Promedio:</b>
<br/>
<?php
    echo number_format($promedio,2);
?>
<br/>
<?php
    endif;
    if(isset($mayor)):
?>
<b>Mayor:</b>
<br/>
<?php
    echo $mayor;
?>
<br/>
<?php
    endif;
    if(isset($menor)):
?>
<b>Menor:</b>
<br/>
<?php
    echo $menor;
    endif;
    if(isset($moda)):
?>
<br/>    
<b>Moda:</b>
<br/>
<?php
    echo $moda;
    endif;
?>
<br/><a href="index.php">Volver</a>