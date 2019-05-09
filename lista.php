<?php 
    include("./connect.php");
    $query = "SELECT * FROM `ss_t1g2`;";
    $result = $mysqli->query($query);
    while ($row = $result->fetch_assoc()){
        $text = $row['text'];
        echo "$text <hr>";
    }