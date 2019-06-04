<?
	if(isset ($_POST['title'])) {$title=$_POST['title'];}
	if(isset ($_POST['subtitle'])) {$subtitle=$_POST['subtitle'];}

	if(isset ($_POST['name'])) {$name=$_POST['name'];}
	if(isset ($_POST['phone'])) {$phonenum=$_POST['phone'];}
	
	if(isset ($_POST['item'])) {$item=$_POST['item'];}
	if(isset ($_POST['email'])) {$email=$_POST['email'];}

	if ( isset($_FILES['file']['tmp_name']) ) {
		$file = $_FILES['file']['name'];
		$uploaddir = 'uploads/';
		$uploadfile = $uploaddir . basename($file);
		move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
		$fileLink ="http://verom.wamp.com.ua/uploads/$file"; // Заменить домен на домен клиента
	}

	$to = "veromtrade@gmail.com"; // Замениь на емаил клиента

	$message = "Форма: $title <br><br>";
	if ( $subtitle || $name || $phonenum || $email || $item || $file) {
		$message .= ""
			. ( $subtitle ? "$subtitle <br>" : "")
			. ( $name ? " Имя:  $name <br>" : "")
			. ( $phonenum ? " Телефон:  $phonenum <br>" : "")
			. ( $email  ? " E-mail: $email <br>" : "")
			. ( $item ? " Название изделия:  $item <br>" : "")
			. ( $file ? " Файл: $fileLink <br>" : "");
	}

	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=UTF-8\r\n";
	$headers .= "From: no-reply@wamp.com.ua"; // Заменить домен на домен клиента

	if (!$title && !$phonenum) {
	} else {
		mail($to,"New lead(verom.wamp.com.ua)",$message,$headers); // Заменить домен на домен клиента
	}
?>