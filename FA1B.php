<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <title> FA1  - OOP Concepts in PHP </title>
    <style type="text/css">
        h1 {
            text-align: center;
            font-size: 35px;
        }

        body {
            font-family: cursive;
            color: #F6EEE0;
            background-color: #A45C40;
            font-size: 23px;
            text-align: center;
        }

        
    </style>
</head>

<body>

<?php
    //7. Instantiate
    include("FA1.php");
    $FA1B = new ParentClass();
    $FA1B-> setchuckie('chuckie');
    $FA1B-> setaquaflask('aquaflask');
    $FA1B-> setint('400');
    $FA1B-> displayInfo();
    $FA1B-> sayhello();
   
?>

</body>

</html>