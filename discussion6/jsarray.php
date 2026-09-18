<!DOCTYPE html>

<html>
<head>
    <title>Discussion 6 - JavaScript Arrays</title>
    <link rel="stylesheet" href="../design.css">
</head>

<body>

    <div class="container">

        <header>
            <h1>Discussion 6: JavaScript Arrays</h1>
            <p>Storing and Retrieving Course Information</p>
        </header>

        <section>
            <h2>JavaScript Associative Array</h2>

            <div id="associativeArray"></div>
        </section>

        <section>
            <h2>JavaScript Array of Course Objects</h2>

            <div id="courseObjects"></div>
        </section>

        <footer>
            CMSC 340 · Web Programming
        </footer>

    </div>

    <script>

    //Stores each course as a key; credit hours are the values.
    const courses = {
        "CSC223": 4,
        "CSC222": 4,
        "MTH264": 4,
        "MTH288": 3,
        "MTH263": 4,
        "CSC205": 3,
        "GOL106": 4,
        "GOL105": 4,
        "CMIT265": 3,
        "CMSC105": 3,
        "PACE111T": 3
    };

    //initialize credit hours counter.
    let totalCredits = 0;

    //loops through associative array, displaying course code and credit hours.
    for (let courseCode in courses) {
        document.getElementById("associativeArray").innerHTML +=
            courseCode + " : " + courses[courseCode] + "<br>";
        
        //increments credit hours counter.
        totalCredits += courses[courseCode];
    }

    //Displays totalCredits calculation
    document.getElementById("associativeArray").innerHTML +=
        "<br>Total credit hours over the last 3 terms = " + totalCredits;

    //Defines course class with courseCode and creditHours
    class Course {
        constructor(courseCode, creditHours) {
        this.courseCode = courseCode;
        this.creditHours = creditHours;
        }
    }

    //Array of Course objects
    const courseObjArray = [
        new Course("CSC223", 4),
        new Course("CSC222", 4),
        new Course("MTH264", 4),
        new Course("MTH288", 3),
        new Course("MTH263", 4),
        new Course("CSC205", 3),
        new Course("GOL106", 4),
        new Course("GOL105", 4),
        new Course("CMIT265", 3),
        new Course("CMSC105", 3),
        new Course("PACE111T", 3)
    ];

    //Initializes another counter for total credits
    let totalObjCredits = 0;

    //loops through the object array, displaying course code and credit hours
    for (let course of courseObjArray) {
        document.getElementById("courseObjects").innerHTML +=
            course.courseCode + ", " + course.creditHours + "<br>";

        totalObjCredits+= course.creditHours;
    }

    //displays the calculated total credit hours 
    document.getElementById("courseObjects").innerHTML +=
    "<br>Total credit hours over the last 3 terms = " + totalObjCredits;

    </script>

</body>
</html>