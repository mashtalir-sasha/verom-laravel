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
		$fileLink ="https://verom.com.ua/uploads/$file"; // Заменить домен на домен клиента
	}

	$to = "veromtrade@gmail.com"; // Замениь на емаил клиента

	$utm_source=$_COOKIE['utm_source'];
    $utm_medium=$_COOKIE['utm_medium'];
    $utm_term=$_COOKIE['utm_term'];
    $utm_content=$_COOKIE['utm_content'];
    $utm_campaign=$_COOKIE['utm_campaign'];
    $gclid=$_COOKIE['gclid'];

    if ($gclid) {
        $full_data = "Source: Google Adwords\nKW: $utm_term";
    }
    elseif ($utm_source) {
        $full_data = "Source: $utm_source/$utm_medium\nKW: $utm_term";
    }

	$message = "Форма: $title <br><br>";
	if ($subtitle || $name || $phonenum || $email || $item || $file) {
		$message .= ""
			. ( $subtitle ? "$subtitle <br>" : "")
			. ( $name ? " Имя:  $name <br>" : "")
			. ( $phonenum ? " Телефон:  $phonenum <br>" : "")
			. ( $email  ? " E-mail: $email <br>" : "")
			. ( $item ? " Название изделия:  $item <br>" : "")
			. ( $file ? " Файл: $fileLink <br>" : "");
	}

	$comments = "";
	if ($subtitle || $item || $file) {
		$comments .= ""
			. ( $subtitle ? "$subtitle \n" : "")
			. ( $item ? " Название изделия:  $item \n" : "")
			. ( $file ? " Файл: $fileLink \n" : "");
	}

	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=UTF-8\r\n";
	$headers .= "From: no-reply@verom.com.ua"; // Заменить домен на домен клиента

	if (!$title && !$phonenum) {
	} else {
		mail($to,"New lead(verom.com.ua)",$message,$headers); // Заменить домен на домен клиента
		// CRM server conection data
		define('CRM_HOST', 'verom.bitrix24.ua');
		define('CRM_PORT', '443');
		define('CRM_PATH', '/crm/configs/import/lead.php');
		define('CRM_AUTH', 'b71cfd92630a303bbf7684a7f3445a17');
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$postData = array(
				'TITLE' => $title,
				'NAME' => $name,
				'PHONE_WORK' => $phonenum,
				'SOURCE_ID' => WEB,
				'SOURCE_DESCRIPTION'=> $full_data,
				'COMMENTS' => $comments
			);
			if (defined('CRM_AUTH')) {
				$postData['AUTH'] = CRM_AUTH;
			} else {
				$postData['LOGIN'] = CRM_LOGIN;
				$postData['PASSWORD'] = CRM_PASSWORD;
			}
			$fp = fsockopen("ssl://".CRM_HOST, CRM_PORT, $errno, $errstr, 30);
			if ($fp) {
				$strPostData = '';
				foreach ($postData as $key => $value)
					$strPostData .= ($strPostData == '' ? '' : '&').$key.'='.urlencode($value);
				$str = "POST ".CRM_PATH." HTTP/1.0\r\n";
				$str .= "Host: ".CRM_HOST."\r\n";
				$str .= "Content-Type: application/x-www-form-urlencoded\r\n";
				$str .= "Content-Length: ".strlen($strPostData)."\r\n";
				$str .= "Connection: close\r\n\r\n";
				$str .= $strPostData;
				fwrite($fp, $str);
				$result = '';
				while (!feof($fp)) {
					$result .= fgets($fp, 128);
				}
				fclose($fp);
				$response = explode("\r\n\r\n", $result);
				$output = '<pre>'.print_r($response[1], 1).'</pre>';
			} else {
				echo 'Connection Failed! '.$errstr.' ('.$errno.')';
			}
		} else {$output = '';}
	}
?>