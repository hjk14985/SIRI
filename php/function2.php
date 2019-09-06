<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>fonction2</title>
</head>
<body>
  <h1>Function</h1>
  <h2>Basic</h2>
  <?php
    function basic(){
      print("Lorem ipsum dolor sit amet1<br>");
      print("Lorem ipsum dolor sit amet2<br>");
    }
    basic();
  ?>
  <h2>parameter &amp; argument</h2>
  <?php
    function sum($left, $right){
      print($left + $right);
      print("<br>");
    }
    sum(2,4);
  ?>
  <h2>return</h2>
  <?php
  function sum2($left, $right){
    return $left + $right;
  }
  print(sum2(2,4));
  //mail('hjk14985@naver.com', sum2(2,4));
  //upload('egoing.net', sum2(2,4));
  file_put_contents('result.txt', sum2(2,4));
  ?>
</body>
</html>
