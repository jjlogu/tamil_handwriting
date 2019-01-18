<?php 

if(!empty(@$_POST['photo'])) {
  $data = $_POST['photo'];
  if(base64_encode(base64_decode($data, true)) === $data) {
		list($type, $data) = explode(';', $data);
		list(, $data)      = explode(',', $data);
		$data = base64_decode($data, true);
		$file =  uniqid() . '.png';
		$success = file_put_contents($file, $data);
		var_dump($success);
	}
}
die();

?>