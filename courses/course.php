<?php
$courses = [
    [
        'name' => 'Fiction Writing',
        'description' => 'Explore the art of creative writing with an emphasis on fiction. Develop your narrative skills and learn to craft compelling stories.',
        'date' => '2023-09-01',
        'lecturer' => 'Dr. Jane Smith',
        'id' => 101,
        'modules' => [
            'Introduction to Fiction',
            'Character Development',
            'Plot and Structure'
        ]
    ],
    [
        'name' => 'Non-Fiction Writing',
        'description' => 'Dive into the world of non-fiction writing. Learn techniques for research, fact-checking, and presenting real-world topics in an engaging manner.',
        'date' => '2023-10-15',
        'lecturer' => 'Prof. Alex Johnson',
        'id' => 102,
        'modules' => [
            'Basics of Non-Fiction',
            'Research Methods',
            'Writing and Editing Non-Fiction'
        ]
    ],
    [
        'name' => 'Poetry and Verse',
        'description' => 'Immerse yourself in the beauty of poetry. Study various forms and styles, from traditional sonnets to contemporary free verse, and hone your poetic voice.',
        'date' => '2023-11-05',
        'lecturer' => 'Ms. Emily Clarke',
        'id' => 103,
        'modules' => [
            'Poetry Fundamentals',
            'Styles and Forms of Poetry',
            'Contemporary Poetic Expression'
        ]
    ]
];

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

</body>

</html>