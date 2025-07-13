<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chat with MH Bot</title>
<style>
body {
  margin: 0;
  height: 100vh;
  font-family: Arial, sans-serif;
  background: radial-gradient(circle, #FFA500, #FFB6C1, #FF69B4);
  display: flex;
  justify-content: center;
  align-items: center;
  color: #4B014D;
}

.chat-container {
  background-color: rgba(255, 255, 255, 0.9);
  width: 90%;
  max-width: 400px;
  height: 500px;
  border-radius: 20px;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  box-shadow: 0 0 10px rgba(0,0,0,0.2);
}

.chat-header {
  background-color: #4B014D;
  color: white;
  text-align: center;
  padding: 10px;
  font-size: 1.2em;
}

.chat-messages {
  flex: 1;
  padding: 10px;
  overflow-y: auto;
  font-size: 0.95em;
}

.chat-messages p {
  margin: 5px 0;
}

.user {
  text-align: right;
  color: #6A1B9A;
}

.bot {
  text-align: left;
  color: #4B014D;
}

.chat-input {
  display: flex;
  border-top: 1px solid #ccc;
}

.chat-input input {
  flex: 1;
  border: none;
  padding: 10px;
  font-size: 1em;
  outline: none;
}

.chat-input button {
  background-color: #4B014D;
  color: white;
  border: none;
  padding: 0 20px;
  cursor: pointer;
}
</style>
</head>

<body>
<div class="chat-container">
  <div class="chat-header">💖 Chat with MH Bot</div>
  <div class="chat-messages" id="chat">
    <p class="bot">🌸 Hi Bestie! How are you feeling today?</p>
  </div>
  <div class="chat-input">
    <input type="text" id="userInput" placeholder="Type your message...">
    <button onclick="sendMessage()">Send</button>
  </div>
</div>

<script>
function sendMessage() {
  const input = document.getElementById("userInput");
  const chat = document.getElementById("chat");
  const message = input.value.trim();
  if (!message) return;

  // Add user's message
  const userMsg = document.createElement("p");
  userMsg.className = "user";
  userMsg.textContent = message;
  chat.appendChild(userMsg);

  // Simple bot response
  const botMsg = document.createElement("p");
  botMsg.className = "bot";
  setTimeout(() => {
    if (message.toLowerCase().includes("outfit") || message.toLowerCase().includes("wear")) {
      botMsg.textContent = "👗 I think something comfy and colorful would look great on you!";
    } else if (message.toLowerCase().includes("sad") || message.toLowerCase().includes("bad")) {
      botMsg.textContent = "💖 Oh no! I’m here for you. Want to talk more about it?";
    } else {
      botMsg.textContent = "😊 Thanks for sharing! Tell me more!";
    }
    chat.appendChild(botMsg);
    chat.scrollTop = chat.scrollHeight;
  }, 500);

  input.value = "";
  chat.scrollTop = chat.scrollHeight;
}
</script>

</body>
</html>
