<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Exo|Merriweather" rel="stylesheet">
  <style>
    h2{
      font-family: 'Exo', sans-serif;

    }
    body{
      margin:auto 29%;
      background-color: #EDD0D0;
    }
  </style>
</head>
<body>
<div class="container">
  <h2 align="center"><strong>Welcome!Create an account here.</strong></h2><br>
  <form class="form-horizontal" action="connection.php" method="post" name="signupform">
    <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username:</label>
      <div class="col-sm-4">
        <input type="username" class="form-control" id="username" placeholder="Enter name" name="username">
      </div>
    </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="gender">Gender:</label>
    <div class="col-sm-4">
      <input type="radio" name="gender">Male
      <input type="radio" name="gender">Female
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="address">Address:</label>
      <div class="col-sm-4">          
        <input type="address" class="form-control" id="address" placeholder="Enter address" name="address">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-4">          
        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password:</label>
      <div class="col-sm-4">          
        <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-4">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" value="signup" name="signup" class="btn btn-primary">Signup</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>


