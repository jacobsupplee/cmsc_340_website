<!DOCTYPE html>
<html>
<head>
    <title>Transcript Generator</title>
</head>

<body>

    <h1>Transcript Generator</h1>

    <?php

//Creation of an associative array with course codes and credit hours

$associativeCourses = array(
    "CSC 223" => 4,
    "CSC 222" => 4,
    "MTH 264" => 4,
    "MTH 288" => 3,
    "MTH 263" => 4,
    "CSC 205" => 3,
    "GOL 106" => 4,
    "GOL 105" => 4,
    "CMIT 265" => 3,
    "CMSC 105" => 3,
    "PACE 111T" => 3
);

//Iterate over associativeCourses array and print information

$totalCredits = 0;

foreach ($associativeCourses as $courseCode => $creditHours) {
    $totalCredits += $creditHours;
    echo $courseCode . " => " . $creditHours . "<br>";
}

echo "Total credit hours over the last 3 terms = " . $totalCredits . "<br><br>";

//Creating the course class

class Course {
    public $courseCode;
    public $creditHours;

    public function __construct($courseCode, $creditHours) {
        $this->courseCode = $courseCode;
        $this->creditHours = $creditHours;
    }
}

$objectCourses = array(
    new Course("CSC 223", 4),
    new Course("CSC 222", 4),
    new Course("MTH 264", 4),
    new Course("MTH 288", 3),
    new Course("MTH 263", 4),
    new Course("CSC 205", 3),
    new Course("GOL 106", 4),
    new Course("GOL 105", 4),
    new Course("CMIT 265", 3),
    new Course("CMSC 105", 3),
    new Course("PACE 111T", 3)
);

//Iterate over the objectCourses array and print each Course

$objectTotalCredits = 0;

foreach ($objectCourses as $course) {
    echo $course->courseCode . ", " . $course->creditHours . "<br>";
    $objectTotalCredits += $course->creditHours;
}

echo "Total credit hours over the last 3 terms = " . $objectTotalCredits;
?>

</body>
</html>
