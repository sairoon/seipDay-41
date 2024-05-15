<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="?page=home" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav ms-auto">
            <?php if (isset($_SESSION['id'])) { ?>
            <li><a href="?page=home" class="nav-link">Home</a></li>
            <li><a href="?page=series" class="nav-link">Series</a></li>
            <li><a href="?page=add-student" class="nav-link">Add Student</a></li>
            <li><a href="?page=manage-student" class="nav-link">Manage Student</a></li>
            <li><a href="?page=logout" class="nav-link">Log Out</a></li>
            <?php } else { ?>
            <li><a href="?page=login" class="nav-link">Log In</a></li>
            <?php } ?>
        </ul>
    </div>
</nav>