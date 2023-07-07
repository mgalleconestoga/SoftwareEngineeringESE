/* Connector/C++ Test example 1 */

/* Standard C++ includes */
#include <stdlib.h>
#include <iostream>
#include "mysql_connection.h"
#include <cppconn/driver.h>
#include <cppconn/exception.h>
#include <cppconn/resultset.h>
#include <cppconn/statement.h>
#include <valarray>

using namespace std; 

int main(void) {
    cout<< "Running 'SELECT 'Hello World!' AS _message' ... " << endl;
    
    sql::Driver *driver;        // Create pointer to MySQL driver object
    sql::Connection *con;       // Create pointer to database connection object
    sql::Statement *stmt;       // Create pointer to statement object to hold statements
    sql::ResultSet *res;        // Create pointer to ResultSet object to hold results
    
    /* Create a connection */
    driver = get_driver_instance();
    con = driver->connect("tcp://127.0.0.1:3306", "michael", "ese"); // May need to change to include password for root account
    con->setSchema("test");   // MySQL database to connect to (make sure it exists > CREATE SCHEMA test; )   
    
    /* Execute a Query and wait for result */
    stmt = con->createStatement();
    res = stmt->executeQuery("SELECT 'Hello World!' AS _message");  // message query
    while(res->next()){              
        cout << "\t.. MySQL replies: ";
        cout << res->getString("_message")<< endl;
        
    }
    
    /* Clean up pointers and end */
    delete res;
    delete stmt;
    delete con;
    return 0;
}

