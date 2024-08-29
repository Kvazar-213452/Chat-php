document.getElementById('chat-form').addEventListener('submit', function (e) {
    e.preventDefault();

    let username = document.getElementById('username').value.trim();
    let message = document.getElementById('message').value.trim();

    if (username && message) {
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'chat.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (this.status === 200) {
                document.getElementById('message').value = ''; 
                loadMessages();
            }
        };
        xhr.send('username=' + encodeURIComponent(username) + '&message=' + encodeURIComponent(message));
    }
});

function loadMessages() {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'chat.php', true);
    xhr.onload = function () {
        if (this.status === 200) {
            document.getElementById('chat-box').innerHTML = this.responseText;
            document.getElementById('chat-box').scrollTop = document.getElementById('chat-box').scrollHeight;
        }
    };
    xhr.send();
}

setInterval(loadMessages, 3000);

window.onload = loadMessages;