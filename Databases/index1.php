<?php
    $db = new PDO(
        'mysql:host=127.0.0.1;dbname=elevator', 
        'michael',
        'ese'
    );
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    /*
    // Static query
    $query = 'INSERT INTO elevatorNetwork (date, time, nodeID, status, currentFloor, requestedFloor,otherInfo) VALUES ("2022-05-12", "12:05:16", 4,1,1,1, "na")';
    $result = $db->exec($query);
    var_dump($result);  
    */

    // Prepared statements

    // Static queries for data and time
    $querytime = "SELECT CURRENT_TIME()"; 
    $result = $db->query($querytime); 
    $curtime = $result->fetch()['CURRENT_TIME()'];
    var_dump($curtime);

    $querydate = 'SELECT CURRENT_DATE()';
    $result = $db->query($querydate);
    $curdate = $result->fetch()['CURRENT_DATE()'];
    var_dump($curdate);

    $query = 'INSERT INTO elevatorNetwork(date, time, status,currentFloor, requestedFloor, otherInfo)
             VALUES (:date, :time, :status, :currentFloor, :requestedFloor, :otherInfo)';
    
    $statement = $db->prepare($query);

    $params = [
        'date' => $curdate,
        'time' => $curtime,
        'status' => 1,
        'currentFloor' => 1,
        'requestedFloor' => 2, 
        'otherInfo' => 'hi there you'
    ];

    $result = $statement->execute($params);
    var_dump($result);
    
    // Query entire database
    $rows = $db->query('SELECT * FROM elevatorNetwork ORDER BY nodeID');
    foreach ($rows as $row) {
        var_dump($row);
        echo "<br/><br/>";
    }
    
    /*
    // Parameterized query
    $query = 'SELECT * FROM elevatorNetwork WHERE nodeID = :nodeID_Number';
    $statement = $db->prepare($query); 
    $statement->bindValue('nodeID_Number', 1);
    $statement->execute(); 

    $rows = $statement->fetchAll(); 
    foreach($rows as $row) {
        var_dump($row); 
    }
    */
?>