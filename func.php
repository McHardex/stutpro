<?php
  $con = mysqli_connect('localhost', 'root', '', 'medrecorddb'); 
  if (isset($_POST['login_submit'])) {
    $username = $_POST['username']; 
    $password = $_POST['password']; 

    $query = "select * from logintb where username = '$username' and password='$password'"; 
    $result = mysqli_query($con, $query); 

    if (mysqli_num_rows($result) == 1) {
      header("Location: admin-panel.php"); 
    }
    else {
      echo "<script>alert('Enter correct details');</script>"; 
      echo "<script>window.open('index.php', '_self')</script>"; 
    }
  }

  if(isset($_POST['pat_submit'])) 
  {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $docapp = $_POST['docapp'];

    $query = "insert into doctorapptb(fname, lname, email, contact, docapp)values('$fname', '$lname', '$email', '$contact', '$docapp')";
    $result =   mysqli_query($con, $query);

    if($result) {
      echo "<script>alert('Appointment registered')</script>"; 
      echo "<script>window.open('admin-panel.php', '_self')</script>"; 
    }

  }

?> 