<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style >
      .error {color: #FF0000;}

    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>





    <form style="border:3px; border-style:solid; border-color:#009270;background-color: #E3E6E3; padding: 1em;" method="post" action="../Controller/loginStudentController.php">



        User Name: <input type="text" name="username">
        <br><br>
        Password: <input type="text" name="password">

        <br><br>
        <br>
        <input type="checkbox"  name="remember" value="remembered">
         <label style="color:green" for="remember">Remember Me</label>
         <br><br>
         <input style="color:red" type="submit" name="submit" value="Submit">
          <meta ><a href ="forget password.php">Forget Password? </a></meta>

    </form>

  </body>
</html>
