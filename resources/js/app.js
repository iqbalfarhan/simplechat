import "./bootstrap";

document.addEventListener("DOMContentLoaded", function () {
    var chatContainer = document.getElementById("chatContainer");
    if (chatContainer) {
        chatContainer.scrollTop = chatContainer.scrollHeight;
    }
});
