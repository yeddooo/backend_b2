<?php include_once('checklogin.php');
        include_once('connect.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Printer</title>
    <link rel="icon" type="image/png" href="image\favicon.png">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>
    <div class="container">
        <nav class="navbar">
            <ul>
                <div class="a">
                    <li>3D Printer</li>
                </div>
                </ul>
        </nav>
    </div>

    <div class="login-con">
        <div class="con">
            <div class="content-con">
                <div class="login-container">
                    <form action="checklogin.php" method="post">
                        <p>Login</p>
                        <div class="input-group">
                            <label for="user">Name</label>
                            <input type="text" id="user" name="user" required>
                        </div>
                        <div class="input-group">
                            <label for="pass">Student ID</label>
                            <input type="text" id="pass" name="pass" required>
                        </div>
                        <button type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    

</body>

</html>