 <?php
	/*
	$booksJson = file_get_contents(__DIR__ . '/json/books.json'); 
	$booksArray = json_decode($booksJson, true);
	foreach ($booksArray as $book) {
		echo "Title: " . $book["title"] . ", Author: ". $book["author"] . "<br />";
	} 
	*/
 ?>
 
<?php
	/*
	$booksJson = file_get_contents(__DIR__ . '/json/books.json'); 
	$booksArray = json_decode($booksJson, true);
	
	foreach ($booksArray as $key => $book) {
		$booksArray[$key]["title"] = $book["title"] . " - This is a great book!"; // EDIT TITLES
		// echo "New Title: " . $booksArray[$key]["title"] . "<br />";
	} 
	// Now save the changes back to the JSON file
	$booksJsonNew = json_encode($booksArray, true);
	file_put_contents(__DIR__ . '/json/booksNew.json', $booksJsonNew); 
	*/
 ?>
 
 <?php 
	// File I/O for CSV files 
	//mkdir(__DIR__ . "/csv");   							// run once 
	$my2DArray = [ [1,1,1], [2,2,2], [3,3,3], [4,4,4], [5,5,5] ];  
	$file = 'file.csv';
	$newFile = 'newFile.csv'; 
	
	$fp = fopen(__DIR__ . "/csv/" . $file, 'w'); 
	// Write the arrays line by line (each array takes up one line, all elements separated by commas)
	foreach ($my2DArray as $subArray) { 
		fputcsv($fp, $subArray); 		// format line as csv and write to location of file pointer
	}
	
	// Create a copy of file1.csv and call it newFile.csv
	if(!copy(__DIR__ . "/csv/" . $file, __DIR__ . "/csv/" . $newFile)) {
		echo "failed to copy $file ...";
	} 
	fclose($fp);
	
	// Get from newFile.csv line-by-line (parsing for CSV fields) and return an array containing the fields read
	$fpNew = fopen(__DIR__ . "/csv/" . $newFile, 'r+');   // Open newly created file for read/write
	$i = 0; 
	while (($Array = fgetcsv($fpNew)) !== false) {  	 // Read lines as csv and input to array	
		$myNew2DArray[$i] = $Array;
		if ($i === 1) {
				$myNew2DArray[$i][0] = 5000;			 // Modify this line in the CSV file
		}
		$i++;
	}  
	rewind($fpNew); 									// Rewind file pointer to begining
	// Write the arrays line by line to newFile (overwrite entire file)
	foreach ($myNew2DArray as $subArray) { 
		fputcsv($fpNew, $subArray); 		// format line as csv and write to location of file pointer
	}
	fclose($fpNew);
 ?>