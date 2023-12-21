

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queues</title>
    <link rel="icon" type="image/png" href="../image/favicon.png">
    <link rel="stylesheet" href="../styles/queue.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>
    <header>
    <div class="container">
        <nav class="navbar">
            <ul>
                <div class="a">
                    <li>Queues</li>         
                </div>
                <div class="icon">
                    <li><a href="homedear.php"><span class="material-symbols-outlined">
                        book_online
                    </span>Reserve</a></li>
                </div>
            </ul>
        </nav>
    </div>
    </header>

    <div class="text">
    <div class="status-con">
        <div class="con">
            <div class="content-con">
                <div class="date">
                    <h3 id="day"></h3>
                    <script >
                        var d = new Date();
                            var day = d.getDay();
                            var date = d.getDate();
                            var month = d.getMonth() + 1;
                        var year = d.getFullYear();
                        var daylist = new Array("SUN", "MON", "TUE", "WED", "THU", "FRI", "SAT", "SUN", "MON", "TUE", "WED", "THU");
                    
                        if (day === 6 || day === 0 || day === 7) { 

                                    document.getElementById("day").innerHTML = "<p>" + daylist[day] + " Close</p>";
                                } else {
                                    var all = 'Today : ' + daylist[day] + ' ' + date + '/' + month + '/' + year;
                                    document.getElementById("day").innerHTML = all;
                                }
                    </script>
                </div>
                <div class="que-status">
                    <ul>
                        <div class="que-con">
                            <li class="free"></li>
                            <li>Free</li>
                        </div>
                        <div class="que-con">
                            <li class="inp"></li>
                            <li>In process</li>
                        </div>
                        <div class="que-con">
                            <li class="late"></li>
                            <li>Late</li>
                        </div>
                        <div class="que-con">
                            <li class="error"></li>
                            <li>Error</li>
                        </div>
                    </ul>
                
                <table>
                    <thead>
                    <tr>
                        <th>3D Printer</th>
                        <th>Waiting</th>
                        <?php  include'method.php'?>
                    </tr>
                    </thead>

                    <tbody>
                   
            </div>
        </div>

        </div>


    

</body>

</html>
