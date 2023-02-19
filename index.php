<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<form action="connect.php" method="POST">
    <div class ="container mt-5 ">
    <div class="form-group">
    <label for="exampleInputRollno">Rollno</label>
    <input type="rollno" class="form-control" name="rollno" id="exampleInputRollno" placeholder="Rollno">
  </div>
  <div class="form-group">
    <label for="exampleInputFirstName">First Name</label>
    <input type="firstname" class="form-control" name="firstname" id="exampleInputFirstName" placeholder="First Name">
  </div>
  <div class="form-group">
    <label for="exampleInputLastName">Last Name</label>
    <input type="lastname" class="form-control" name="lastname" id="exampleInputLastName" placeholder="Last Name">
  </div>
  <div class="form-group">
    <label for="exampleInputBranch">Branch</label>
    <input type="branch" class="form-control"name="branch" id="exampleInputBranch" placeholder="Branch">
  </div>
  <div class="form-group">
   
  <div class="form-group">
    <label for="exampleInputYear">Year</label>
    <input type="year" class="form-control" name="year" id="exampleInputYear" placeholder="Year">
  </div>
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control"name ='email' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
     
  </div>
   
  <div class ="text-center">
  <button type="submit" class="btn btn-primary " name="insert">Submit</button>
</div>
</div>
</form>
</body>
</html>