<?php 
$host = '127.0.0.1'; $database = 'elevator'; $tablename = 'elevatorNetwork'; 
$path = 'mysql:host=' . $host . ';dbname=' . $database; $user = 'michael'; $password = 'ese';
function connect(string $path, string $user, string $password) {
    $db = new PDO($path,$user, $password);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db; 
}
function update(string $path, string $user, string $password, string $tablename, int $node_ID, int $new_status = 1) : void {
    $db = connect($path, $user, $password);
    $query = 'UPDATE ' . $tablename . ' SET status = :stat WHERE nodeID = :id' ;    // Note: Risks of SQL injection
    $statement = $db->prepare($query); $statement->bindValue('stat', $new_status); 
    $statement->bindValue('id', $node_ID); 
    $statement->execute();                      // Execute prepared statement
}
function showtable(string $path, string $user, string $password, $tablename) {
    $db = connect($path, $user, $password); 
    $query = "SELECT * FROM $tablename";  // Note: Risk of SQL injection
    $rows = $db->query($query); 
    foreach ($rows as $row) {
        var_dump($row);
        echo "<br><br>";
    }
}
// Run
connect($path, $user, $password);
update($path, $user, $password, $tablename, 1, 35);
showtable($path, $user, $password, $tablename); 
?>