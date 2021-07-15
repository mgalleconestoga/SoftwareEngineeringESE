<html>
<head><title>Members only page</title></head>
<body> 

    <h1>Members only page</h1> 
    <p>Exclusive content for members only</p>
    <?php
        session_start();
        if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
            // User is authenticated
            echo 'Welcome ' . $_SESSION['username'];
            echo '<p>Members ONLY content </p>';
            echo '<p>Please click <a href=\'logout.php\'>here</a> to log out</p>';

            require '../HTML/elevatorNetworkForm.html';          // Insert to database form 

            // Get data from database
            // Connect to $db
            $db = new PDO(
                'mysql:host=127.0.0.1;dbname=elevator',     // Database name
                'michaelG',                                 // username
                'myPassword'                                // Password
            );
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $submitted = !empty($_POST);                    // You may want to prevent form resubmission           
            if($submitted) {
                //echo "You submitted the form<br/>"; 
                // INSERT shown here (you can use a different string query for DELETE and UPDATE)
                $query = 'INSERT INTO elevatorNetwork (date, time, status, currentFloor, requestedFloor, otherInfo) 
                         VALUES(:date, :time, :status, :currentFloor, :requestedFloor, :otherInfo)';
                
                $statement = $db->prepare($query); 
                $curr_date_query = $db->query('SELECT CURRENT_DATE()'); 
                $curr_date = $curr_date_query->fetch(PDO::FETCH_ASSOC); 
                $curr_date_time = $db->query('SELECT CURRENT_TIME()'); 
                $curr_time = $curr_date_time->fetch(PDO::FETCH_ASSOC); 
                $status = $_POST['status'];
                $currentFloor = $_POST['currentFloor'];
                $requestedFloor = $_POST['requestedFloor'];
                $otherInfo = $_POST['otherInfo'];

                $params = [
                    'date' => $curr_date['CURRENT_DATE()'],
                    'time' => $curr_time['CURRENT_TIME()'], 
                    'status' => $status,
                    'currentFloor' => $currentFloor,
                    'requestedFloor' => $requestedFloor, 
                    'otherInfo' => $otherInfo
                ];
                $result = $statement->execute($params);
            }
            
            echo "<h3>Entire content of the elevatorNetwork table</h3>";
            $query2 = 'SELECT * FROM elevatorNetwork GROUP BY nodeID ORDER BY nodeID'; 
            $rows = $db->query($query2); 
            echo "DATE  |   TIME    |   NODEID  |   STATUS  |   CURRENTFLOOR    |   REQUESTED FLOOR     |   OTHERINFO <br/>";
            foreach ($rows as $row) { 
                echo $row['date'] . " | " . $row['time'] . " | " . $row['nodeID'] . " | " . $row['status'] . " | " . $row['currentFloor'] 
                                  . " | " . $row['requestedFloor'] . " | " . $row['otherInfo'];
                echo '<br/>';
            }       

        } else {
            // User not authenticated
            echo 'You are not authenticated - go away!'; 
        }

    ?>


</body>
</html>