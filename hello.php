<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
 
<?php
	if( !isset($_POST['id'],$_POST['name']) ||
  		strlen($_POST['id']) == 0 ||
  		strlen($_POST['name']) == 0
  	)
  	{
  		echo '入力していない場所があります。入力し直してください。';
  	}
  	else
  	{
  		foreach($_POST as $k => $v)
  		{
  			echo "あなたの $k は $v です。";
  			echo "<br>";
  		}
  		}

//var_dump($_POST);

?>


  </body>
</html>
