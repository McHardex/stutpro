<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book Appointment</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="jumbotron" style="background: url('images/3.jpg'); height:300px; background-size:cover; no-repeat;"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
          <a href="" class="list-group-item active" style="background-color:#007bff; color: #fff; border-color: #007bff">Patient List</a>
          <a href="patient_details.php" class="list-group-item">Patient Details</a>
          <a href="" class="list-group-item">Add new Patient</a>
          <a href="" class="list-group-item">Payment/Checkout</a>
        </div>
        <hr>
        <div class="list-group">
          <a href="" class="list-group-item active"  style="background-color:#007bff; color: #fff; border-color: #007bff">Staff</a>
          <a href="" class="list-group-item">Staff Details</a>
          <a href="" class="list-group-item">Add new Staff</a>
          <a href="" class="list-group-item">Remove Staff Members</a>
        </div>  
      </div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-body" style="background-color: #007bff ; color: #fff">Book an appointment</div>
          <div class="card-body">
            <form class="form-group" action="func.php" method="post">
              <label>First Name : </label> 
              <input type="text" name="fname" class="form-control"><br>
              <label>Last Name : </label> 
              <input type="text" name="lname" class="form-control"><br>
              <label>Email address : </label> 
              <input type="text" name="email" class="form-control"><br>
              <label>Contact : </label> 
              <input type="text" name="contact" class="form-control"><br>
              <label>Doctor Appointment : </label> 
              <select class="form-control" name="docapp">
                <option value="Dr Akinyele from 6pm to 8pm">Dr Akinyele from 6pm to 8pm</option>
                <option value="Dr mchardex from 4pm to 6pm">Dr mchardex from 4pm to 6pm</option>
              </select><br>
              <input type="submit" name="pat_submit" value="Enter appointment" class="btn btn-primary">
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>