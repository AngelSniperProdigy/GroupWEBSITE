<?php
include "./data.php";

$courseCompleted = isset($_GET['completed']) && ($_GET['completed'] == true);
$selectedCourseName = ($_GET['course'] ?? '');
$selectedCourse = null;

foreach ($courses as $course) {
    if ($course['name'] === $selectedCourseName) {
        $selectedCourse = $course;
        break; // Exit the loop once the course is found
    }
}

if ($selectedCourse == null) {
    die("Course not found.");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>courses</title>
    <link rel="stylesheet" href="../courses.css" />
    <link rel="stylesheet" href="../button.css" />
    <style>
        .main {
            margin: 2rem 6%;
        }

        .done {
            color: green;
        }
    </style>
</head>

<body>
    <?php include "../header.php"; ?>

    <!-- List modules for course -->
    <main class="main">

        <h1>Modules for
            <?php echo $selectedCourseName; ?>
            <?php if ($courseCompleted): ?>
                <small class="done">( Course Completed )</small>
            <?php endif ?>
        </h1>
        <p>
            <?php echo $selectedCourse['description']; ?>
        </p>
        <ol>
            <?php foreach ($selectedCourse['modules'] as $module): ?>
                <li>
                    <h4>
                        <?php echo ($module['name']); ?>
                    </h4>

                    <p>
                        <?php echo $module['description'] ?>
                    </p>
                    <?php if (!$courseCompleted): ?>
                        <a class="btn hover-effect"
                            href="/group_3/courses/lesson.php?course=<?php echo urlencode($selectedCourseName); ?>&module=<?php echo urlencode($module['name']); ?>&lesson=1">
                            Attempt Module
                        </a>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ol>
    </main>
</body>

</html>