<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;
font-weight: bold;
font-family: 'Montserrat';
}
</style>
</head>
<body>







<p><span class="error"> Required field</span></p>
<form style="border:5px; border-style:solid; border-color:#009270;background-color: #E3E6E3; padding: 1em;" method="post" action="../Controller/signupStudentController.php">
  Name: <input type="text" name="name" >
  <br><br>
   E-mail: <input type="text" name="email">
  <br><br>
  User Name: <input type="text" name="username" >
  <br><br>
  Password: <input type="text" name="password" >
  <br><br>

  Comfirm Password: <input type="text" name="confirmpassword" >
  <br><br>

  Date of Birth: <input type="text" size="1" placeholder="dd" name="birthDate" > /
  <input type="text" size="1" placeholder="mm" name="birthMonth" > /
  <input type="text" size="2" placeholder="yyyy" name="birthYear" >

  <br><br>
  Gender:
  <input type="radio" name="gender"  value="female">Female
  <input type="radio" name="gender"  value="male">Male
  <input type="radio" name="gender"  value="other">Other
  <br><br>

  <input style="color:red" type="submit" name="submit" value="Submit">
</form>






</body>
</html>
