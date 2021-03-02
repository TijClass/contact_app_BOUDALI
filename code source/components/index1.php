
 <?php include 'db_connection.php'; 
$conn = OpenCon ();  
// echo "Connecté avec succès" ; 

if (isset($_POST['login'])) {
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  $sql = "SELECT * FROM users WHERE email='$email' AND password ='$pass'";
  $result = mysqli_query($conn, $sql);
  if (!$row = mysqli_fetch_assoc($result)) {
    echo "Your username or password is incorrect!";
  } else {
    header("location:logout.php");
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
 <body>
 <section class="backg">
 <div class="firsttitle">
 <img src="../imgs/ivo.PNG" class="icn"></img>
   <h2 style="font-family: Ubuntu">WELCOME USER</h2>
  </div>

 <div class="container"> 
 <div class="left-side">
    <div><h3>WELCOME Sub_title</h3></div>
    <div><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Quis ratione fuga perferendis iure quisquam quibusdam similique in eum. 
        Maiores omnis eveniet consequuntur reprehenderit sit, 
        atque suscipit optio consequatur nisi doloremque.
       Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Quis ratione fuga .</p></div>
   <div> <a href="./more.php" id="readmor">Read more</a></div>
 </div>
 <div class="right-side">
 <div><h3>Bienvenue</h3></div>
 <div class="forms">
    <form class="login_form" action="index1.php" method="POST">
      <label for="email">Email :</label>
      <input type="email" id="email" name="email" class="input-log">
      <label for="pass">Password :</label>  
      <input type="password" id="pass" name="pass" class="input-log">
      <div class="logins">
      <input type="submit" value="Login" name="login" id="login">
      <input type="checkbox" id="remember" name="rember" value="re">
      <label for="remember">Remember me</label>
          </div>
    </form>

  </div>



 </div>

 
 </div>
 </section> 
 </body>
 </html>