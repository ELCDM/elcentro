<?php
require_once '../../../../../wp-config.php';
global $wpdb;
global $db;
$fecha = date("Y-m-d");
$auth = true;
if ($auth) {
    $alert = '';
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=acquaroni-vistos-".$fecha.".xls");
    header("Pragma: no-cache");
    header("Expires: 0");

    $res = '<table>
            <tr>
            <th>Nombre de Art&iacute;culo</th>
            <th>Numero de visitas</th>
            <th>Enlace</th>
            </tr>';
    if ($result = $wpdb->get_results("SELECT * FROM los_mas_vistos ORDER BY vistas DESC;")) {
      foreach ( $result as $results )
{
            $res .= '<tr>
                    <td>' . get_the_title( $results->post_id ) . '</td>
                    <td>' . $results->vistas . '</td>
                        <td>' . get_the_permalink( $results->post_id ) . '</td>
                </tr>';
        }
    }
    $res .= '</table>';
    echo $res;
}
?>
