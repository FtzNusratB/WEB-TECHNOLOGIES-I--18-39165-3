<!DOCTYPE HTML>
<html>

<head>
  <title>Apply for Test</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style2.css">
  <style>

    body{
    background-image: url('Images/wp4323461.png');
    background-repeat: no-repeat;
    background-size: 1800px 1250px;
      }
    .form{
    font-family: "Roboto", sans-serif;
    background: #DAF7A6;
    max-width: 600px;
    margin: 33px auto 50px;
    padding: 10px 45px 30px 45px;
   box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-radius: 10px;
   }
  </style>
</head>
  
<body>
<div class="topnav">
  <a style="float: left;font-style: italic;font-size: 20px;">Blood Donation Form</a>
  <div style="float: right;">
  <a href="Dashboard.php">Dashboard</a>
  <a href="Profile.php">Profile</a>
  <a class="active" href="ApplyForm.php">Apply</a>
  <a href="Report.php">Report</a></div>
</div>
<?php

 $birthErr = $nameErr = $emailErr =$CityErr=$degreeErr=$BGErr= $genderErr = $websiteErr =$error= "";
 $birthDate = $birthMonth =$City=$degree=$BG= $birthYear = $name = $email = $gender = $comment = $website = "";
 $username=$password="";
 $usernameErr=$passwordErr="";
$confirmpassword="";
$confirmpasswordErr="";
$flag=1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $flag=0;
  } else {

       $name = test_input($_POST["name"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) {
         $nameErr = "Only letters and white space allowed";
         $flag=0;
       }
    else  {
             if(str_word_count($name)<2)
          {
           $nameErr = "Name must contains at least two words ";
           $flag=0;

          }
      else {
        $name = test_input($_POST["name"]);
      }
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $flag=0;
    }
  }
  if (empty($_POST["City"])) {
    $CityErr = "City is required";
  } else {
    $CityErr = test_input($_POST["City"]);
    
    if (!filter_var($City)) {
      $CityErr = " Cannot be empty.";
    }
  }

if (empty($_POST["degree"])) {
    $degreeErr= "Degree is required. you have to select at least two.";
  } 
  else {
    foreach ($_POST["degree"] as $key) {
      array_push($degree, $key);
    }
    if(count($degree)<2){
    $degreeErr = "At least two of them must be selected";
  }
  }


}
  
 

  if (empty($_POST["birthDate"]) || empty($_POST["birthMonth"]) || empty($_POST["birthYear"])) {
    $birthErr = "Date Month and Year is required";
    $flag=0;
  } else {

    $birthDate=test_input($_POST["birthDate"]);
    $birthMonth=test_input($_POST["birthMonth"]);
    $birthYear=test_input($_POST["birthYear"]);

    if(!is_numeric($birthDate))
    {
      $birthErr="Please input Numeric Date";
      $flag=0;
    }
    else {

      if(!is_numeric($birthMonth))
      {
          $birthErr="Please input Numeric month";
          $flag=0;
      }
      else {
        if(!is_numeric($birthYear))
        {
          $birthErr="Please input Numeric Year";
          $flag=0;
        }
        else {
          if($birthDate>31 || $birthDate<1)
          {
              $birthErr=" Input Date between 1 to 31";
              $flag=0;
          }
          else {
              if($birthMonth>12 || $birthMonth<1)
              {
                  $birthErr=" Input Month between 1 to 12";
                  $flag=0;
              }
              else {
                  if($birthYear>1998 || $birthYear<1953)
                  {
                    $birthErr=" Input Year between 1953 to 1998";
                    $flag=0;
                  }
                  else {
                    $birthErr=" ";
                  }
              }
          }

        }
      }
    }



    if (empty($_POST["username"])) {
      $usernameErr = "User Name is required";
      $flag=0;
    }
    else {
     $username = test_input($_POST["username"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$username)) {
         $usernameErr = "Only letters and white space allowed";
         $flag=0;
       }
       else {
         if(strlen($username)<2)
         {
            $usernameErr = "Name must contains at least two character ";
            $flag=0;
         }
       }
    }

    if(empty($_POST["password"]))
    {
      $passwordErr = "Password is required";
      $flag=0;
    }
    else {
      $password=test_input($_POST["password"]);
      if(strlen($password)<8)
      {
        $passwordErr="Password must not be less than eight (8) characters";
        $flag=0;
      }
      else {
        if(substr_count($password,"@")<1 || substr_count($password,"#")<1 || substr_count($password,"%")<1 || substr_count($password,"$")<1)
        {
          $passwordErr="Password must contain at least one of the special characters (@, #, $,%)";
          $flag=0;
        }
      }
    }

    if(empty($_POST["confirmpassword"]))
    {
      $confirmpasswordErr = "Confirm Password is required";
      $flag=0;
    }
    else {
      if(empty($_POST["password"]))
      {
        $confirmpasswordErr = "Password is required";
        $flag=0;
      }
      else {
        $confirmpassword=test_input($_POST["confirmpassword"]);

        if(strcmp($password,$confirmpassword))
        {
          $confirmpasswordErr="Password and confirm password have to be same";
          $flag=0;
        }
      }
    }
    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
      $flag=0;
    } else {
      $gender = test_input($_POST["gender"]);
    }
      }
      ?>

 <br>
    <div><?php include 'Images/AccountDesign.php';?></div>
    <div class="form">
     <form method="post" action="controller/ApplyFormController.php">
      
      <h2><span style="font-weight: bold;font-size: 30px;color: #2F4F4F;">APPLICATION FORM</span></h2><hr><br>
            
            Name: <input type="text" name="name" placeholder="Enter Your Name" size="25">
            <br>
            <br>
            E-mail: <input type="text" name="email" placeholder="Enter your Email" size="25">
            
            <br>
            <br>
           Phone Number: <input type="text" name="phone" placeholder="Enter your phone number" size="30">
            
            <br>
            <br>

            Address:
                <input type="text" name="address" size="40">
                
                <br>
                <br><br>
<div class="form-group">
              <label for="city">City:</label>
              <select name="city" id="city" class="form-control demo-default" >
  <option value="">-- Select --</option><optgroup title="Dhaka" label="&raquo; Dhaka"></optgroup><option value="Dhanmondi" >Dhanmondi</option><option value="Bashundara" >Bashundara</option><option value="Gulshan" >Gulshan</option><option value="Mirpur" >Mirpur</option><option value="shamoli" >shamoli</option><option value="Khilgaon" >Khilgoan</option><option value="Uttara" >Uttara</option><option value="Banani" >Banani</option>
  <?php echo $CityErr;?></span>
  <br><br> -->
  Date of Birth: <input type="text" size="1" placeholder="dd" name="birthDate" value="<?php echo $birthDate; ?>"> /
  <input type="text" size="1" placeholder="mm" name="birthMonth" value="<?php echo $birthMonth; ?>"> /
  <input type="text" size="2" placeholder="yyyy" name="birthYear" value="<?php echo $birthYear; ?>">
  <span class="error">* <?php echo $birthErr;?></span>
  <br><br>
  Blood Group:
        <label for="BG"></label>
        <select id="BG" name="BG">
            <option value="">Select any one</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select><span class="error">* <?php echo $BGErr;?></span>
            <br>
                 Gender:&nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" value="female">Female
                &nbsp;&nbsp;<input type="radio" name="gender" value="male">Male
                &nbsp;&nbsp;<input type="radio" name="gender" value="other">Other
                <br>
            
            <hr>
          
            <input style="color: #C70039 " type="submit" name="submit" value="Submit"> <input style="color: #C70039 " type="reset" value="Reset"><br><br>

</form></div>
<div><?php include 'Images/footer.php';?></div>
</div>
</body>
</html>