<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/fontawesome.css">
        <link rel="stylesheet" href="js/bootstrap.bundle.js">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    </head>
    <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    #ff {
        font-family: sans serif, arial or verdana;
    }

    body {
        background-color: #1b1b1b;
        animation: bgcolor 5s linear infinite;
    }

    body a {
        text-decoration: none;
        color: black;
    }

    #heading {
        width: 100%;
        color: white;
        /* background-color: #1b1b1b; */
    }

    #heading h1 {
        box-shadow: 0px 5px 20px black;
        border-radius: 10px;
        background-color: #1b1b1b;
    }

    #lamp {
        margin: auto;
        position: relative;
        height: 100px;
        width: 200px;
        filter: drop-shadow(0px 15px 10px black);
    }

    .log-card {
        margin-top: 50px;
        height: 250px;
        width: 100%;
        /* background: linear-gradient(to bottom right, red, blue); */
        border-radius: 10px;
        box-shadow: 0px 8px 5px gray;
        /* animation: bgcolor 5s  linear infinite; */
        transition: 0.5s all ease-in;
        color: whitesmoke;
        background-image: url(images/black.avif);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    @keyframes bgcolor {
        0% {
            background-color: #CFDFEF;

        }

        20% {
            background-color: #F9ECD9;

        }

        40% {
            background-color: #F7E3CC;

        }

        60% {
            background-color: #F7CEE2;

        }

        80% {
            background-color: #CCCAF0;

        }

        100% {
            background-color: #CFDFEF;

        }
    }

    .log-card:hover {
        box-shadow: 0px 8px 8px green;
        height: 290px;
        width: 110%;
        margin-left: -20px;
        transition: 0.5s all ease-out;
        cursor: pointer;
        font-size: 40px;
    }

    #purple:hover {
        box-shadow: 0px 8px 8px purple;
    }

    #orange:hover {
        box-shadow: 0px 8px 8px orange;
    }

    #ff p {
        font-size: 35px;
    }

    #ff .log-card p {

        transition: 0.5s all ease-in;
    }

    #ff .log-card:hover p {
        font-size: 45px;
        transition: 0.5s all ease-out;
    }

    #footer {
        background-color: black;
        width: 100%;
        height: 50px;
        position: fixed;
        top: 737px;
        display: grid;
        place-items: center;
    }
</style>

    <body>

        <div class="row container-fluid m-0 p-0">
            <img src="images/lamp.png" alt id="lamp">
            <div id="heading">
                <h1 align="center"
                    style="font-size: 55px; font-family:Algerian;">ONLINE VOTING
                    SYSTEM <i
                        class="bi bi-hand-index"></i></h1>
            </div>
            <div class="row m-0 p-0" id="ff">
                <div class="col-sm-4 p-5">
                    <a href="admin.php">
                        <div class="log-card">
                            <h1 align="center" style="font-size: 100px;"><i
                                    class="bi bi-person-video3"></i></h1>
                            <p align="center">ADMIN LOGIN</p>
                        </div>
                    </a>
                </div>

                <div class="col-sm-4 p-5">
                    <a href="register.php">
                        <div class="log-card" id="purple">
                            <h1 align="center" style="font-size: 100px;"><i
                                    class="bi bi-person-vcard"></i></h1>
                            <p align="center">REGISTRATION AS VOTER <span
                                    style="font-weight: bold;">/</span>
                                GROUP</p>
                        </div>
                    </a>
                </div>

                <div class="col-sm-4 p-5">
                    <a href="login.php">
                        <div class="log-card" id="orange">
                            <h1 align="center" style="font-size: 100px;"><i
                                    class="bi bi-door-open"></i></h1>
                            <p align="center">LOGIN AS VOTER <span
                                    style="font-weight: bold;">/</span>
                                GROUP</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div id="footer">
            <p
                style="color:white; font-family:sans serif, arial or verdana; font-size:18px">Designed
                And Developed By
                <b>TECHNIFY</b>
            </p>
        </div>
    </body>

</html>