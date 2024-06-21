<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Arisu.css">
</head>
<body>
   <div class="container">
    <h1>Contact us</h1>
    <p>Feel free to Contact us and we will get back to you as soon as possible.</p>
    <form action="https://api.web3forms.com/submit" method="POST">
        <input type="hidden" name="access_key" value="a86d26cd-5a8f-4029-8134-6cd1f7b3b780">
        <label for="name">Name</label>
        <input type=" text" name="name" id="name" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject">
        <label for="message">Message</label>
        <textarea name="message" ></textarea>
        <input type="submit" value="Send" required>
    </form>
   </div>
</body>
</html>