
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Form in Php</title>
</head>
<body>

<form action="store.php" method="POST">
    
    <div class="form-group row mt-4">
    <label  class="col-sm-2 col-form-label">UserName</label>
    <div class="col-sm-3">
      <input type="text" name="user_name"  class="form-control" placeholder="Enter Your user_name">
    </div>
   </div>

  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-3">
      <input type="email" name="email"  class="form-control" placeholder="Enter Your Email">
    </div>
  </div>


  <div class="form-group row">
    <label  class="col-sm-2 ">Password</label>
    <div class="col-sm-3">
      <input type="password" name="pass"class="form-control" placeholder="Password">
    </div>
  </div>


  <button type="submit" name="btn" class="btn btn-success ml-2">Submited</button>
</form>


</body>