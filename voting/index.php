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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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

    .stopanime {
        animation: none;
    }
    .snow{
        position: absolute;
        z-index: -1;
    }
</style>

<body>
<canvas class="snow" id="snowCanvas"></canvas>
    <div class="row container-fluid m-0 p-0">
    
        <img class="" onclick="active()" src="images/lamp.png" alt id="lamp">
        <div id="heading">
            <h1 align="center" style="font-size: 55px; font-family:Algerian;">ONLINE VOTING
                SYSTEM <i class="bi bi-hand-index"></i></h1>
        </div>
        <div class="row m-0 p-0" id="ff">
            <div class="col-sm-4 p-5">
                <a href="admin.php">
                    <div class="log-card">
                        <h1 align="center" style="font-size: 100px;"><i class="bi bi-person-video3"></i></h1>
                        <p align="center">ADMIN LOGIN</p>
                    </div>
                </a>
            </div>

            <div class="col-sm-4 p-5">
                <a href="register.php">
                    <div class="log-card" id="purple">
                        <h1 align="center" style="font-size: 100px;"><i class="bi bi-person-vcard"></i></h1>
                        <p align="center">REGISTRATION AS VOTER <span style="font-weight: bold;">/</span>
                            GROUP</p>
                    </div>
                </a>
            </div>

            <div class="col-sm-4 p-5">
                <a href="login.php">
                    <div class="log-card" id="orange">
                        <h1 align="center" style="font-size: 100px;"><i class="bi bi-door-open"></i></h1>
                        <p align="center">LOGIN AS VOTER <span style="font-weight: bold;">/</span>
                            GROUP</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div id="footer">
        <p style="color:white; font-family:sans serif, arial or verdana; font-size:18px">Designed
            And Developed By
            <b>TECHNIFY</b>
        </p>
    </div>
    
    <script>
        function active() {
            document.body.style.backgroundColor = "black";
            document.body.classList.add("stopanime");
            const canvas = document.getElementById('snowCanvas');
        const ctx = canvas.getContext('2d');
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        const snowflakes = [];
        const colors = ['#fff', '#ccf', '#aaf'];

        function createSnowflake() {
            const size = Math.random() * 5 + 2;
            return {
                x: Math.random() * canvas.width,
                y: Math.random() * canvas.height,
                size: size,
                speed: Math.random() * 1 + 0.5,
                drift: Math.random() * 0.5 - 0.25,
                color: colors[Math.floor(Math.random() * colors.length)],
            };
        }

        for (let i = 0; i < 100; i++) {
            snowflakes.push(createSnowflake());
        }

        function draw() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            snowflakes.forEach((flake) => {
                ctx.beginPath();
                ctx.arc(flake.x, flake.y, flake.size, 0, Math.PI * 2);
                ctx.fillStyle = flake.color;
                ctx.fill();
            });
        }

        function update() {
            snowflakes.forEach((flake) => {
                flake.y += flake.speed;
                flake.x += flake.drift;

                if (flake.y > canvas.height) {
                    flake.y = 0;
                    flake.x = Math.random() * canvas.width;
                }

                if (flake.x > canvas.width) {
                    flake.x = 0;
                } else if (flake.x < 0) {
                    flake.x = canvas.width;
                }
            });
        }

        canvas.addEventListener('mousemove', (e) => {
            snowflakes.forEach((flake) => {
                const dx = e.clientX - flake.x;
                const dy = e.clientY - flake.y;
                const distance = Math.sqrt(dx * dx + dy * dy);
                if (distance < 100) {
                    flake.x -= dx / 20;
                    flake.y -= dy / 20;
                }
            });
        });

        function animate() {
            draw();
            update();
            requestAnimationFrame(animate);
        }

        animate();

        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        });
        }
    </script>
</body>

</html>