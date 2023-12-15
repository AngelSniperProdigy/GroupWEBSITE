<?php
include "./data.php";

$selectedCourseName = ($_GET['course'] ?? '');
$moduleName = $_GET['module'] ?? '';
$lessonNumber = $_GET['lesson'] ?? 1;

$selectedCourse = null;
$selectedModule = null;

foreach ($courses as $course) {
    if ($course['name'] === $selectedCourseName) {
        $selectedCourse = $course;
        break; // Exit the loop once the course is found
    }
}

if ($selectedCourse == null) {
    die("Course not found.");
}

foreach ($selectedCourse['modules'] as $module) {
    if ($module['name'] === $moduleName) {
        $selectedModule = $module;
        break; // Exit the loop once the course is found
    }
}

if ($selectedModule == null) {
    die("Module not found");
}

$lessonCount = count($selectedModule['lessons']);
$lastLesson = $lessonNumber == $lessonCount;
$prevLesson = max(1, $lessonNumber - 1);
$nextLesson = min($lessonCount, $lessonNumber + 1);
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

        .navigation {
            margin-top: 3rem;
            width: 100%;
            display: flex;
            gap: 3rem;
            justify-content: space-between;
        }

        .right {
            margin-left: auto;
        }

        .done {
            background-color: #5271ff;
            border-color: #5271ff;
            color: #fff;
        }

        .done:hover {
            opacity: 0.89;
        }
    </style>
</head>

<body>
    <?php include "../header.php"; ?>

    <main class="main">
        <h1>
            <?php echo $selectedModule['lessons'][$lessonNumber - 1]['title'] ?>
        </h1>
        <section>
            <?php echo $selectedModule['lessons'][$lessonNumber - 1]['lesson'] ?>

        </section>

        <div class="navigation">
            <?php if ($lessonNumber > 1): ?>
                <a class="btn"
                    href="lesson.php?course=<?php echo urlencode($selectedCourseName); ?>&module=<?php echo urlencode($moduleName); ?>&lesson=<?php echo $prevLesson; ?>">Previous
                    Lesson</a>
            <?php endif; ?>

            <?php if (!$lastLesson): ?>
                <?php if ($lessonNumber < $lessonCount): ?>
                    <a class="btn right"
                        href="lesson.php?course=<?php echo urlencode($selectedCourseName); ?>&module=<?php echo urlencode($moduleName); ?>&lesson=<?php echo $nextLesson; ?>">Next
                        Lesson</a>
                <?php endif; ?>
            <?php else: ?>
                <a class="btn right done"
                    href="course.php?course=<?php echo urlencode($selectedCourseName); ?>&completed=true">Complete
                    Course</a>
            <?php endif; ?>
        </div>
    </main>

</body>

</html>