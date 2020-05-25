<?php
session_start();
?>
<html>
    <link rel="stylesheet" href="style.css">
    <head>
    <style>
        th{
            text-align: left;
        }
        
    .input-field input{
            border: 1px solid black;
            border-radius: 4px;
	        display:inline-block;
            font-size: 20px;
            padding: 7px 9px;
            margin: 0;
            transition: all .3s;
            box-sizing: border-box;  
        }
        .input-field input[type=submit]
        {
            width: 50%;
            margin-top: 80px;
            font-size: 30px;
            color: white;
            background-color: black;
        }
        .input-field input:focus{
            border: 2px solid black;
        }
        .edit{
            width:100px;
            position:relative;
            left:4cm;
        }
            body {
            
            font-size: 30px;
            font-style: arial;
                border: solid;
                background-color: powderblue;
        } 
.body{
            padding-left: 150px;
            padding-right: 150px;
        }
        a{
            border: none;
            padding: 15px 25px;
            text-align: center;
            font-size: 25px;
            cursor: pointer;
            float: right;
            color: white;
            text-decoration: none;
            
        }
        a:hover{
            color: #333;
        }
        a.active{
            background-color: white;
            color: black;
            border-top: 1px solid black;
        }
        .nav{
            background-color: black;
            overflow: hidden;
             list-style-type: none;
        }
        </style></head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <body>
        <nav>
        <ul class="nav">
            <li><a href="logout.php">LOGOUT</a></li>
        <!--    <li><a href="contact.html">CONTACT</a></li>
            <li><a href="about.php">ABOUT US</a></li>-->
            <li><a href="dic.html">HOME</a></li> </ul>
    </nav>
    <div class="body">
        
        
    <?php
$dbc = mysqli_connect('localhost','root','arjun007','dic') or die("Couldn't connect to database");

function display_profile()
{
    $aadhar=$_GET['aadhar'];
    $data=mysqli_query($GLOBALS['dbc'],"Select * from disha1 where aadhar=$aadhar");
    if($data)
    {
        foreach($data as $details)
        {
            ?>
       <form action="details.php?aadhar=<?php echo $aadhar?>"  class="input-field" method="post">
        <div class="container" >
         
            
            <form method="post" action="demo.php" >
              &nbsp; Name of the participant : <input type ="text" name ="uname" placeholder="ENTER NAME" value="<?php echo $details['username']; ?>"><br><br>
              &nbsp; Address : <br>
              &nbsp; <textarea rows="4" cols="50" name="address" style="border:1px solid black;font-size:25px;"><?php echo $details['address']; ?></textarea><br><br>
              &nbsp; Mobile No : <input type="text" placeholder="phone"  value="<?php echo $details['phone1']; ?>" name ="phone1"><br><br>
              &nbsp; Alternate contact No : <input type="text" placeholder="phone"  value="<?php echo $details['phone2']; ?>" name="phone2"><br><br>
              &nbsp; E-mail ID :   <input type="text" placeholder="Enter E-mail ID " value="<?php echo $details['email']; ?>" name="email"><br><br>
              &nbsp; Aadhaar No :  <input type="text" placeholder="Aadhaar Number" value="<?php echo $details['aadhar']; ?>" name="aadhar"><br><br>
              &nbsp; Gender :
            
              &nbsp; <input type="text" name="gender" value="<?php echo $details['gender']; ?>"> <br><br>
              &nbsp; Rural/Urban : 
              &nbsp; <input type="text" name ="region" value="<?php echo $details['region']; ?>"> <br><br>
              &nbsp; Dtae of Birth : <input type="date" name="dob" value="<?php echo $details['dob']; ?>"> <br>
              &nbsp; Age : <input type="number" name="age" value="<?php echo $details['age']; ?>"><br><br>
              &nbsp; Educational Qualification :
              &nbsp; <input type="text" name="education[0]" value="<?php echo $details['education']; ?>" > <br><br>
              &nbsp; Caste : <input type="text" name="caste" value="<?php echo $details['caste']; ?>"> <br>
              
              &nbsp; Occupation / Experience, if any :<br>
              &nbsp; <textarea style="border:1px solid black;font-size:25px;"rows="4" cols="70"><?php echo $details['experience']; ?></textarea><br><br>
              &nbsp; You Are Interested In :

              &nbsp; <input type="text" value="<?php echo $details['interest']; ?>"> <br> <br>
              &nbsp;&nbsp;Parents / Spouse Annual Income :  <input type="number" placeholder="Rupees"  value="<?php echo $details['rupees']; ?>" ><br><br>
              &nbsp;&nbsp;Any Other Information Willing to furnish : <input type="text"  name="other_info" value="<?php echo $details['other_info']; ?> "><br><br><br>
                                 <!-- <h3> SIGNATURE OF THE PARTICIPANT </h3>--->
                         </form>
        </div>
        </form>
<?php
        }
    }
}
if(!isset($_GET['aadhar']))
{
    echo "Restricted page!!!!!! You are supposed to Login first......";
}
else{
        display_profile();
            
}
?>
        </div>
    </body>
</html>