
<?php 
$con = mysqli_connect('localhost','root','','hajar');  
session_start();
if (!$_SESSION['LOGIN']) {
  header("location:index1.php");
  die();
}	
if (isset($_POST['submit'])) {
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $adress=$_POST['adress'];
  $phone=$_POST['phone'];
  $groupe=$_POST['group'];
  $notes=$_POST['notes'];


  $sql="INSERT INTO contacts (`first_name`,`last_name`,`email`,`phone`,`address1`,`group`,`notes`) VALUES ('$fname','$lname','$email','$adress','$phone','$groupe','$notes')";
  $result = mysqli_query($con, $sql);
  if ($result) {
   header('location:home.php');
  }
  else {
    echo $sql ;
  }
}

if (isset($_POST['delete'])) {
  $id=$_POST['delete'];
  $sql="DELETE FROM contacts  WHERE id='$id'";
  $result = mysqli_query($con, $sql);
  if ($result) {
echo 'data deleted';
header("location:home.php");
  }else{
    echo 'data not deleted';
  }

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
<div class="tabls">
  
<?php
$con = mysqli_connect('localhost','root','','hajar');  
$sql= "SELECT * FROM contacts";
$result = mysqli_query($con, $sql);
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email</th>
      <th scope="col">adress</th>
      <th scope="col">phone</th>
      <th scope="col">groupe</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <?php
  if ($result) 
{
  
  foreach($result as $row)
  {
    ?>
  <tbody>
    <tr>
    <td id="cel"><?php echo $row['id'];?></td>
    <td id="cel"><?php echo $row['first_name'];?></td>
    <td id="cel"><?php echo $row['last_name'];?></td>
    <td id="cel"><?php echo $row['email'];?></td>
    <td id="cel"><?php echo $row['address1'];?></td>
    <td id="cel"><?php echo $row['group'];?></td>
    <td id="cel"><?php echo $row['notes'];?></td>
    <!-- <td id="cel"><a class="edit" href="#">supprimer</a></td> -->
    <td>
    <form action="home.php" method="POST">
      <button type="submit" class="btn btn-danger" name="delete" value="<?= $row['id'];?>">Delate</button>
    </form>
    </td>
    </tr>
   
  </tbody>
  <?php
  }
}
else{ 
  echo "NO contacts found";
}

?>
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
        <form action="home.php" method="POST" >
          <div class="form-group">
            <label for="exampleInputEmail1">First name:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fname" placeholder="Enter your first name">
          </div>
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
            <input type="text" class="form-control" id="exampleInputPassword1" name="phone" placeholder="Enter your Phone">
          </div>
          <div class="form-group">
                    <label class="inp-chk">
                          <input type="radio" name="group" id="group" checked value="Family" > Family
                      </label>
                      <label class="inp-chk">
                          <input type="radio" name="group" id="group" value="Friend"> Friend
                      </label>
                      <label class="inp-chk">
                          <input type="radio" name="group" id="group" value="Business"> Business
                      </label>
                      </div>

          <div>
          <div class="form-group">
              <label for="exampleInputPassword1">Notes</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="notes" >
              
          </div>  
          <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
</body>
</html>
