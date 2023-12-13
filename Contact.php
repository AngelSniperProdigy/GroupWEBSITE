<!DOCTYPE html>

<html lang="en">

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Contact Page </title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="StyleSheet3.css">
</head>

<body>
    <div class="container">
        <?php include "./header.php" ?>
        <h1>Contact Us</h1>
        <p>Feel free to contact us and we will get back to you as soon as we can</p>
        <form action="mail.php" method="POST">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject">
            <label for="message">Message</label>
            <textarea nome="message" cols="30" rows="10">  </textarea>
            <input type="submit" value="Send">

        </form>
    </div>
</body>

</html>