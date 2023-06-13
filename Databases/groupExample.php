<?php 
$db = new PDO(
        'mysql:host=127.0.0.1;dbname=joinExample', 'michael', 'ese'
    );
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Example 1 - ORDERING OUTPUT
    $query = 'SELECT * FROM tableGroup ORDER BY nodeID';
    
    $rows = $db->query($query); 
    echo "|--nodeID--|--------time--------|---------status--------| <br>";
    echo "---------------------------------------------------------------- <br>";
    foreach ($rows as $row) {
        echo str_repeat('&nbsp;', 6) . $row["nodeID"] . str_repeat('&nbsp;', 17) . $row["time"] . 
        str_repeat('&nbsp;', 25) . $row["status"] . "<br><br>";
    }
    echo "<br/><br/>";

    // Example 2 - GROUPING OUTPUT
    $query = 'SELECT nodeID, COUNT(*) AS hits FROM tableGroup GROUP BY nodeID';
    
    $rows = $db->query($query); 
    echo "|--nodeID--|----hits---| <br>";
    echo "--------------------------------- <br>";
    foreach ($rows as $row) {
        echo str_repeat('&nbsp;', 6) . $row["nodeID"] . str_repeat('&nbsp;', 17) . $row["hits"] . 
        str_repeat('&nbsp;', 25) . "<br><br>";
    }
?>