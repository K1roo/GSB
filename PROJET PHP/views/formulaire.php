<!DOCTYPE html>
  <html lang='fr'>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
background-image: url("icon.jpg"); 
background-repeat: no-repeat; 
text-align: center;
form border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 10%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  margin-left: 1px;
  text-align: ;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  text-align: center;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>


<form action="verification.php" method="POST">
          <h1>Connexion</h1> 

  <div class="container">
  <label><b> Login </b></label>
  <input type="text" placeholder="Entrer votre login" name="login" required> <br> <br> <br>


  <label><b>Mot de passe</b></label>
  <input type="password" placeholder="Entrer votre mot de passe" name="password" required> <br> <br>


          <input type="submit" id='submit' value='LOGIN' >
         
          
</form>