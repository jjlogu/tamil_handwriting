<?php 

if(!empty(@$_POST['photo'])) {

	list($type, $data) = explode(';', $_POST['photo']);
	list(, $data)      = explode(',', $data);

	if(base64_encode(base64_decode($data, true)) === $data) {
		$data = base64_decode($data, true);
		$file =  "data/".uniqid() . '.png';
		$success = file_put_contents($file, $data);
		echo $success?0:1;
	}
}

die();

?>
