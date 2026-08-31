<?php
	
//Define the User class
class User {

	//Private properties inside User class
	private $Name;
	private $City;
	private $State;
	private $Temperature;
	private $todayDate;

	//Construct the public class
	public function __construct($Name, $City, $State, $Temperature, $todayDate) {
		
		$this->Name = $Name;
		$this->City = $City;
		$this->State = $State;
		$this->Temperature = $Temperature;
		$this->todayDate = $todayDate;
	}

	public function printUser() {

		//Prints the values of User class
		echo "Name: " . $this->Name . "<br>";
		echo "City: " . $this->City . "<br>";
		echo "State: " . $this->State . "<br>";
		echo "Temperature: " . $this->Temperature . "<br>";
		echo "Today's Date: " . $this->todayDate . "<br>";

	}
} 

//Creating two distinct User objects
$user1 = new User("Jacob", "Rockville", "Maryland", "79F", "August 24th, 2026");
$user2 = new User("Wilma", "Leesburg", "Virginia", "76F", "August 24th, 2026");


//Prints the User data
$user1->printUser();
echo "<br>";
$user2->printUser();


