
<?php
require_once "../../../../wp-config.php";
global $wpdb, $post;

//Creando el usuario
if ($_REQUEST['red'] == 'fb'){
//  echo $_REQUEST['user'];
  $username = explode(" ", $_REQUEST['user']);
  $email = $username[0].$username[1].$username[2].'@facebook.com';
  $password =  $username[0].'d1t5g7';
  $user = $_REQUEST['user'];
  $author = $_REQUEST['user'];
} else {
$email = $_REQUEST['correocoment'];
$username = explode("@", $email);
$password = $username[1].'+'.$username[0];
$user = $username[0];
$author = $username[0];
}
 wp_create_user ( $user , $password , $email );

 //CREAR COMENTARIOS
 if($_REQUEST['comentario']){
 $time = current_time('mysql');

$data = array(
    'comment_post_ID' => $_REQUEST['postid'],
    'comment_author' => $author,
    'comment_author_email' => $email,
    'comment_author_url' => 'http://',
    'comment_content' => $_REQUEST['comentario'],
    'comment_type' => '',
    'comment_parent' => 0,
    'user_id' => 1,
    'comment_author_IP' => '127.0.0.1',
    'comment_agent' => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.10) Gecko/2009042316 Firefox/3.0.10 (.NET CLR 3.5.30729)',
    'comment_date' => $time,
    'comment_approved' => 0,
);

wp_insert_comment($data);
}

//LIKE DE ARTICULO
if($_REQUEST['like'] == 1){

  $fecha = date("Y-m-d H:i:s");
  $postidl = $_REQUEST['postid'];
  $userli = $_REQUEST['userlike'];

$exist = $wpdb->get_row( "SELECT * FROM los_likes WHERE post='$postidl' AND user='$userli'");

if (!$exist->id){
  $wpdb->insert('los_likes',
  array(
    'id' => 'NULL',
    'post' => $postidl,
    'user' => $userli,
    'fecha'=> $fecha
  ),
  array(
  '%d',
  '%d',
  '%s',
  '%s'
  )
  );
}
}

echo 1;
 ?>
