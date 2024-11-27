<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body{
            padding: 20px;
        }
        #outer{
            height: 92vh;
            width: 100%;
            background-color: black;
            border-radius: 20px;
            box-shadow: 0px 0px 30px black;
        }
        #right{
            height: 100%;
            width: 65%;
            background-color: whitesmoke;
            float: left;
            border-radius: 18px 0px 0px 18px;
            animation: bgrcolor 2s  linear infinite;
        }
        @keyframes bgrcolor {
        0%{
            background-color: #F9ECD9;
            
        }
        20%{
            background-color: #F7E3CC;
           
        }
        40%{
            background-color: #F7CEE2 ;
           
        }
        60%{
            background-color: #CCCAF0 ;
           
        }
        80%{
            background-color: #CFDFEF;
           
        }
        100%{
            background-color: #F9ECD9;
            
        }
    }
    #right h1{
            margin-top: -20px;
            font-size: 55px;
            text-align: center;
            font-family: Montserrat ExtraBold;
            text-decoration: underline;
        }
    #left{
            height: 100%;
            width: 35%;
            float: left;
            border-radius: 0px 18px 18px 0px;
            animation: bgcolor 2s  linear infinite;
            text-align: center;
            font-size: 30px;
            font-family: Georgia, Arial and Helvetica;
        }
        @keyframes bgcolor {
        0%{
            background-color: #CFDFEF;
            
        }
        20%{
            background-color: #F9ECD9 ;
           
        }
        40%{
            background-color: #F7E3CC;
           
        }
        60%{
            background-color: #F7CEE2;
           
        }
        80%{
            background-color: #CCCAF0;
           
        }
        100%{
            background-color: #CFDFEF;
            
        }
    }
    #left h1{
            margin-top: 45%;
            font-size: 55px;
            font-family: Montserrat ExtraBold;
        }
    input,select{
        height: 35px;
        width: 450px;
        border: 1px solid white;
        background-color: #03001C;
        border-radius: 10px;
        color: white;
        margin-left: 250px;
        font-family:'Times New Roman', Times, serif;
        text-align: center;
        font-size: 20px;
        box-shadow: 0px 5px 5px black;
    }
    input::placeholder{
        color: white;
        text-align: center;
        font-size: 20px;
    }
    #btn{
        height: 35px;
        width: 150px;
        margin-top: 25px;
        margin-left:400px;
        background-color: #33b249;
        border: 0px;
        cursor: pointer;
        box-shadow: 4px 4px 0px black;
        border-radius: 2px;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    #btn:active{
        transform: translateX(4px) translateY(4px);
        box-shadow: 0px 0px 0px darkgreen;
    }
    #sign{
        width: 150px;
        margin-left: 10px;
        background-color: #a881af;
        border: 0px;
        box-shadow: 0px 0px 0px white;
        font-weight: bold;
        border-radius: 20px;
        transition: 0.5s all ease;      
    }
    #sign:active{
        scale: 0.8;
    }
    #footer{
        background-color:black;
        width: 100%;
        height: 50px;
        position: relative;
        top:-50px;
        display: grid;
        place-items: center;
        border-radius: 0px 0px 18px 18px;
    }
    .btn{
            border-radius: 1.25rem;
            width: 9.375rem;
            background-color: #5dbea3;
            color: white;
            font-weight: bolder;
            font-size: 1.125rem;
            cursor: pointer;
            border: 0px;
            box-shadow: 0.25rem 0.25rem 0px forestgreen;
            transition: transform 0.3s , box-shadow 0.3s;
        }
        .btn:active{
            transform: translateX(0.25rem) translateY(0.25rem);
            box-shadow: 0px 0px 0px darkgreen;
        }
        #home{
            margin-top: 30px;
            margin-left: 438px;
            width: 5rem;
            height: 1.25rem;
            border-radius: 0px;
            background-color: #5783db;
            box-shadow: 0.25rem 0.25rem 0px darkblue;
            font-size: 0.813rem;
        }
        #home:active{
            transform: translateX(0.25rem) translateY(0.25rem);
            box-shadow: 0px 0px 0px darkblue;
        }
    </style>
</head>
<body>
    <div id="outer">
        <div id="right">
        <h1 align="center" style="font-size: 100px; margin-top: 1px;"><i class="bi bi-person-circle"></i></h1>
            <h1>Login To Your Voter <span style="font-weight: bold;">/</span> Group Account</h1>
            <!-- <hr style="margin: 5px; background-color:black;"> -->
    <form action="logcode.php" method="post">
        <input type="text" name="mobile" placeholder="Enter your Mobile Number"/>
        <br/>
        <br/>
        <input type="password" name="pass" placeholder="Enter your Password"/>
        <br/>
        <br/>
        <select name="role">
            <option value="">--Select Role--</option>
            <option value="1">Voter</option>
            <option value="2">Group</option>
        </select>
        <br/>
        <br/>
        <input type="submit" value="LogIn" id="btn"/>

    </form>
    <input type="button" value="HOME" onclick="window.location.href='index.php'" class="btn" id="home"/>
    </div>
    <div id="left">
    <h2 align="center" style="position:absolute; font-size:100px; top:50px; right:240px;"><i class="bi bi-patch-question"></i></h2>
            <h1>New Here?</h1>
            <pre style="font-family: Georgia, Arial and Helvetica;">Sign Up And Discover A Great
Amount Of New Opportunties! Good Luck !</pre>
                    <input type="button" value="SignUp" onclick="window.location.href='register.php'" id="sign"/>
    </div>
    <div id="footer">
        <p style="color:white; font-family:sans serif, arial or verdana; font-size:18px">Designed And Developed By <b>TECHNIFY</b></p>
    </div>
    </div>
</body>
</html>