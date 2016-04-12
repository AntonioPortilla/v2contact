<?php

require 'Mandrill.php';

class Mailer {

    private $_mail = null;

    public function __construct() {
        $this->_mail = new Mandrill('7m49oLSk5P0LYdbPl8NMrw');
    }

    public function Send($params) {
        $retorno = array('estado' => false, 'info' => 'Desconocido');
        try {
            $message = array(
                'html' => $params['message'],
                'text' => strip_tags($params['message']),
                'subject' => $params['subject'],
                'from_email' => $params['from_mail'],
                'from_name' => $params['from_name'],
                'to' => array(array(
                        'email' => $params['to_mail'],
                        'type' => 'to'
                    )),
                'headers' => array('Reply-to' => $params['from_mail']),
                'signing_domain' => 'v2contact.com',
                'metadata'=>array('pila_id'=>$params['id'])
            );

            if (!empty($params['to_name'])) {
                $message['to'][0]['name'] = $params['to_name'];
            } else {
                $message['to'][0]['name'] = 'Customer';
            }

            $async = false;
            $ip_pool = 'Main Pool';
            $send_at = '1970-01-01 00:00:00';
            $result = $this->_mail->messages->send($message, $async, $ip_pool, $send_at);

            $result = $result[0];

            if ($result['status'] == 'sent') {
                $retorno['state'] = true;
                $retorno['info'] = $result['_id'];
            } else {
                $retorno['state'] = false;
                $retorno['info'] = $result['_id'];
            }
        } catch (Mandrill_Error $e) {
            $retorno['state'] = false;
            $retorno['info'] = $e->getMessage();
        } catch (Exception $e) {
            $retorno['state'] = false;
            $retorno['info'] = $e->getMessage();
        }
        return $retorno;
    }

}


$valuesPOST = array(
  'nombre' => FILTER_SANITIZE_STRING,
  'email' => FILTER_VALIDATE_EMAIL,
  'pais' => FILTER_SANITIZE_STRING,
  'cel' => FILTER_SANITIZE_STRING,
);

$valuesGET = array(
  'key' => FILTER_UNSAFE_RAW,
  'email' => FILTER_UNSAFE_RAW
);

if( !empty($_POST) ){
  $values = filter_input_array(INPUT_POST, $valuesPOST);

  $json_v2contact = json_encode(
    array(
     'action' => 'add_contact',
     'empresaID' => 197,
     'usuarioID' => 382,
     'grupoID' => 2483,
     'validate' => 'email',
     'contacts' => array(
       array(
        'name'=>$values['nombre'],
        'lastname'=>'',
        'email'=>$values['email'],
        'phone'=>$values['cel'],
        'opc6'=>$values['pais'],
        'state'=>'PENDIENTE',
        'confirm'=>'yes'
        )
      )
    )
  );

  $out2 = shell_exec("curl -A 'V2contact/2.0' -d '".$json_v2contact."' http://service.v2contact.com/rest/actions.php");

  $response = json_decode($out2, true);

  if( !($response['result'] == 'success') ){
    header('Location:http://www.v2contact.com/error404/');
    exit();
  }

  $Mail = new Mailer();

  //$apikey = '2237269debaaa5f4516ac8f1c696f1d8';
  // Set URL for confirm e-mail account
  //https://app.v2contact.com/api/contactcreate/{apikey}
  $url = 'http://www.v2contact.com/request/sign/?email='.$values['email'].'&key='.base64_encode($response['response'][0]['_id']);
  //$url = 'https://app.v2contact.com/api/contactcreate/{$apikey}';

  $mensaje = '<div><p>Hola <b>' . $values['nombre'] . '</b>,</p>'
          . 'Este mensaje tiene como finalidad el verificar tu direcci&oacute;n de correo electr&oacute;nico para poder registrar sus datos en el sistema. '
          . 'Para activar tu suscripción por favor haz clic en el enlace que aparece a continuaci&oacute;n: <br><p><a href="' . $url . '">' . $url . '</a></p>'
          . '<b>NOTA:</b> Este mensaje ha sido enviado por un sistema autom&aacute;tico. Por favor no intente responder a este mensaje ya que este buz&oacute;n de correo no es revisado por ninguna persona</p></div>';

  $params = array(
    'message' => $mensaje,
    'subject' => 'Confirmación de correo electrónico',
    'from_mail' => 'noreply@v2contact.com',
    'from_name' => 'V2contact',
    'to_mail' => $values['email'],
    'to_name' => $values['nombre']
    );
  $Mail->Send($params);

  header('Location:http://www.v2contact.com/confirmacion/');
  exit();
}

if( !empty($_GET) ){
  $values = filter_input_array(INPUT_GET, $valuesGET);
  $id = base64_decode($values['key']);
  $email = $values['email'];

  $json_v2contact = json_encode(
    array(
     'action' => 'update_state_contact',
     'empresaID' => 197,
     'contactoID' => $id,
     'email' => $email,
     'estado' => 'ACTIVO'
    )
  );

  $out2 = shell_exec("curl -A 'V2contact/2.0' -d '".$json_v2contact."' http://service.v2contact.com/rest/actions.php");

  $response = json_decode($out2, true);

  if($response['result'] == 'success'){
    header('Location:http://www.v2contact.com/gracias/');
  } else {
    echo 'Error';
  }
}

