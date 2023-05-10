<?php 
$db = new PDO(
        'mysql:host=127.0.0.1;dbname=joinExample', 'michael', 'ese'
    );
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Example 1
    $query = 'SELECT table1.nodeID, table1.currentFloor, table2.requestedFloor, table2.otherInfo 
              FROM table1, table2 
              WHERE table1.nodeID = table2.nodeID';

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

    // Example 2: Left join
    

?>