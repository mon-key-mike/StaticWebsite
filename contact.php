<!-- contact.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Contact MonkeyMike</title>
</head>

<body>
    <header>
        <h1>Contact MonkeyMike</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="travel.html">Travel</a></li>
            <li><a href="computers.html">Computers</a></li>
            <li><a href="festivals.html">Festival Life</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <section id="contact">
        <h2>Get in Touch with MonkeyMike</h2>

        <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];

            // Simple email sending (modify as needed)
            $to = "your@email.com"; // Replace with your email address
            $subject = "New Contact Form Submission";
            $headers = "From: $email";

            // Send email
            mail($to, $subject, $message, $headers);

            echo "<p>Thank you, $name! Your message has been sent.</p>";
        } else {
            // Display the form
            ?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="name">Name:</label>
                <input type="text" name="name" required>

                <label for="email">Email:</label>
                <input type="email" name="email" required>

                <label for="message">Message:</label>
                <textarea name="message" required></textarea>

                <input type="submit" value="Send Message">
            </form>
            <?php
        }
        ?>
    </section>

    <footer>
        <p>&copy; 2023 MonkeyMike's Adventures</p>
    </footer>
</body>

</html>
