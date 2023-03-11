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

    //1. create a class
    Class ParentClass{

        //1.a member variables
        private $chuckie;
        public $aquaflask;
        public $a = 400;

        //1.b Setter and getters
        function setchuckie($chuckie){
            $this -> chuckie = $chuckie;
        }

        function getchuckie(){
            return $this -> chuckie;
        }

        function setaquaflask($aquaflask){
            $this -> aquaflask = $aquaflask;
        }

        function getaquaflask(){
            return $this -> aquaflask;
        }

        function setint($a){
            $this ->  a = $a;
        }

        function getint(){
            return $this -> a;
        }

         //1.c methods
         function displayInfo(){
            echo $this -> chuckie . '<br>';
            echo $this -> aquaflask . '<br>';
            echo $this -> a . '<br>';
        }

        
       }

    //2 & 2a
    class childClass extends ParentClass{

        //2b data member
        private $mango;
        public $scissors;

        //2.d parameterized constructor
        function tester($fruit , $thing){
            $this -> mango = $fruit;
            $this -> scissors = $thing;
        }

        //2.e getter method
        function gettester(){
            return $this-> mango;
            return $this-> scissors;
        }

        //2.f method printInfo
         function printInfo(){
            echo $this-> mango . '<br>';
            echo $this-> scissors . '<br>';
        }

        function printInfo2(){
            echo $this-> mango . '<br>';
        }

         //5. override
         function displayInfo(){
            echo $this -> aquaflask . '<br>';
            echo $this -> a . '<br>';
        }

        //6.overload
        function __call($dutchmill, $yakult)
        {
            echo " overload '$dutchmill' "
            . implode(', ', $yakult). "<br>";
        }

        static function __callStatic($dutchmill, $yakult) {
         
            echo " overload '$dutchmill' "
                . implode(', ', $yakult). "<br>";
            }
        }

    //3
    class multilevel extends childClass{
            function multilevel(){
            echo "multilevel inheritance" . "<BR>";
        }
    }

    //4
    class hierarchical extends ParentClass{
            function hierarchical(){
            echo "hierarchical inheritance" . "<BR>";
        }
    }

    //2.c Test inheritance

    $testing = new childClass();
    $testing-> setaquaflask('aquaflask');
    $testing-> setint('400');
    $testing-> displayInfo();
    $testing-> tester('mango' , 'scissors');
    $testing-> printInfo('', '');
    $testing-> printInfo2('');
    $testing-> test();
    $testing = new hierarchical();
    $testing-> hierarchical();
    $testing = new multilevel();
    $testing-> multilevel();

?>

</body>

</html>