<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Cross site scripting</h1>
  <?php
    echo htmlspecialchars('<script>alert("babo");</script>');
  ?>
</body>
</html>
