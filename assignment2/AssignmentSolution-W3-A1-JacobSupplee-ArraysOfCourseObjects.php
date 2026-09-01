<?php

//Establishing the course class with private variables
class Course {
    private $courseCode;
    private $courseTitle;
    private $creditHours;

    //Constructor to initialize private attributes
    public function __construct($courseCode, $courseTitle, $creditHours) {
        $this->courseCode = $courseCode;
        $this->courseTitle = $courseTitle;
        $this->creditHours = $creditHours;
    }

    //Function to print each Course's information
    public function printCourse() {
        echo "Course Code: " . $this->courseCode . "<br>";
        echo "Course Title: " . $this->courseTitle . "<br>";
        echo "Credit Hours: " . $this->creditHours . "<br>";
    }

    //Funtion to retrieve the course code for CMSC 115 prompt
    public function getCourseCode() {
        return $this->courseCode;
    }
}
//My personalized array
$arrayOfCourseObjects = array(
    new Course("CMIT 265", "Fundamentals of Networking", 3),
    new Course("CMSC 105", "Intro to Problem Solving and Algorithm Design", 3),
    new Course("PACE 111T", "Program & Career Exploration in Technology", 3),
    new Course("CSC 205", "Computer Organization", 3),
    new Course("GOL 106", "Historical Geology", 4),
    new Course("GOL 105", "Physical Geology", 4),
    new Course("CSC 223", "Data Structures & Analysis of Algorithms", 4),
    new Course("CSC 222", "Object Oriented Programming", 4),
    new Course("MTH 264", "Calculus II", 4),
    new Course("MTH 288", "Discrete Mathematics", 3),
    new Course("MTH 263", "Calculus I", 4)
);

//Printing total number of Course objects in the array
echo "The number of UMGC/Transfer courses I took over the last 3 terms = " . count($arrayOfCourseObjects) . "<br><br>";

//Iterating through my Course objects and incrementing the index
foreach ($arrayOfCourseObjects as $index => $course) {
    echo "Course #" . ($index + 1) . " Information:<br>";
    $course->printCourse();
    echo "<br>";
}

//Looping through array, checking for CMSC 115
$cmsc115Taken = false;
foreach ($arrayOfCourseObjects as $course) {
    if ($course->getCourseCode() === "CMSC 115") {
        $cmsc115Taken = true;
        break;
    }
}

//Printing the CMSC 115 answer
if ($cmsc115Taken) {
    echo "Yes, I have taken the CMSC 115 course.";
} else {
    echo "No, I have not taken the CMSC 115 course.";
}

?>