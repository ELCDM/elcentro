<?php
require_once "../../../../wp-config.php";
global $wpdb, $post;
$fecha = date("Y-m-d H:i:s");

include_once 'mail/class.phpmailer.php';
include_once 'mail/class.pop3.php';
include_once 'mail/class.smtp.php';

function sendSendgridEmail($para1, $para2, $para3, $subject, $body_text, $body_html, $from, $fromName)
{
  $url = 'https://api.sendgrid.com/';
  $user = 'ElCentro';
  $pass = '31C3ntr0';
  $json_string = array(

    'to' => array(
      $para1, $para2, $para3
      ),
    'category' => 'test_category'
    );


  $params = array(
    'api_user'  => $user,
    'api_key'   => $pass,
    'x-smtpapi' => json_encode($json_string),
    'to'        => $para1,
    'subject'   => $subject,
    'html'      => $body_html,
    'text'      => $body_text,
    'from'      => $from,
    );


  $request =  $url.'api/mail.send.json';

// Generate curl request
  $session = curl_init($request);
// Tell curl to use HTTP POST
  curl_setopt ($session, CURLOPT_POST, true);
// Tell curl that this is the body of the POST
  curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
// Tell curl not to return headers, but do return the response
  curl_setopt($session, CURLOPT_HEADER, false);
// Tell PHP not to use SSLv3 (instead opting for TLS)
  curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
  curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

// obtain response
  $response = curl_exec($session);
  curl_close($session);

// print everything out
  //print_r($response);
}


 $toaddress1 = 'sergio.calderon@elcentrodemarketing.com';
  $toaddress2 = 'carlos.flores@elcentrodemarketing.com';
  $toaddress3 = ' ';
  $subject = 'El Centro contacto';
    $message = "<b>Nombre:</b> " . $_REQUEST['nombre_contacto'] . ".<br />";
    $message .= "<b>Apellido:</b> " . $_REQUEST['apellido_contacto'] . ".<br />";
    $message .= "<b>Correo:</b> " . $_REQUEST['correo_contacto'] . ".<br />";
    $message .= "<b>Contenido del mensaje:</b> " . $_REQUEST['comentario_contacto'];
    // sendEmail($toaddress, $subject, $message);
	sendSendgridEmail($toaddress1, $toaddress2, $toaddress3, $subject, $message, $message, "elcentro-noreply@elecentrodemarketing.com", "El Centro");
    echo 10;

?>
