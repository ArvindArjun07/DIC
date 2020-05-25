<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    <style>
        a{
            border: none;
            padding: 15px 25px;
            text-align: center;
            font-size: 25px;
            cursor: pointer;
            float: right;
            color: black;
            text-decoration: none;
            
        }
        a:hover{
            color: #333;
        }
        
        th,td,table{
            border: 2px solid black;
            border-collapse: collapse;
            
        }
        table{
            margin: 0 auto ;
        }
        td,th{
            padding:5px;
        }
        body{
            background-color: powderblue;
        }
        </style>
    </head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
    
        
    <div class="body">
    <?php
    if(isset($_POST['login']) and empty($_SESSION['username']))
    {  //if user logged gets placed here

        $username = $_POST['username'];
        $password = $_POST['password'];
        $dbc = mysqli_connect('localhost','root','arjun007','dic') or die("Couldn't connect to database");

        $query = "select * from login where username='$username' and password='$password'";
        $result = mysqli_query($dbc,$query) or die("Can't issue query");
        $row = mysqli_fetch_array($result);
        if(!empty($row['username']) and !empty($row['password']))
        { 
            $_SESSION['username'] = $username; 
            $query1="select aadhar from disha1" ;
            $result1=mysqli_query($dbc,$query1)or die("couldnt issue query");?>
            <table><tr><th>Name of the Promoter</th><th>Aadhar Number</th></tr>
            <?php
            foreach($result1 as $rows)
            {
                $aadhar=$rows['aadhar'];
                $query2="SELECT username,aadhar
                FROM disha1
                WHERE aadhar='$aadhar'";
                $result2 = mysqli_query($dbc,$query2) or die("errorrrrr");
                
                $row1 = mysqli_fetch_array($result2);
            ?>
            <tr>
                <td><a onmouseover="this.style.color='#00F'" onMouseOut="this.style.color='#000'" href="details.php?aadhar=<?php echo $row1['aadhar']?>"><?php echo $row1['username']?></a></td><td><a onmouseover="this.style.color='#00F'" onMouseOut="this.style.color='#000'" href="details.php?aadhar=<?php echo $row1['aadhar']?>"><?php echo $row1['aadhar']?></a></td></tr>
                
                
            
            <?php    
            }?>
            </table>
    <?php
        }
        
        else
        {
            echo "ENTER CORRECT USERNAME AND PASSWORD ";
        }
    }
    else if(!empty($_SESSION['username']))
        {
            $dbc = mysqli_connect('localhost','root','arjun007','dic') or die("Couldn't connect to database");
            $username = $_SESSION['username'];
            $query = "select * from login where username='$username'";
            $result = mysqli_query($dbc,$query) or die("Can't issue query");
            $row = mysqli_fetch_array($result);
            $query2="select aadhar from disha1" ;
            $result1=mysqli_query($dbc,$query2)or die("couldnt issue query");?>
            <table><tr><th>Name of the Promoter</th><th>Aadhar Number</th></tr>
            <?php
            foreach($result1 as $rows)
            {
                $aadhar=$rows['aadhar'];
                $query1="SELECT username,aadhar
                FROM disha1
                WHERE aadhar='$aadhar'";
                $result2 = mysqli_query($dbc,$query1) or die("errorrrrrr");
                $row1 = mysqli_fetch_array($result2);
            ?>
            <tr>
                <td><a onmouseover="this.style.color='#00F'" onMouseOut="this.style.color='#000'" href="details.php?aadhar=<?php echo $row1['aadhar']?>"><?php echo $row1['username']?></a></td><td><a onmouseover="this.style.color='#00F'" onMouseOut="this.style.color='#000'" href="details.php?aadhar=<?php echo $row1['aadhar']?>"><?php echo $row1['aadhar']?></a></td></tr>
                
            
            <?php    
            }
            ?>
    
        </table>
    <?php    
        }
    else{
        echo "OOPS!!! YOU ARE SUPPOSED TO LOGIN";
    }
    ?>
    </div>
    </body>
</html>