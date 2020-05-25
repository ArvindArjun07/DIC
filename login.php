<?php
session_start();
?>
<html>
<head>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.1/css/all.css' integrity='sha384-
    5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz'crossorigin='anonymous'>
    <link rel="stylesheet" href="style.css">
    <style>
         body {
            
            font-size: 20px;
            font-style: arial;
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
        .form-validation input
{ 
	border: 1px solid #CCCCCC;
	display:inline-block;
    font-size: 15px;
    padding: 7px 9px;
    margin: 0;
    transition: all .3s;
    
} 
.form-validation label {
	display: inline-block;
	width:100px;
}
.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
    margin-bottom: 15px;
    padding-left: 100px;
}
        form{
            width: 500px;
            margin: 0 auto;
        }
        input{
            border-radius: 4px;
        }
        
        i{
            color: black;
        }
        input[type=submit]{
            width:100px;
            position:relative;
            left:4cm;
            cursor: pointer;
            font-size: 20px;
            color: white;
            background-color: black;
        }
        fieldset{
            border: 2px solid black;
        }
           </style>
    </head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <body>
        <nav>
        <ul class="nav">
            <li><a href="login.php" class="active">ADMIN LOGIN</a></li>
            <li><a href="contact.html">CONTACT</a></li>
            <li><a href="about.php">ABOUT US</a></li>
            <li><a href="dic.html">HOME</a></li></ul>
    </nav>
        <div class="body">
    <form class=form-validation action="homepage.php" method="post">
        <fieldset><legend><h3>Login</h3></legend>
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="text" placeholder="Username" name="username" required title="Enter username"
                       maxlength="20">
       
            </div>
                <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" placeholder="Password" name="password" required title="Enter password"
                       maxlength="20">
                </div>
                <input type="submit" title="login"  name="login" value="Login">
        </fieldset>
             </form>
        </div></body></html>