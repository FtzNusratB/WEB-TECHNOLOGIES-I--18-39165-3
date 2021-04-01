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



    <p style="color:red"><h3>Change Password</h3></p>
    <form style="border:3px; border-style:solid; border-color:#009270;background-color: #E6E3E6; padding: 1em;" method="post" action="../Controller/changePasswordStudentController.php">
        Current Password: <input type="text" name="cpassword" >
        <br><br>
        <span style="color:purple">New Password:</span>
        <input type="text" name="npassword" >
        <br><br>
        <span style="color:green">Retype New Password:</span>
        <input type="text" name="rnpassword" >
        <br><br>
        <input style="color:red" type="submit" name="submit" value="Submit">
        <br><br>


    </form>

    
  </body>
</html>
