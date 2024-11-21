<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/type.css">
    <style>
        *{
            font-family: Century Gothic, and Cinzel;
            /* color: white; */
        }
        body{
            display: grid;
            padding: 1.25rem;
        }
        #left{
            margin: 0;
        }
        #box{
            height: 92vh;
            width: 100%;
            /* background-color: black; */
            border-radius: 1.25rem;
            box-shadow: 0px 0px 1.25rem black;
        }
        #right{
            float: right;
            width: 70%;
            background-color: pink;
            border-radius: 0px 1.125rem 1.125rem 0px;
            height: 100%;
            /* margin-left: 100px; */
        }
        input,textarea,select{
            margin-top: 2.5rem;
            width: 15.625rem;
            border-radius: 1.875rem;
            height: 2.188rem;
            border: 0px;
            text-align: center;
            font-size: 1.125rem;
        }
        input,textarea,select::placeholder{
            text-align: center;
            font-weight: bold;
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
        #footer{
            background-color:black;
        width: 100%;
        height: 3.125rem;
        position: relative;
        top:-3.125rem;
        display: grid;
        place-items: center;
        border-radius: 0px 0px 1.125rem 1.125rem;
        color: white;
        }
        #home{
            margin-top: 0.063rem;
            margin-left: 31.875rem;
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
        #left{
            height: 100%;
            width: 30%;
            float: left;
            border-radius: 18px 0px 0px 18px;
        }
        #left img{
            height: 100%;
            width: 100%;
            border-radius: 18px 0px 0px 18px;
            position: relative;
        }
        .text{
            position:relative;
            bottom: 850px;

        }
        
    </style>
</head>
<body>
    
    <div id="box">
        <div id="left">
            <img src="images/gg.jpeg" alt="">
            <div class="text">
                <h1 class="heading-r" align="center">ONLINE VOTING SYSTEM</h1>
                <hr style="position:relative; top:-32px;border:2px dashed black;">
                <p align="center" style=" font-size:25px;">Register As A Voter <span style="font-weight: bold;">/</span> Group</p>
                <p align="center" style="font-size:25px;">And</p>
                <img src="images/vote.jpg" alt="" style="border-radius:50%; width:250px; margin-left:95px">
            </div>
        </div>
        <div id="right">
            <h1 align="center">REGISTRATION FORM</h1>
            <hr style="border:2px dashed black;">
         <form action="code.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Enter your Name" style="margin-left: 17.188rem;"/>
        <input type="text" name="mobile" placeholder="Enter Your Mobile Number" style="margin-left: 1.25rem;"/>
        <br/>
        <br/>
        <input type="password" name="pass" placeholder="Create your Password" style="width: 26.875rem; margin-left:20.625rem; margin-top:1.25rem"/>
        <input type="password" name="pass" placeholder="Confirm Password" style="width: 26.875rem; margin-left:20.625rem; margin-top:1.25rem"/>
        <br/>
        <br/>
        <textarea name="address" placeholder="Enter Your Address" style="width: 26.875rem; margin-left:20.625rem; height: 3.125rem; margin-top:1.25rem;"></textarea>
        <br/>
        <div style="margin-top:15px; margin-left: 25rem; font-weight: bold; display: flex; align-items: center;">
        <span style="margin-right: 0.625rem;">Upload Pic:</span>
        <label 
            style="
                display: inline-block; 
                padding: 10px 20px; 
                background-color: #007bff; 
                color: white; 
                font-weight: bold; 
                border: none; 
                border-radius: 5px; 
                cursor: pointer; 
                text-align: center;
            ">
            Upload
            <input 
                type="file" 
                name="photo" 
                style="display: none;" 
            />
        </label>
    </div>
        <br/>
        <br/>
        <select name="role" style="margin-left: 28.125rem; width:12.5rem; margin-top:0.625rem;">
            <option value="">--Select Role--</option>
            <option value="1">Voter</option>
            <option value="2">Group</option>
        </select>
        <br/>
        <br/>
        <input type="submit" value="Submit" style="margin-left: 29.688rem;  margin-top:0.625rem;" class="btn"/>
        </form>
        <p align="center" style="margin-top: 1.25rem; margin-left:3.125rem;">Already a User? <a href="login.php">LogIn</a></p>
         <input type="button" value="HOME" onclick="window.location.href='index.php'" class="btn" id="home"/> 
        </div>
        <div id="footer">
            <p>Designed And Developed By <b>TECHNIFY</b></p>
        </div>
    </div>
    
   
</body>
</html>