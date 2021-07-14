<?php 
// Example 1
/************************************************************ */
/*
// Connect to database by instantiating a PHP Database Object (PDO)
$db = new PDO(
    'mysql:host=127.0.0.1;dbname=elevator',     // Database name
    'michaelG',                                 // username
    'myPassword'                                // Password
);

// Boilerplate - Return arrays with keys that are the field names in the database - Call the PDO method setAttribute()
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// Update fields in elevatorNetwork 

$query =    'UPDATE elevatorNetwork
            SET status = 2, currentFloor = 3
            WHERE nodeID = 3'; 

$db->exec($query); 

// Show change to database
$query2 = 'SELECT * FROM elevatorNetwork'; 
$rows = $db->query($query2); 
foreach ($rows as $row) {
    var_dump($row);
    echo "<br/><br/>"; 
}
*/


// Example 2 - function to update certain fields in a database
/* *************************************************************** */
/*

function update_elevatorNetwork(int $node_ID, int $new_status = 1): void {
    $db = new PDO(
        'mysql:host=127.0.0.1;dbname=elevator',     // Database name
        'michaelG',                                 // username
        'myPassword'                                // Password
    );
    // Boilerplate - Return arrays with keys that are the field names in the database - Call the PDO method setAttribute()
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Use transactions 
    $db->beginTransaction();                        // Roll back point
    try {
        // Change elevatorNetwork 
        $query = "UPDATE elevatorNetwork SET status = :stat WHERE nodeID = :id"; 
        $statement = $db->prepare($query); 
        $statement->bindValue('stat', $new_status); 
        $statement->bindValue('id', $node_ID);
        $statement->execute();
        
        // Return number of rows that were updated - If no rows were affected by the update statement then throw error
        $count = $statement->rowCount();
        if($count == 0) {
            throw new Exception('Error - Database unchanged !!!');
        }
        echo "<br/><br/>Success - Database updated<br/><br/>";
        $db->commit(); 
         
    } catch (Exception $e) {
        echo $e->getMessage();
        $db->rollBack(); 
    }
}

// Start program
update_elevatorNetwork(1, 21);       // Should succeed if nodeID = 1 does not have status = 21
echo '<br/><br/>';
update_elevatorNetwork(1000, 6);    // Should fail since thre is no nodeID == 1000



// Show table 

$db = new PDO(
    'mysql:host=127.0.0.1;dbname=elevator',     // Database name
    'michaelG',                                 // username
    'myPassword'                                // Password
);

// Boilerplate - Return arrays with keys that are the field names in the database - Call the PDO method setAttribute()
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query2 = 'SELECT * FROM elevatorNetwork'; 
$rows = $db->query($query2); 
foreach ($rows as $row) { 
    var_dump($row);
    echo '<br/><br/>';
}
*/


// Example 3 - function to update ANY field in ANY database
/* *************************************************************** */

function update(string $tablename, string $wherefield, int $wherefieldValue, string $fieldname, int $newfieldvalue): void {
    $db = new PDO(
        'mysql:host=127.0.0.1;dbname=elevator',     // Database name
        'michaelG',                                 // username
        'myPassword'                                // Password
    );
    
    // Boilerplate - Return arrays with keys that are the field names in the database - Call the PDO method setAttribute()
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Use transactions 
    $db->beginTransaction();        // Roll back point
    try {
        // Change any field in any table - requires DIRECTLY changing the query string (this cannot be done using prepared statements - it is not allowed)
        $query = "UPDATE $tablename SET $fieldname = $newfieldvalue WHERE $wherefield = $wherefieldValue";   // The DOUBLE QUOTES here are NECESSARY since we use single quotes for the strings !!!
        $statement = $db->prepare($query); 
        $statement->execute();
        
        // Return number of rows that were updated - If no rows were affected by the update statement then throw error
        $count = $statement->rowCount();

        if($count == 0) {
            throw new Exception('Error - Database unchanged !!!');
        }
        echo "<br/><br/>Success - Database updated<br/><br/>";
        $db->commit(); 
         
    } catch (Exception $e) {
        echo $e->getMessage();
        $db->rollBack(); 
    }
    
}

// Start program
update('elevatorNetwork', 'nodeID', 1, 'status', 30);       // Should succeed if nodeID = 1 does not have status = 30 (all values may be passed by a form)
echo '<br/><br/>';

// Show table 
$db = new PDO(
    'mysql:host=127.0.0.1;dbname=elevator',     // Database name
    'michaelG',                                 // username
    'myPassword'                                // Password
);

// Boilerplate - Return arrays with keys that are the field names in the database - Call the PDO method setAttribute()
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query2 = 'SELECT * FROM elevatorNetwork'; 
$rows = $db->query($query2); 
foreach ($rows as $row) { 
    var_dump($row);
    echo '<br/><br/>';
}


?>