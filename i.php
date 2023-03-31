<?php
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=quanaotreem', 'root', '');
        foreach($dbh->query('SELECT * from Category') as $row) {
            print_r($row);
        }
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    
?>