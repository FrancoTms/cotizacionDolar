<?php
    require_once('php/encabezado.php');
    const IMPUESTO_PAIS = 30;
    const IMPUESTO_GANANCIAS = 45;
    $cantidadDolares = mt_rand(100,200);
    $cotizacion = 365.50;
    $precio = $cantidadDolares * $cotizacion;
    $impPais = $precio * IMPUESTO_PAIS / 100;
    $impGan = $precio * IMPUESTO_GANANCIAS / 100;
    $valorFinal = $precio + $impPais + $impGan;
?>

        <table>
            <caption>Compra Dólares <br> Cotización : $365,50</caption>
            <tr>
                <th>Está comprando :</th>
                <td><?php echo 'USD'. number_format($cantidadDolares, 2);?></td>
            </tr>
            <tr>
                <th>Precio Sin Impuestos:</th>
                <td><?php echo '$'. number_format($precio, 2);?></td>
            </tr>
            <tr>
                <th>Impuesto PAIS:</th>
                <td><?php echo '$'. number_format($impPais, 2);?></td>
            </tr>
            <tr>
                <th>Impuesto a las Ganancias:</th>
                <td><?php echo '$'. number_format($impGan, 2);?></td>
            </tr>
            <tr>
                <th>Total a Pagar:</th>
                <td><?php echo '$' .number_format($valorFinal, 2);?></td>
            </tr>
        </table>

<?php
    require_once('php/pie.php');
?>