<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Chat</title>
    <link rel="stylesheet" href="static/style.css">
</head>
<body>
    <p class="heder">Online Chat</p>
    <div class="chat-container">
        <div id="chat-box" class="chat-box"></div>
        <form id="chat-form" class="chat-form">
            <input type="text" id="username" placeholder="Your Name" required>
            <input type="text" id="message" placeholder="Type a message" required>
            <button type="submit">Send</button>
        </form>
    </div>
    <script src="static/main.js"></script>
</body>
</html>