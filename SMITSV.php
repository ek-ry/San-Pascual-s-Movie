<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>San Pascual's Film Chuchu</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        .screen {
            background-color: #333;
            color: white;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
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
            <div>
                <h3>Screen</h3>
                <div class="screen">Screen</div>
                <center>
                <table>
                    <tr>
                        <td><input type="checkbox" name="seat[]" value="A15"> A15</td>
                        <td><input type="checkbox" name="seat[]" value="A14"> A14</td>
                        <td><input type="checkbox" name="seat[]" value="A13"> A13</td>
                        <td> </td>
                        <td><input type="checkbox" name="seat[]" value="A12"> A12</td>
                        <td><input type="checkbox" name="seat[]" value="A11"> A11</td>
                        <td><input type="checkbox" name="seat[]" value="A10"> A10</td>
                        <td><input type="checkbox" name="seat[]" value="A9"> A9</td>
                        <td><input type="checkbox" name="seat[]" value="A8"> A8</td>
                        <td><input type="checkbox" name="seat[]" value="A7"> A7</td>
                        <td><input type="checkbox" name="seat[]" value="A6"> A6</td>
                        <td><input type="checkbox" name="seat[]" value="A5"> A5</td>
                        <td><input type="checkbox" name="seat[]" value="A4"> A4</td>
                        <td> </td>
                        <td><input type="checkbox" name="seat[]" value="A3"> A3</td>
                        <td><input type="checkbox" name="seat[]" value="A2"> A2</td>
                        <td><input type="checkbox" name="seat[]" value="A1"> A1</td>
                    </tr>

                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" name="seat[]" value="B15"> B15</td>
                        <td><input type="checkbox" name="seat[]" value="B14"> B14</td>
                        <td><input type="checkbox" name="seat[]" value="B13"> B13</td>
                        <td> </td>
                        <td><input type="checkbox" name="seat[]" value="B12"> B12</td>
                        <td><input type="checkbox" name="seat[]" value="B11"> B11</td>
                        <td><input type="checkbox" name="seat[]" value="B10"> B10</td>
                        <td><input type="checkbox" name="seat[]" value="B9"> B9</td>
                        <td><input type="checkbox" name="seat[]" value="B8"> B8</td>
                        <td><input type="checkbox" name="seat[]" value="B7"> B7</td>
                        <td><input type="checkbox" name="seat[]" value="B6"> B6</td>
                        <td><input type="checkbox" name="seat[]" value="B5"> B5</td>
                        <td><input type="checkbox" name="seat[]" value="B4"> B4</td>
                        <td> </td>
                        <td><input type="checkbox" name="seat[]" value="B3"> B3</td>
                        <td><input type="checkbox" name="seat[]" value="B2"> B2</td>
                        <td><input type="checkbox" name="seat[]" value="B1"> B1</td>
                    </tr>

                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" name="seat[]" value="C15"> C15</td>
                        <td><input type="checkbox" name="seat[]" value="C14"> C14</td>
                        <td><input type="checkbox" name="seat[]" value="C13"> C13</td>
                        <td> </td>
                        <td><input type="checkbox" name="seat[]" value="C12"> C12</td>
                        <td><input type="checkbox" name="seat[]" value="C11"> C11</td>
                        <td><input type="checkbox" name="seat[]" value="C10"> C10</td>
                        <td><input type="checkbox" name="seat[]" value="C9"> C9</td>
                        <td><input type="checkbox" name="seat[]" value="C8"> C8</td>
                        <td><input type="checkbox" name="seat[]" value="C7"> C7</td>
                        <td><input type="checkbox" name="seat[]" value="C6"> C6</td>
                        <td><input type="checkbox" name="seat[]" value="C5"> C5</td>
                        <td><input type="checkbox" name="seat[]" value="C4"> C4</td>
                        <td> </td>
                        <td><input type="checkbox" name="seat[]" value="C3"> C3</td>
                        <td><input type="checkbox" name="seat[]" value="C2"> C2</td>
                        <td><input type="checkbox" name="seat[]" value="C1"> C1</td>
                    </tr>
                </table>
                </center>
            </div>
            <br>
            <input type="submit" value="Generate Ticket!">
        </form>
    </div>
</body>
</html>
