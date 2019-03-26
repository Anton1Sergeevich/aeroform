<?php
$connection = mysqli_connect('127.0.0.1', 'root', '', 'aero');

if(connection == false )
{
	echo 'Не удалось подключиться<br>';//если не подсоединились выводим
	echo mysqli_connect_error(); //выводит почему  не подключилось
	exit();// остановление php тк нет смысла
} 

 
//
$name = $_POST['name'];
$phone = $_POST['phone'];
$email= $_POST['email'];
$date = $_POST['date'];
$comment = $_POST['comment'];





if(isset($_POST['done']) ){
	//форма обрабатывается если done нажата
	if(trim ($_POST['name']) == '')
	{
		$errors[] = 'Введите имя!';
	}

	

	if (empty($errors))
	{
		//оправляем форму в бд
			mysqli_query( $connection, "INSERT INTO `form` (`name`, `phone`, `email`, `date`, `comment`) VALUES ('".$_POST['name']."', '".$_POST['phone']."', '".$_POST['email']."', '".$_POST['date']."', '".$_POST['comment']."')");
			echo 'Форма отправлена!';

	}else
	{
		array_shift($errors); //вывожу массив error, если есть ошибки
		echo 'Форма не отправлена!';
	}
}
	

const GOOGLE_RECAPTCHA_PRIVATE_KEY = '6LdE1ZkUAAAAAPuGsf8M2J_Gg4Gd09w9Wxr1t6gj';

if (isset($_POST['g-recaptcha-response'])) {
    $params = [
        'secret' => GOOGLE_RECAPTCHA_PRIVATE_KEY,
        'response' => $_POST['g-recaptcha-response'],
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ];
    $curl = curl_init('https://www.google.com/recaptcha/api/siteverify?' . http_build_query($params));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $response = json_decode(curl_exec($curl));
    curl_close($curl);

    if (isset($response->success) && $response->success == true) {
        
    } else {
        echo "Вы не прошли проверку reCaptcha";
    }
}

//проверка имени
	
	if (!preg_match("/^[а-яА-Я]*$/", $name))
	{
	
	}else	{echo 'Разрешены только буквы';}

	//проверка email
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
	
	} else	{echo 'Неправельный email';}

	//проверка ТЕЛЕФОНА
	
	if (!preg_match("/^[0-9 {10, 10}]+$/", $phone))
	{

	}
	else	{echo 'Телефон задан в неверном формате';}

	//проверка даты
	if (isset($_POST["done"])) {
//сначала убираем посторонние символы
$test_data = preg_replace('/[^0-9\.]/u', '', trim($_POST['date']));
//разбиваем дату в массив
$test_data_ar = explode('.', $test_data);
//если дата введена в корректном формате d.m.Y (checkdate(месяц, день, год))
if(@checkdate($test_data_ar[1], $test_data_ar[0], $test_data_ar[2])) {

}

}
else {echo '<br>Дата введена не корректно!';}

	//проверка комментария
	
	if (!preg_match("/^[а-яА-Я0-9]*$/", $comment))
	{
		
	}
	else {echo 'Разрешены только буквы и цифры';}
?>

