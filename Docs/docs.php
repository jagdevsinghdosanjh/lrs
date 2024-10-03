<?php
session_start();

// Check if the user is logged in, if
// not then redirect them to the login page
if (!isset($_SESSION['email'])) {
    header("Location:index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/295/295128.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-success">
        <div class="container">
            <a class="navbar-brand" href="/lrs/pages/quiz/quiz.php" style="font-weight:bold; color:white;">Go to Quiz</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav m-auto mt-2 mt-lg-0">
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <a href="/lrs/pages/logout.php" class="btn btn-light my-2 my-sm-0"
                      type="submit" style="font-weight:bolder;color:green;">
                        logout</a>
                </form>
            </div>
        </div>
    </nav>

    <div>
        <hr>
        <h2 class="p-4 mt-5">Dashboard Docs</h2>
        <hr>
        <a href="/lrs/Docs/Making Attractive.pdf">Making Attractive</a><br>
        <a href="/lrs/Docs/Securing Internal Apps of a Website.pdf">Securing Apps</a><br>
        <a href="/lrs/Docs/Securing Website using php.pdf">Securing Websites</a><br>
        <a href="/lrs/Docs/Sent by you for Lat Long to Copilot.pdf">Lat Long</a><br>
        <a href="/lrs/geolocation/GeoLoc.html">Find Actual Lat Long</a>
        <hr>
    </div>
</body>

</html>