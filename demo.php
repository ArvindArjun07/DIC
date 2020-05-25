<?php

  $dbc = mysqli_connect('localhost', 'root', 'arjun007', 'dic') or die("couldn't connect to DB  ");
  mysqli_select_db($dbc,"dic");

  /*  function fill_empty_numeric($field) {
        if(empty($field))
            return -1;
        else
            return $field;
    }
    
    function fill_empty_object($field) {
        if(empty($field))
            return 'NULL';
        else
            return $field;
    }*/

  if(isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $address = $_POST['address'];
    $phone1 = $_POST['phone1'];
    $phone2 = $_POST['phone2'];
    $email = $_POST['email'];
    $aadhar = $_POST['aadhar'];
    $dob = $_POST['dob'];
#fill_empty_numeric
    $age = $_POST['age'];
    $experience = $_POST['experience'];
    $rupees = $_POST['rupees'];
    $other_info = $_POST['other_info'];

    $caste = empty($_POST['caste']) ? 'Not Mentioned' : $_POST['caste'];
    $gender = empty($_POST['gender']) ? 'Not Mentioned' : $_POST['gender'];
    $region = empty($_POST['region']) ? 'Not Mentioned' : $_POST['region'];

    if(!empty($_POST['education']))
      $educationArray = implode(", ", $_POST['education']);
    else
      $educationArray = 'Not Mentioned';

    if(!empty($_POST['interest']))
      $interestArray = implode(", ", $_POST['interest']);
    else
      $interestArray = 'Not Mentioned';

    $query = "INSERT INTO disha1 VALUES('$uname','$address','$phone1',' $phone2','$email','$aadhar','$gender','$region','$dob','$age','$educationArray','$caste','$experience','$interestArray',$rupees,'$other_info')"; 
    

    $query_run = mysqli_query($dbc,$query) or die("Error");

    if($query_run){
?>
       <style>

        body{
            border: solid;
             font-size: 150%;
            background-color: powderblue;
           }
        h1{
            text-align: center;
        }
         h2{
            text-align: center;
        }
        h3{
            text-align: center;
        }
        input{
            text-align: center;
        }


    </style>
      <body>
        <h1>Government of Karnataka </h1>
        <h2>Department of Skill Development, Entrepreneurship and Livehood, Dovelopment if Industries & commerce, UNDP & <br> centre for Entrepreneureship Development of Karnataka (CEDOK), Dharward. </h2>
        <h1><u>REGISTRATION FORM - DISHA- READY/STEADY</u></h1>
        <div class="container" >
         
            
            <form method="post" action="demo.php" >
              &nbsp; Name of the participant : <input type ="text" name ="uname" placeholder="ENTER NAME" value="<?php echo $uname; ?>"><br><br>
              &nbsp; Address : <br>
              &nbsp; <textarea rows="4" cols="50" name="address"><?php echo $address; ?></textarea><br><br>
              &nbsp; Mobile No : <input type="text" placeholder="phone"  value="<?php echo $phone1; ?>" name ="phone1"><br><br>
              &nbsp; Alternate contact No : <input type="text" placeholder="phone"  value="<?php echo $phone2; ?>" name="phone2"><br><br>
              &nbsp; E-mail ID :   <input type="text" placeholder="Enter E-mail ID " value="<?php echo $email; ?>" name="email"><br><br>
              &nbsp; Aadhaar No :  <input type="text" placeholder="Aadhaar Number" value="<?php echo $aadhar; ?>" name="aadhar"><br><br>
              &nbsp; Gender :
            
              &nbsp; <input type="text" name="gender" value="<?php echo $gender; ?>"> <br><br>
              &nbsp; Rural/Urban : 
              &nbsp; <input type="text" name ="region" value="<?php echo $region; ?>"> <br><br>
              &nbsp; Dtae of Birth : <input type="date" name="dob" value="<?php echo $dob; ?>"> <br>
              &nbsp; Age : <input type="number" name="age" value="<?php echo $age; ?>"><br><br>
              &nbsp; Educational Qualification :
              &nbsp; <input type="text" name="education[0]" value="<?php echo $educationArray; ?>" > <br><br>
              &nbsp; Caste : <input type="text" name="caste" value="<?php echo $caste; ?>"> <br>
              
              &nbsp; Occupation / Experience, if any :<br>
              &nbsp; <textarea rows="4" cols="70"><?php echo $experience; ?></textarea><br><br>
              &nbsp; You Are Interested In :

              &nbsp; <input type="text" value="<?php echo $interestArray; ?>"> <br> <br>
              &nbsp;&nbsp;Parents / Spouse Annual Income :  <input type="number" placeholder="Rupees"  value=<?php echo $rupees; ?> ><br><br>
              &nbsp;&nbsp;Any Other Information Willing to furnish : <input type="text"  name="other_info" value="<?php echo $other_info; ?> "><br><br><br>
                                 <!-- <h3> SIGNATURE OF THE PARTICIPANT </h3>--->
                         </form>
        </div>
    </body>

<?php
    } else {
        echo "unsuccessfull";
    }
  } else{
    echo"Restricted Page!!!";
  }
?>
