<?php 
/*
    // First example - Static Query
    $db = new PDO(
        'mysql:host=127.0.0.1;dbname=elevator', 
        'michael',
        'ese'
    );
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $rows = $db->query('SELECT * FROM elevatorNetwork ORDER BY nodeID');
    foreach ($rows as $row) {
        var_dump($row);
        echo "<br/><br/>";
    }
*/
?>

<?php 
/*
    // Second example - Dynamic / Formatted / Parameterized Query
    $db = new PDO(
        'mysql:host=127.0.0.1;dbname=elevator', 
        'michael',
        'ese'
    );
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $query = 'SELECT * FROM elevatorNetwork WHERE nodeID = :nodeID'; // Formatted query, parameters identified by ':'
    $statement = $db->prepare($query); 
    $statement->bindValue('nodeID', 1);
    $result = $statement->execute(); 

    $rows = $statement->fetchAll(); 
    foreach($rows as $row) {
        var_dump($row); 
    }
*/
?>

<?php 
/*
    // Third example - Inserting STATIC Data via PHP (limited use but good as an example)
    $db = new PDO(
        'mysql:host=127.0.0.1;dbname=elevator', 
        'michael',
        'ese'
    );
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Static query - Notice that nodeID is missing since this is AUTO_INCREMENTed!!!!
    $query = 'INSERT INTO elevatorNetwork (date, time, status, currentFloor, requestedFloor,otherInfo) 
    VALUES ("2022-04-01", "08:03:18", 1,1,1, "na")';      // The static data to insert - Change the PRIMARY KEY AND UNIQUE KEY if you want to run more than once!!!
    
    echo "<br/>Now executing query<br/>";
    $count = $db->exec($query);        // Execute a static query (Insert static data operation)
    echo "Inserted $count rows <br/><br/>";
     
    print_r("The updated database contains the following <br/><br/>");
    $rows = $db->query('SELECT * FROM elevatorNetwork ORDER BY nodeID');
    foreach ($rows as $row) {
        var_dump($row);
        echo "<br/><br/>";
    }
*/
?>

<?php 
/*
    // Fourth example - Inserting Dynamic Data from a user via PHP prepared statements 
    $db = new PDO(
        'mysql:host=127.0.0.1;dbname=elevator', 
        'michael',
        'ese'
    );
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Dynamic query 
    $query = 'INSERT INTO elevatorNetwork(date, time, status,currentFloor, requestedFloor, otherInfo)
             VALUES (:date, :time, :status, :currentFloor, :requestedFloor, :otherInfo)';
    
    $statement = $db->prepare($query);      // Query object

    $params = [
        'date' => '2026-01-02',             // This data can come from user input (i.e. a form)
        'time' => '11:11:01',               // Note: database enforces some of these fields to be unique
        'status' => 1,
        'currentFloor' => 1,
        'requestedFloor' => 2, 
        'otherInfo' => 'hi there you'
    ];

    $result = $statement->execute($params);
        
    // Query entire database
    $rows = $db->query('SELECT * FROM elevatorNetwork ORDER BY nodeID');
    foreach ($rows as $row) {
        var_dump($row);
        echo "<br/><br/>";
    }    
*/
?>

<?php 

    // Fifth example - Inserting data retrieved from both user and SERVER 
    $db = new PDO(
        'mysql:host=127.0.0.1;dbname=elevator', 
        'michael',
        'ese'
    );
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Dynamic query 
    $query = 'INSERT INTO elevatorNetwork(date, time, status,currentFloor, requestedFloor, otherInfo)
             VALUES (:date, :time, :status, :currentFloor, :requestedFloor, :otherInfo)';
    
    $statement = $db->prepare($query);      // Query object

    // Static queries for data and time
    $querytime = "SELECT CURRENT_TIME()"; 
    $result = $db->query($querytime); 
    $curtime = $result->fetch()['CURRENT_TIME()'];
    //var_dump($curtime);
    $querydate = 'SELECT CURRENT_DATE()';
    $result = $db->query($querydate);
    $curdate = $result->fetch()['CURRENT_DATE()'];
    //var_dump($curdate);

    $params = [
        'date' => $curdate,                 // Will always be unique (required by field when setting up the db) 
        'time' => $curtime,                 // Will always be unique (required by field when setting up the db)
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

?>
