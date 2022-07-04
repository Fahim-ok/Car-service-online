<?php
  include('server.php');
  $title = "Login"; 
  include ('header.php') ;
  $category = "MacBook Pro" ;
?>
<style type="text/css">
.loginpadding{
padding: 75px;

  }
  .form-grou{
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
  .form-groupi{
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
  .terrron{
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
  body {background-color: #F0E68C;}
  
  body {background-image: url("img/signman.jpg");}
</style>
<div class="container loginpadding" >
<div class="row center">
  <div class="col-md-6 offset-md-3">
    <h3 class="nuts">Login</h3>
  </div>
</div>
<div class="row">
    <div class="col-md-6 offset-md-3">
      <form method="post" action="login.php">
        <div class="form-grou">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="username">
          <small id="emailHelp" class="form-text text-muted">Enter username. Not Email</small>
        </div>
        <div class="form-groupi">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <br>
        <button type="submit" class="terrron" name="login_user">Login</button>
        <p class="parts">
          Not yet a member? <a href="register.php">Sign up</a>
        </p>
        <style>
        .parts{
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
        .nuts{
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

<?php include ('footer.php') ?>





