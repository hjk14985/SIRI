<?php require('lib/print.php');?>
<?php require('view/top.php');?>
  <a href="create.php">create</a>
  <form action="create_process.php" method="post">
    <p>
      <input type="text" name="title" placeholder="Title">
    </p>
    <p>
      <textarea name="description" rows="2" cols="20"></textarea>
    </p>
    <p>
      <input type="submit" value="전송">
    </p>
  </form>
</body>
</html>
