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
</head>
<body>
<section class="backg">
<div class="close1">
    <span id="ad">Add person</span>
    <i class="fas fa-times-circle" ></i> 
</div>

<div class="inputs">
<div>
    <h3 class="tit">First name:</h3>
    <input type="text" id="fname" name="fname" placeholder="Enter your first name">
</div>
<div>
    <h3 class="tit"></h3>
    <input type="text" id="fname" name="lname" placeholder="Enter your Last name:">
</div>
<div>
    <h3 class="tit">Email:</h3>
    <input type="text" id="fname" name="email" placeholder="Enter your Email:">
</div>
<div>
    <h3 class="tit">Adress:</h3>
    <input type="text" id="fname" name="adress" placeholder="Enter your Adress">
</div>
<div>
    <h3 class="tit">Phone:</h3>
    <input type="text" id="fname" name="phone" placeholder="Enter your Phone">
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
    <h3 class="tit">Notes</h3>
    <input type="text" id="notes" name="notes" >
</div> 
<div class="submitbut">
<button class="submit" type="submit" form="nameform" value="Envoyer">Submit</button>
</div>

</div>



</section>
</body>
</html>
