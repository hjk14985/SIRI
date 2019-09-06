<?php
  function print_title(){
    if (isset($_GET['id'])){
      echo $_GET['id'];
    } else{
      echo "Welcome";
    }
  }

  function print_list(){
    $list = scandir("./data");
    $i = 0;
    while($i < count($list)){
      if($list[$i] != '.'){
        if($list[$i] != '..'){
          echo "<li><a href=\"functions.php?id=$list[$i]\">$list[$i]</a></li>\n";
        }
      }
      $i = $i + 1;
    }
  }

  function print_description(){
    if(isset($_GET['id'])){
      echo file_get_contents("./data/".$_GET['id']);
    } else{
      echo "hello world";
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
      <?php
      print_title();
      ?>
    </title>
  </head>
  <body>
    <h1><a href="functions.php">WEB</a></h1>
    <ol>
    <?php
    print_list();
    ?>
  </ol>
  <h2>
  <?php
  print_title();
  ?>
</h2>
  <?php
  print_description();
  ?>
</body>
</html>
