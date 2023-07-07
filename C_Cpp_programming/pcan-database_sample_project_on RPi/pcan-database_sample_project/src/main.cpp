/* main.cpp - Mainline code that calls the menus/submenus, database read/write functions and CAN read/write functions
 *			  NOTE: This code will only run on the Raspberry Pi where the PCAN library is installed and a PCAN USB device is connected.
 *					This code is provided here to discuss/describe functionality during the lecture 
 *	
 * Author: Michael Galle
 * 
 */

#include "../include/pcanFunctions.h"			// Only works on Raspberry Pi where the PCAN library is installed
#include "../include/databaseFunctions.h"		// Database functions (wrappers) for Connector C++ library functions		
#include "../include/mainFunctions.h"			// Menu selection functions

#include <stdio.h>
#include <stdlib.h>
#include <unistd.h> 
#include <iostream>

using namespace std;


// ******************************************************************

int main() {

	int choice; 
	int ID; 
	int data; 
	int numRx;
	int floorNumber = 1, prev_floorNumber = 1;

	while(1) {
		system("@cls||clear");
		choice = menu(); 
		switch (choice) {
			case 1: 
				ID = chooseID();		// user to select ID depending on intended recipient
				data = chooseMsg();		// user to select message data
				pcanTx(ID, data);		// transmit ID and data 
				db_setFloorNum(FloorFromHex(data)); 		// change floor number in database ** NEW **
				break; 
				
			case 2:
				printf("\nHow many messages to receive? ");
				scanf("%d", &numRx);
				pcanRx(numRx);
				break;
				
			case 3:
				printf("\nNow listening to commands from the website - press ctrl-z to cancel\n");
				// Synchronize elevator db and CAN (start at 1st floor)
				pcanTx(ID_SC_TO_EC, GO_TO_FLOOR1);
				db_setFloorNum(1);
				
				while(1){			
					floorNumber = db_getFloorNum();
					if (prev_floorNumber != floorNumber) {								// If floor number changes in database
						pcanTx(ID_SC_TO_EC, HexFromFloor(floorNumber));					// change floor number in elevator - send command over CAN
					}
					prev_floorNumber = floorNumber; 
					sleep(1);															// poll database once every second to check for change in floor number
				}
				break;
				
			case 4: 
				return(0);
			
			default:
				printf("Error on input values");
				sleep(3);
				break;
		}
		sleep(1);					// delay between send/receive
	}
	
	return(0);
}






	
