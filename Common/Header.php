<?php
session_start();
include_once '../Common/Functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .w3-theme-l5 {
            color: #000 !important;
            background-color: #f9fdfd !important
        }

        .w3-theme-l4 {
            color: #000 !important;
            background-color: #eaf8f8 !important
        }

        .w3-theme-l3 {
            color: #000 !important;
            background-color: #d5f1f2 !important
        }

        .w3-theme-l2 {
            color: #000 !important;
            background-color: #c1eaeb !important
        }

        .w3-theme-l1 {
            color: #000 !important;
            background-color: #ace3e4 !important
        }

        .w3-theme-d1 {
            color: #000 !important;
            background-color: #7bd3d4 !important
        }

        .w3-theme-d2 {
            color: #000 !important;
            background-color: #5fc9cb !important
        }

        .w3-theme-d3 {
            color: #fff !important;
            background-color: #43c0c2 !important
        }

        .w3-theme-d4 {
            color: #fff !important;
            background-color: #37a7a9 !important
        }

        .w3-theme-d5 {
            color: #fff !important;
            background-color: #2e8b8d !important
        }

        .w3-theme-light {
            color: #000 !important;
            background-color: #f9fdfd !important
        }

        .w3-theme-dark {
            color: #fff !important;
            background-color: #2e8b8d !important
        }

        .w3-theme-action {
            color: #fff !important;
            background-color: #2e8b8d !important
        }

        .w3-theme {
            color: #000 !important;
            background-color: #98ddde !important
        }

        .w3-text-theme {
            color: #98ddde !important
        }

        .w3-border-theme {
            border-color: #98ddde !important
        }

        .w3-hover-theme:hover {
            color: #000 !important;
            background-color: #98ddde !important
        }

        .w3-hover-text-theme:hover {
            color: #98ddde !important
        }

        .w3-hover-border-theme:hover {
            border-color: #98ddde !important
        }
    </style>
    <title>WebSecXSS</title>
</head>