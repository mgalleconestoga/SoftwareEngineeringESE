<?php 

function update_elevatorNetwork(int $node_ID, int $new_status = 1) : void {
    $db = new PDO(
        'mysql:host=127.0.0.1;dbname=elevator',
        'michael',
        'ese'
    );
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $query = 'UPDATE elevatorNetwork SET status = :stat WHERE nodeID = :id' ;
    $statement = $db->prepare($query); 
    $statement->bindValue('stat', $new_status); 
    $statement->bindValue('id', $node_ID); 
    $statement->execute();                      // Execute prepared statement
}

update_elevatorNetwork(1, 15);

$db = new PDO(
    'mysql:host=127.0.0.1;dbname=elevator',
    'michael',
    'ese'
);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query2 = "SELECT * FROM elevatorNetwork"; 
$rows = $db->query($query2); 
foreach ($rows as $row) {
    var_dump($row);
    echo "<br><br>";
}


?>