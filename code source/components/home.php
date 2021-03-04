
<?php 
session_start();
if (!$_SESSION['LOGIN']) {
  header("location:index1.php");
  die();
}	
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetApp</title>
    <link rel="stylesheet" href="../css/sos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<section class="logout">
    <div class="head_logout">
    <img src="../imgs/ivo.PNG" class="icn"></img>
        
    <div class="my_log">
      <!-- <form class="login_form" action="index1.php" method="POST" -->
    <span class="myweb">MyWebApp</span>
    <span class="log"> 
        <img src="../imgs/lefto.png" class="left"></img>
        <a href="logout.php" class="btn btn-primary" name="log">logout</a>
        </span>
    </div>
</div>

    <div class="contact"> 
    <div id="cont">Contact List</div>

    <div class="buttons">
      <!-- <input name -->
    <button type="button" class="btn btn-primary but1" data-toggle="modal" >
    Search
</button>
    <button type="button" class="btn btn-primary but2" data-toggle="modal" data-target="#exampleModal">
    Add a person
</button>
    </div>
    <table>
    <tr>
    <th>ID</th>
    <th>First name</th>
    <th>Last name</th>
    <th>Email</th>
    <th>adress</th>
    <th>phone</th>
    <th>groupe</th>
    <th>actions</th>
  </tr>
<tr>
    <td id="cel">58011</td>
    <td id="cel">Abby</td>
    <td id="cel">Adames</td>
    <td id="cel">abby@anywhere.com</td>
    <td id="cel">adress1</td>
    <td id="cel">phone1</td>
    <td id="cel">family </td>
    <td id="cel"><a class="edit"href="#">Edit</a><i class="fas fa-times-circle" ></i></td>
</tr>
<tr>
    <td id="cel">58011</td>
    <td id="cel">Abby</td>
    <td id="cel">Adames</td>
    <td id="cel">abby@anywhere.com</td>
    <td id="cel">adress1</td>
    <td id="cel">phone1</td>
    <td id="cel">family </td>
    <td id="cel"><a class="edit" href="#">Edit</a><i class="fas fa-times-circle" ></i></td>
</tr>
<tr>
    <td id="cel">58011</td>
    <td id="cel">Abby</td>
    <td id="cel">Adames</td>
    <td id="cel">abby@anywhere.com</td>
    <td id="cel">adress1</td>
    <td id="cel">phone1</td>
    <td id="cel">family </td>
    <td id="cel"><a class="edit" href="#">Edit</a><i class="fas fa-times-circle" ></i></td>
</tr>
<tr>
    <td id="cel">58011</td>
    <td id="cel">Abby</td>
    <td id="cel">Adames</td>
    <td id="cel">abby@anywhere.com</td>
    <td id="cel">adress1</td>
    <td id="cel">phone1</td>
    <td id="cel">family </td>
    <td id="cel"><a class="edit" href="#">Edit</a><i class="fas fa-times-circle" ></i></td>
</tr>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Add a person</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
  <div class="form-group">
    <label for="exampleInputEmail1">First name:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fname" placeholder="Enter your first name">

  <div class="form-group">
    <label for="exampleInputPassword1">Last name:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="lname" placeholder="Enter your Last name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email:</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="Enter your Email">
  <div class="form-group">
    <label for="exampleInputPassword1">Adress:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="adress" placeholder="Enter your Adress">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone:</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="phone" placeholder="Enter your Phone">
  </div>
  <div class="radios">
<span>
<input type="radio">
<label  name="family">Family</label></span>
<span class="rad"><input type="radio">
<label name="friend">Friend</label></span>
<span class="rad"><input type="radio">
<label name="businness">Businness</label></span>
</div>
<div>
<div class="form-group">
    <label for="exampleInputPassword1">Notes</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="notes" >
  </div> 
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Submit</button>
      </div>
    </div>
  </div>
</div>
</section>
</body>
</html>
