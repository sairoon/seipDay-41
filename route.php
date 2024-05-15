<?php

require_once 'vendor/autoload.php';

use App\classes\Series;
use App\classes\Student;
use App\classes\Auth;


if (isset($_GET['page'])){
    if ($_GET['page'] =='home'){
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'series'){
        include 'pages/series.php';
    }
    elseif ($_GET['page'] == 'get-series'){
        $total = new Series($_POST);
//        $totalValue = $total->getSeriesResult();
//        $totalValue = $total->getEvenOddResult();
        $totalValue = $total->getEvenOddAddSeries();
        include 'pages/series.php';
    }
    elseif ($_GET['page'] == 'add-student'){
        include 'pages/add-student.php';
    }
    elseif ($_GET['page'] == 'create-student'){
        $student = new Student($_POST, $_FILES);
        $message = $student->addStudent();
        include 'pages/add-student.php';
    }
    elseif ($_GET['page'] == 'manage-student'){
        $student = new Student();
        $students = $student->getAllStudent();
        include 'pages/manage-student.php';
    }
    elseif ($_GET['page'] == 'login'){
        include 'pages/login.php';
    }
    elseif ($_GET['page'] == 'login-submit'){
        $auth = new Auth($_POST);
        $message = $auth->login();
        include 'pages/login.php';
    }
    elseif ($_GET['page'] == 'logout'){
        $auth = new Auth();
        $message = $auth->logout();
//        include 'pages/login.php';
    }
}
