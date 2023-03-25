<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zippy's Admin</title>
    <style type="text/css">
        table, ul{
            width: 800px;
            max-width: 100%;
        }
        ul {list-style-type: square;}
        td{
            padding: 0 15px;
        }
        th {border: 1px solid #000;}
        tr:nth-child(even), .cat_li:nth-child(even) {background-color: #f2f2f2;}
        .del_button{
            margin: 0 auto;
            display: block;
        }
        a {color: #00c;
            text-decoration: none;}
        html {font-family: Arial, Helvetica, sans-serif}

    </style>
</head>

<body>
    <main>
        <header>
            <h1><a href="<?php  echo $_SERVER['PHP_SELF']; ?>">Zippy's Admin</a></h1>
        </header>