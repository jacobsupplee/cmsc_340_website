<?php 
// CMSC 340: Develop a PHP Script to Create and Manipulate a PHP Array of Course Objects
//Jacob Supplee
//September 8th, 2026

//Database information
$host = "localhost"; 
$database = "cmsc340"; 
$username = "root"; 
$password = "mysql"; 

try { 
//Creates PDO connection to CMSC340 database
$pdo = new PDO( "mysql:host=$host;dbname=$database", $username, $password ); 
//Allows PDO to detect errors
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Catches and handles errors
} catch (PDOException $e) { die("Database connection failed!: " . $e->getMessage());
} 
//Adds new course to mycourses table
if (isset($_POST['add_course'])) {
    $courseCode = $_POST['course_code'];
    $courseTitle = $_POST['course_title'];
    $creditHours = $_POST['course_credit_hours'];

    //Prepares SQL statement to insert course information
    $sql = "INSERT INTO mycourses 
            (course_code, course_title, course_credit_hours)
            VALUES (:course_code, :course_title, :course_credit_hours)";

    $statement = $pdo->prepare($sql);

    //Executes SQL statement with form data
    $statement->execute([
        ':course_code' => $courseCode,
        ':course_title' => $courseTitle,
        ':course_credit_hours' => $creditHours
    ]);
}

//Retrieves all courses from mycourses table
$sql = "SELECT course_code, course_title, course_credit_hours
        FROM mycourses";

$statement = $pdo->query($sql);
$courses = $statement->fetchAll();


?>
<!DOCTYPE html>

<!-- Sets the browser tab title -->
<html> <head> <title>My UMGC Courses</title> </head>

<body>
<!-- Displays the main heading for the page -->
<h1>My UMGC Courses</h1>

<!-- Creates form for entering new course info -->
<form method="post">

    <label for="course_code">Course Code:</label>
    <input type="text" id="course_code" name="course_code">

    <br><br>

    <label for="course_title">Course Title:</label>
    <input type="text" id="course_title" name="course_title">

    <br><br>

    <label for="course_credit_hours">Course Credit Hours:</label>
    <input type="number" id="course_credit_hours" name="course_credit_hours">

    <br><br>

        <!-- Button to submit form and add course to databse -->
    <input type="submit" name="add_course" value="Add">

</form>

<h2>My Courses</h2>

<!-- Creates a table to display all of the courses stored in the database -->
<table border="1">

    <tr>
        <th>Course Code</th>
        <th>Course Title</th>
        <th>Course Credit Hours</th>
    </tr>

    
    <!-- Loops thru each course retrieved from database -->
    <?php foreach ($courses as $course) { ?>
        
          <!-- Creates a table row for the current course of the loop iteration -->
        <tr>
            <td><?php echo $course['course_code']; ?></td>
            <td><?php echo $course['course_title']; ?></td>
            <td><?php echo $course['course_credit_hours']; ?></td>
        </tr>
<?php } ?>

</table>

<?php

//Calculates the total credit hours
$totalCreditHours = 0;

foreach ($courses as $course) {
    $totalCreditHours += $course['course_credit_hours'];
}

?>

<p>
    Total credit hours of my UMGC courses over the last 3 terms =
    <?php echo $totalCreditHours; ?>
</p>

</body> </html>
