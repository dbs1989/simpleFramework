<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Simple Framework</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  </head>
  <body>
  <div class="vertical-menu">
  <a href="/" class="active">Home</a>
  <a href="/user">user</a>
  <a href="/user/add">add user</a>
</div>
  <?php
    require_once '../Application/autoload.php';

    use Application\core\App;
    use Application\core\Controller;
    $app = new App();

  ?>
  <script src="/assets/js/jquery.slim.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  </body>
</html>
