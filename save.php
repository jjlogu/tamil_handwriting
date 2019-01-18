<?php 

if(!empty($_POST[''])) {
  $data = $_POST['photo'];
  list($type, $data) = explode(';', $data);
  list(, $data)      = explode(',', $data);
  $data = base64_decode($data);

  mkdir($_SERVER['DOCUMENT_ROOT'] . "/photos");
}

?>