<meta charset="utf-8">
<div class = "wrapper">
<h1>Работа с логом... </h1>
<style type="text/css">
  h1, h2, h3, p, li{
    color: #726c69;
  }
  
  #message, #name, #mail {
    height: 5%;
    width: 100%;
    font-size: 20px;
    border-radius: 10px;
    outline: none;
    padding: 5px 10px;
  }
  
  #message {
    height: 20%;
  }
  
  button{
    border-radius: 10px;
  }
  
  .wrapper {
    margin: 2%;
  }
  
  button{
    margin: 20px 0;
  }
</style>
<?php
  header('Access-Control-Allow-Origin: *');
  $f = '<h2>Форма для заполнения... </h2>';
  echo $f;
  echo "<div class=\"right\">";
  echo "<form method=\"post\" action=\"//{$_SERVER['SERVER_NAME']}{$_SERVER['SCRIPT_NAME']}\" >";
  echo <<<_END
  				<div>
  					<label>Имя и Фамилия</label>
  					<input id="name" name="name" required="required" type="text">
            <label><br/><br/>E-mail</label>
  					<input id="mail" name="mail" required="required" type="text">
            <label><br/><br/>Сообщение</label>
  					<textarea cols="40" rows="20" id="message" name="message" required="required" type="text"></textarea>
            <button type="submit">Отправить сообщение</button>
  				</div>
_END;
  if ($_SERVER['REQUEST_METHOD']==='POST') {
      $r = htmlentities($_POST['mail']." ".$_POST['name']." ".$_POST['message']) ?? 'Пустое сообщение';

      $f = fopen('log.txt', 'a');
      fwrite($f, $r);
      fwrite($f, "\n");
      fclose($f);

      $f = '<style>.right {width: 60%; margin-left: 35%; zoom: 80%}</style>';
      $f .= '<div class="right"><h2>Добавить ещё один отзыв...</h2></div>';
      echo '<h3 style="color:green">Данные успешно добавлены, спасибо!</h3>';
  }
  echo "</form></div>";
  echo "<h2>Список отзывов... </h2>\n";
  echo require_once ('list.php');
  echo "</div>";
