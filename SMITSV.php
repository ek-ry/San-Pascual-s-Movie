<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>San Pascual's Film Chuchu</title>
</head>
<body>
    <div id="content">
        <h2>Movie Registration</h2>
        <form action="Data.php" method="post">
                <div id="email">
                    Email: <input type="email" placeholder="name@gmail.com" name="email" required><br>
                </div>
                <br>
                <div id="fname">
                    First Name: <input type="text" placeholder="First Name" name="fname" required><br>
                </div>
                <br>
                <div id="lname">
                    Last Name: <input type="text" placeholder="Last Name" name="lname" required><br>
                </div>
                <br>
                <div>
                    Select Film:
                    <select name="film">
                        <option value="Spider-Man: Into the Spider-Verse">Spider-Man: Into the Spider-Verse</option>
                        <option value="Spider-Man: Across the Spider-Verse">Spider-Man: Across the Spider-Verse</option>
                        <option value="Spider-Man: No Way Home">Spider-Man: No Way Home</option>
                    </select>
                </div>
                <br>
                <div>
                    Select Date:
                    <select name="date">
                        <option value="May 13">May 13</option>
                        <option value="May 14">May 14</option>
                        <option value="May 15">May 15</option>
                        <option value="May 16">May 16</option>
                    </select>
                </div>
                <br>
                <div>
                    Select Time:
                    <select name="time">
                        <option value="12:00NN">12:00NN</option>
                        <option value="3:00PM">3:00PM</option>
                        <option value="6:00PM">6:00PM</option>
                        <option value="9:00PM">9:00PM</option>
                    </select>
                </div>
                <br>
                <div>
                    Select Payment Method:
                    <select name="pm">
                        <option value="Cash">Cash</option>
                        <option value="GCash">GCash</option>
                        <option value="PayMaya">PayMaya</option>
                    </select>
                </div>
                <br>
                <input type="submit" value="Generate Ticket!">
            </form>
    </div>
</body>
</html>