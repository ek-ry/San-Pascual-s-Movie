<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Reservation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="moviereg.css">
</head>
<body>
    <div class="card-group">
        <div id="c1">
            <div class="card">
                <img src="images/Spider-Man_Into_the_Spider-Verse_poster.png" class="card-img-top" alt="..." id="m1">
                <div class="card-body">
                    <h5 class="card-title">Spider-Man: Into the Spider-Verse</h5>
                </div>
            </div>
        </div>
        
        <div id="c2">
            <div class="card">
                <img src="images/Spider-Man-_Across_the_Spider-Verse_poster.jpg" class="card-img-top" alt="..." id="m2">
                <div class="card-body">
                    <h5 class="card-title">Spider-Man: Across the Spider-Verse</h5>
                </div>
            </div>
        </div>
        
        <div id="c3">
            <div class="card">
                <img src="images/Spider-Man_No_Way_Home.jpg" class="card-img-top" alt="..." id="m3">
                <div class="card-body">
                    <h5 class="card-title">Spider-Man: No Way Home</h5>
                </div>
            </div>
        </div>
    </div>

    <button type="button" onclick="redirectToSMITSV()">Reserve Now!</button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function redirectToSMITSV() {
            window.location.href = 'SMITSV.php';
        }
    </script>
</body>
</html>
