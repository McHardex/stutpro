<!DOCTYPE html>
<html lang="en">
<head>
  <title>Patient Details</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="jumbotron" style="background: url('images/3.jpg'); height:300px; background-size:cover; no-repeat;"></div>
  <div class="container">
    <div class="card">
      <div class="card-body" style="background-color: #007bff ; color: #fff">
        <div class="row">
          <div class="col-md-1">
            <a href="admin-panel.php" class="btn btn-light">Go back<a/>
          </div>
          <div class="col-md-3"><h3>Patient Details</h3></div> 
          <div class="col-md-3">
            <form class="form-group" action="func.php" method="post">
              <div class="row">
                <div class="col-md-10"><input type="text" name="search" class="form-control"></div>
                <div class="col-md-2"><input type="submit" name="patient_search" class="btn btn-light" value="search"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="card-body" style="background-color: #007bff ; color: #fff">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Firstname</th>
              <th scope="col">Lastname</th>
              <th scope="col">Email</th>
              <th scope="col">Contact</th>
              <th scope="col">Doctor Appointment</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Mark</td>
              <td>Mark</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>