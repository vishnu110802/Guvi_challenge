<?php 

session_start();
$USERID = $_SESSION["USERID"];

if($USERID == '')
{
    session_destroy();

    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User profile</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/profile.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    body
    {
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(235,199,216,1) 35%, rgba(0,212,255,1) 100%);    }
    .cont
    {
        text-align: center;
        font-size: 40px;
        color: black;
    }

    </style>
</head>
<body class="home">
    <div class="Nav">
    <div class="navi_1">
    <button type="button" class="btn btn-link"><a href="Home.php">Home</a></button>
    <button type="button" class="btn btn-link"><a href="profile.php">Profile</a></button>
    <button type="button" class="btn btn-link"><a href="logout.php">Logout</a></button>
    <!-- <button type="button" class="btn btn-link">Logout</button> -->
    </div>
    </div>
    <div class="cont">

 <b>Welcome to the Home Page!!</b>

</div>

</body>
</html>