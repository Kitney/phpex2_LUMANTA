<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 2 </title>

    <style>
    /* {
    background: linear-gradient( to bottom, #f15db9, #af15af, #497BE8,  #68EACC );
    }
    .Box{
        margin: 150px auto;
        max-width: 500px;
        width: 50%;
        background: #fff;
        border-radius: 50px;
        padding: 50px;
    }
    .class.php .numbers{
        display: flex;
        width: 50px;
        margin: 20px 0;
    }
    #numbers{
        padding: 5px;
        outline: none;
        width: 40%;
        border: 1px solid #ccc; 
        font-size: 8px;
    #button{
        width: 25px;
        padding: 5px;
        border: none;
        outline: none;
        background: #497BE8;
        color: #fff;
        font-size: 11px;
    } */

    .Box{
        margin: 150px auto;
        max-width: 500px;
        padding: 50px;
        width: 50%;
        font-family: 'Karla';
        background: linear-gradient( to bottom, #f15db9, #af15af, #497BE8,  #68EACC );
        border-radius: 50px;
        }

    </style>
</head>

<body>
    <div class="Box">

    <h1>
        PHP Exercise 2
    </h1>

    <div class="class.php">

    <p>
        Find the maximum range of a triangle.
    </p>
    <form action="class.php">
        <input  type="numbers" name="n1" placeholder="Number 1">
        <input  type="numbers" name="n2" placeholder="Number 2">
        <button name="triangle">Find</button>
    </form>

    <p>
        Count all the ones(1) in the binary representation of an integer.
    </p>
    <form action="class.php">
        <input  type="numbers" name="number" placeholder="Number">
        <button name="count">Count</button>
    </form>


    <p>
        Inputed will be joined together with “/” separator.
    </p>
    <form action="class.php">
        <input  type="text" name="part1" placeholder="Part 1">
        <input  type="text" name="part2" placeholder="Part 2">
        <button name="join">Join</button>
    </form>


    <p>
        If a given number (n) is a Sastry number. 
    </p>
    <form action="class.php">
        <input  type="numbers" name="number" placeholder="Validate">
        <button name="sastry">Validate</button>
    </form>

    </div>

    </div>

</body>

</html>