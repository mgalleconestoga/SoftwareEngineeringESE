<?php 
$db = new PDO(
        'mysql:host=127.0.0.1;dbname=joinExample', 'michael', 'ese'
    );
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Example 1 - Regular JOIN (no aliases)
    /*
    $query = 'SELECT table1.nodeID, table1.currentFloor, table2.requestedFloor, table2.otherInfo 
              FROM table1, table2 
              WHERE table1.nodeID = table2.nodeID';
    */

    // Example 2 - Regular JOIN with aliases
    /*
    $query = 'SELECT t1.nodeID, t1.currentFloor, t2.requestedFloor, t2.otherInfo 
              FROM table1 t1, table2 t2 
              WHERE t1.nodeID = t2.nodeID';
    */

    // Example 3 - LEFT JOIN (with aliases)
    $query = 'SELECT t1.nodeID, t1.currentFloor, t2.requestedFloor, t2.otherInfo 
              FROM table1 t1 LEFT JOIN table2 t2 
              ON t1.nodeID = t2.nodeID';

    $rows = $db->query($query); 
    echo "| nodeID | currentFloor | requestedFloor | otherInfo | <br>";
    echo "------------------------------------------------------------- <br>";
    foreach ($rows as $row) {
        //var_dump($row);
        //echo "<br>";
        echo str_repeat('&nbsp;', 6) . $row["nodeID"] . str_repeat('&nbsp;', 17) . $row["currentFloor"] . str_repeat('&nbsp;', 25) 
           . $row["requestedFloor"] . str_repeat('&nbsp;', 15) . $row["otherInfo"] . "<br><br>";
        // Note: could mix in some Bootstrap columns here to make this look good
    }

?>