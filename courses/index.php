<?php
include "./data.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>courses</title>
    <link rel="stylesheet" href="../courses.css" />
</head>

<body>
    <?php include "../header.php"; ?>
    <main class="main">
        <h1 id="page-title">Courses</h1>
        <p class="page-details">
            Unleash your imagination and embark on a journey of creative exploration with our Creative Writing courses.
            Whether you aspire to craft gripping fiction, compelling non-fiction, or expressive poetry, our courses are
            designed to ignite your passion for storytelling. Learn from seasoned writers, benefit from personalized
            feedback, and join a community of like-minded individuals. Transform your ideas into captivating narratives.
            Start your creative writing adventure with us today!
        </p>
        <p class="page-details">
            Step into the world of creative writing where every word you write brings your thoughts and emotions to
            life. Our courses in Fiction, Non-Fiction, and Poetry provide a nurturing environment for writers of all
            levels. Enhance your writing skills, learn new techniques, and express yourself in ways you've never
            imagined. Whether you're a budding writer or looking to polish your craft, our courses are tailored to help
            you achieve your writing goals. Join us and let your creative journey begin!
        </p>
        <div class="row">
            <?php foreach ($courses as $course): ?>
                <div class="course-col" data-course="fiction">
                    <h3>
                        <?php echo $course['name'] ?>
                    </h3>
                    <p>
                        <?php echo $course['description'] ?>
                    </p>
                    <button class="view-more" data-course="course-<?php echo $course['id']; ?>">More Info</button>
                    <div class="course-details" id="course-<?php echo $course['id'] ?>">
                        <div class="course-name">
                            <?php echo $course['name'] ?>
                        </div>
                        <div class="course-info">
                            <span>
                                <?php echo $course['lecturer']; ?>
                            </span>
                            <span>
                                <?php echo $course['date']; ?>
                            </span>
                        </div>
                        <div class="description">
                            <?php echo $course['description']; ?>
                        </div>
                        <ul class="modules">
                            <?php foreach ($course['modules'] as $module): ?>
                                <li>
                                    <?php echo $module['name']; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <a class="navigate"
                            href="/group_3/courses/course.php?course=<?php echo urlencode($course['name']); ?>">Start
                            Course</a>
                    </div>
                </div>

            <?php endforeach; ?>

    </main>
    <script>
        window.onload = function () {
            [...document.querySelectorAll('.view-more')].forEach((button) => {
                button.addEventListener("click", function (e) {
                    const courseDetails = document.getElementById(button.dataset.course);
                    courseDetails.classList.toggle('visible');
                });
            });


        }
    </script>
</body>

</html>