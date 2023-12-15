<?php
$selectedCourseName = ($_GET['course'] ?? '');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImangiNationInkCoursePayment</title>
    <link rel="stylesheet" href="StyleSheetPayment.css">
    <link rel="stylesheet" href="StyleSheet1.css">
    <link rel="stylesheet" href="stylesheet5.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;1&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://fontawesome.com/v4/icons/">
</head>

<body>
    <section class="header">
        <?php include "header.php" ?>
    </section>

    <section class="heading">
        <div>
            <h1>CoursePayment</h1>
            <form action="Paymentdone.php?course=<?php echo $selectedCourseName; ?>" method="post">
                <label for="course">Course:</label>
                <input type="text" id="course" name="course"
                    placeholder="<?php echo $selectedCourseName ?? 'Enter course name'; ?>"
                    value="<?php echo $selectedCourseName; ?>" required>
                <label for="card_number">Card Number:</label>
                <input type="text" id="card_number" name="card_number" placeholder="1234 5678 9012 3456" required>

                <label for="expiry_date">Expiry Date:</label>
                <input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YY" required>

                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" placeholder="123" required>

                <label for="amount">Amount:</label>
                <input type="text" id="amount" name="amount" placeholder="Enter amount" required>

                <button type="submit">Pay Now</button>
            </form>
        </div>
    </section>
</body>

</html>