<?php

    include 'controller.php';

    // Get triangle's last edge max range
    if(isset($_GET['triangle'])){
 
        $n1 = intval($_GET['n1']);
        $n2 = intval($_GET['n2']);

        echo "<h3> Output: " . getLastEdgeMaxRange($n1, $n2) . "</h3>";
    }

    // Count all ones in Binary
    if(isset($_GET['count'])){
 
        $number = intval($_GET['number']);
        echo "<h3> Output: " . countAllOnes($number) . "</h3>";
    }

    // Concatinate parts with separator
    if(isset($_GET['join'])){

        $part1 = $_GET['part1'];
        $part2 = $_GET['part2'];

        echo "<h3> Output: " . joinParts($part1, $part2) . "</h3>";
    }

    // Check if number is a sastry number
    if(isset($_GET['sastry'])){
        $number = intval($_GET['number']);

        echo "<h3> Output: " . isSastry($number) . "</h3>";
    }
?>