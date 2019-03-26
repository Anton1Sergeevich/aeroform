<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Форма</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
	<form  action="academy.php" method="POST" class=" mx-3 row">
  <div class="form-group col-12 ">
    <label for="exampleInputName2">ФИО</label>
    <input type="text" name="name" class="form-control" id="exampleInputName2" placeholder="Антон">
  </div>
  <div class="form-group col-12 ">
    <label for="exampleInputEmail2">Мобильный телефон</label>
    <input type="text" name="phone" class="form-control" id="exampleInputName3" placeholder="8(960)539-57-77">
  </div>
  <div class="form-group col-12 ">
    <label for="exampleInputEmail2">Email</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail2" placeholder="yourrspecialist@gmail.com">
  </div>
  <div class="form-group col-12 ">
  <label for="example-date-input" class="col-xs-2 col-form-label">Дата рождения</label>
  <div class="col-xs-10">
    <input class="form-control" type="date" name="date" value="2011-08-19" id="example-date-input">
  </div>
</div>
<div class="form-group col-12">
    <label for="exampleInputName2">Комментарий</label>
    <input type="text" name="comment" class="form-control" id="exampleInputName2" >
  </div>
   <div class="g-recaptcha" data-sitekey="6LdE1ZkUAAAAACl8KadBDBtoUqOokER4uBqorYsF"></div>
  <button type="submit" name="done" value="Отправить форму" class="btn btn-danger ml-3">Отправить форму</button>
</form>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>