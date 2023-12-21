<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" type="image/png" href="../image/favicon.png">
    <link rel="stylesheet" href="styles\home.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <header>
    <div class="container">
        <nav class="navbar">
            <ul>
                <div class="a">
                    <li>3D Printer</li>
                </div>
                <div class="icon">
                <li><a href="../pages/status.html">
                        <span class="material-symbols-outlined">
                            person
                        </span></a>
                </li>
                <li ><a href="#">
                        <span class="material-symbols-outlined">
                            <<form action="logout.php" method="post">
                                <button class="second-button" type="submit" name="submitz" value="Submit">Logout</button>
                            </form>
                </li>        
                </div>
            </ul>
        </nav>
    </div>
    </header>

    <div class="m">
    <div class="text">
        <div class="detail">
        <p>Service is available from Monday to Friday, 08:30 AM to 09:00 PM, excluding public holidays.
        <br><b>Location :</b> Hardware House Room, 10th floor, Wisawavat Building.
        <br>There are 3 machines available for service.
        <br>
        <span class="material-symbols-outlined">
            priority_high
        </span>
        <b>Please check the schedule before making a reservation</b>
        <span class="material-symbols-outlined">
            priority_high
        </span>
        </p>
        
        <div class="button">
            <a href="q_tong.php">
                <button class="first-button">
                    <span class="material-symbols-outlined">
                        date_range
                    </span>
                    Queues
                </button>
            </a>
        </div>
        </div>

        <div class="data">
                <form action="printerdt_db.php" method="post">
                        <label for="project">Project name:</label>
                        <input type="text" name="project" required><br>

                        <label for="printer_number">Printer Number:</label>
                        <select name="printer_number" required>
                            <option value="506">506</option>
                            <option value="507">507</option>
                            <option value="508">508</option>
                        </select><br>

                        <label for="hours_required">Hours Required:</label>
                        <input type="number" name="hours_required" min="1" required><br>
                    

                        <label for="reservation_date">Reservation Date:</label>
                        <input type="date" name="reservation_date" required><br>

                        <label for="email">Email:</label>
                        <input type="email" name="email" required><br>

                <script>
                    function checkWeekend(input) {
                        var selectedDate = new Date(input.value);
                        var day = selectedDate.getDay();

                        // Check if the selected date is Saturday (6) or Sunday (0)
                        if (day === 0 || day === 6) {
                            alert("Please select a weekday (Monday to Friday).");
                            input.value = ''; // Clear the selected date
                        }
                    }
                </script>
                <br>    
                <button class="second-button" type="reset">Reset</button>
                <button class="second-button" type="submit"  name="submit"value="Submit">Submit</button>
                </ul>
            </form>
        </div>
    </div>
    <script>
    document.getElementById('dataForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent the form from submitting and refreshing the page

        // Get form values
        var nameValue = document.getElementById('username').value;
        var dateValue = document.getElementById('reservation_date').value;
        var numberprinterValue = document.getElementById('printer_number').value
        var numberValue = document.getElementById('hours_required').value

        // Store form data in localStorage
        localStorage.setItem('username', nameValue);
        localStorage.setItem('reservation_date', dateValue);
        localStorage.setItem('printer_number', numberprinterValue);
        localStorage.setItem('hours_required', numberValue);

        // Redirect to another page
    });
</script>

</body>
</html>
