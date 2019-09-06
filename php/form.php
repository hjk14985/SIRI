<?php
file_put_contents('data/'.$_POST['title'],$_POST['description']);
echo "<p>Title : ".$_POST['title']."</p>";
echo "<p>Description : ".$_POST['description']."</p>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

</body>
</html>
