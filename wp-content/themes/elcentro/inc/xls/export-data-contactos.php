<?php
require_once '../../../../../wp-config.php';
global $wpdb;
global $db;
$fecha = date("Y-m-d");
$auth = true;
if ($auth) {
    $alert = '';
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=acquaroni-contactos-".$fecha.".xls");
    header("Pragma: no-cache");
    header("Expires: 0");

    $res = '<table>
            <tr>
                <td>Fecha</td>
                <td>Nombre</td>
                <td>Correo</td>
                <td>Telefono</td>
                <td>Departamento</td>
                <td>Direcci&oacute;n</td>
                <td>Comentario</td>
            </tr>';
    if ($result = $wpdb->get_results("SELECT * FROM Contacto ORDER BY fecha DESC")) {
      foreach ( $result as $results )
{
            $res .= '<tr>
                    <td>' . $results->fecha . '</td>
                    <td>' . $results->nombre . '</td>
                        <td>' . $results->correo . '</td>
                            <td>' . $results->telefono . '</td>
                                <td>' . $results->departamento . '</td>
                                <td>' . $results->direccion . '</td>
                                <td>' . $results->comentario . '</td>
                </tr>';
        }
    }
    $res .= '</table>';
    echo $res;
}
?>
