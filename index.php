<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>med record</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="background: url('images/2.jpg') no-repeat; background-size: cover;">
  <div class="container" style="width: 400px; margin-top: 100px">
    <div class="card">
      <img src="images/1.jpg" class="card-img-top"
      <div class="card-body">
        <form class="form-group" action="func.php" method="post" style="padding: 20px">
          <label for="username">Username: </label><br>
          <input type="text" name="username" class="form-control" placeholder="Enter username"><br>
          <label for="password">Password: </label><br>
          <input type="password" name="password" class="form-control" placeholder="Enter password"><br>
          <input type="submit" name="login_submit" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>