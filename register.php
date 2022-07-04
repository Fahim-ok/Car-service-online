<?php
  include('server.php');
  $title = "Register"; 
  include ('header.php') ;
  $category = "MacBook Pro" ;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
.regpadding{
padding: 15px;
  }
  body {background-color: #F0E68C;}
  body {background-image: url("img/logoman.jpg");}
</style>
</head>
<body >

    <div class="container regpadding">
      <div class="row center">
        <div class="col-md-6 offset-md-3"> 
          <h2 class="h1-edit">Register</h2>
          <style>
            .h1-edit{
              background-color: #DC143C;
  border: round;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
            }
          </style>
        </div>
      </div>

    <div class="row">
        <div class="col-md-6 offset-md-3">  
          <form method="post" action="register.php">

            <div class="form-groupu">
              <label>Username</label>
              <input class="form-control" type="text" name="username" value="<?php echo $username; ?>">
            
            <div class="form-groupu">
              <label>Email</label>
              <input class="form-control" type="email" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="form-groupu">
              <label>Password</label>
              <input class="form-control" type="password" name="password_1">
            </div>
            <div class="form-groupu">
              <label>Confirm Password</label>
              <input  class="form-control" type="password" name="password_2">
            </div>
            </div>
            <div class="input-group">
              <button type="submit" class="rage" name="reg_user">submit</button>
              <style>
                .rage{
                  background-color: #DC143C;
  border: round;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
                }
                .form-groupu{
                  color: white;
                }
              </style>
            </div>
            <p class="barron">
              Already a member? <a href="login.php">Sign in</a>
            </p>

            <style>
              .barron{
                background-color: #DC143C;
  border: round;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;

              }
            </style>
          </form>
    </div>
    </div>
    </div>
</body>
</html>

<?php include ('footer.php') ?>