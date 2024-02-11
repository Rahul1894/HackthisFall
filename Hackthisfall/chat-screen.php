
<?php
try{
    include "server/conn.php";
    include "auth.php";
    include "noclientauth.php";
    $pid = $_GET['Pid'];
    $uid = $_COOKIE['id'];
    $sql = "SELECT * from posts where `Pid`='$pid'";
    $result = mysqli_query($conn,$sql);
    $chatname = mysqli_fetch_array($result);
    $chatname = $chatname['name'];
    //get chats
    $sql = "SELECT * from `post_chat` where Pid='$pid' and `Uid`='$uid' ORDER BY `PCid` DESC LIMIT 5 ";
    $result = mysqli_query($conn,$sql); 
}catch(Exception $e){
    echo $e->getMessage();
    die();
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iForum Chat</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            display: flex;
            width: 50%;
            height: 85%;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .chat-screen {
            flex: 2;
            background-color: #ededed;
            border-left: 1px solid #ccc;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .chat-header {
            background-color: #075e54;
            color: #fff;
            padding: 15px;
            text-align: center;
            font-size: 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .chat-header h2 {
            margin: 0;
        }

        .back-btn, .chatbot-btn {
            padding: 10px;
            background-color: #075e54;
            color: #fff;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 16px;
        }

        .back-btn:hover, .chatbot-btn:hover {
            background-color: #064e44;
        }

        .chat-messages {
            flex: 1;
            overflow-y: auto;
            padding: 10px;
        }

        .message {
            background-color: #fff;
            padding: 8px;
            margin: 10px;
            border-radius: 8px;
            font-size: 14px;
            /* max-width: 30%; */
            word-wrap: break-word;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: flex-start;
            border: 1px solid #ccc;
        }

        .own-message {
            background-color: #dcf8c6;
            align-self: flex-end;
        }

        .other-message {
            background-color: #fff;
            align-self: flex-start;
        }

        .message-text {
            margin: 0;
            margin-left: 20px;
            font-size: 20px; 
        }

        .message-info {
            color: #888;
            font-size: 20px;
            padding-left: 20px;
        }
        
        .message-info img {
            width: 100px;
            height: 20px;
            border-radius: 50%;
            margin-right: 15px;
            margin-left: 15px;
        }

        .date-separator {
            text-align: center;
            margin: 10px 0;
            color: #888;
        }

        .date-separator hr {
            border: none;
            border-top: 1px solid #ccc;
            margin: 5px auto;
            width: 80%;
        }

        .chat-input-container {
            display: flex;
            align-items: center;
            padding-left: 30px;
            background-color: #fff;
            border-top: 1px solid #ccc;
            font-size: 25px;
        }

        .chat-input {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 20px;
            margin-right: 10px;
            font-size: 25px;
            outline: none;
        }

        .send-message-btn {
            padding: 10px 20px;
            background-color: #075e54;
            color: #fff;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 15px;
        }

        .send-message-btn:hover {
            background-color: #064e44;
        }
        .chat-item img {
            width: 40px; 
            height: 40px; 
            border-radius: 5%;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="chat-screen">
            <div class="chat-header">
                <!-- Back arrow button added -->
                <button class="back-btn" onclick="goBack()">Back</button>
                <!-- Chatbot button added -->
                <button class="chatbot-btn" onclick="talkToChatbot()">Chatbot</button>
                <h2>Chat Screen</h2>
            </div>
            <div class="chat-messages" id="chat-messages">
                <!-- Chat messages will be displayed here -->
                <?php
                $n = mysqli_num_rows($result);
                // echo $n;
                    for($i=0;$i<$n;$i++){
                        $row = mysqli_fetch_assoc($result);
                        print_r($row);
                    }
                ?>
            </div>
            <div class="chat-input-container">
                <input type="text" class="chat-input" id="chat-input" placeholder="Type your message...">
                <button class="send-message-btn" id="send-message-btn">Send</button>
            </div>
        </div>
    </div>
    <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
    <script>
        function goBack() {
            window.history.back();
        }

        function addMessage(message, sender, time) {
    const chatMessages = document.getElementById('chat-messages');
    const currentDate = new Date();
    const messageDate = currentDate.toDateString();
    const lastMessageDate = chatMessages.dataset.lastMessageDate;

    if (lastMessageDate !== messageDate) {
        const dateSeparator = document.createElement('div');
        dateSeparator.classList.add('date-separator');
        dateSeparator.innerHTML = messageDate;
        dateSeparator.innerHTML += '<hr>';
        chatMessages.appendChild(dateSeparator);
        chatMessages.dataset.lastMessageDate = messageDate;
    }

    const messageDiv = document.createElement('div');
    messageDiv.classList.add('message');
    messageDiv.classList.add(sender === 'own' ? 'own-message' : 'other-message');

    // Profile picture
    const profilePicImg = document.createElement('img');
    profilePicImg.src = 'logo.jpg';
    profilePicImg.alt = 'Profile Pic';
    profilePicImg.width = 50;
    profilePicImg.height = 50;
    messageDiv.appendChild(profilePicImg);

    // Message content
    const messageContent = document.createElement('div');
    messageContent.classList.add('message-content');
    const messageText = document.createElement('p');
    messageText.classList.add('message-text');
    messageText.textContent = message;
    messageContent.appendChild(messageText);

    // Message info (time)
    const messageInfo = document.createElement('div');
    messageInfo.classList.add('message-info');
    const timeText = document.createElement('span');
    timeText.textContent = time;
    messageInfo.appendChild(timeText);

    messageContent.appendChild(messageInfo);
    messageDiv.appendChild(messageContent);
    chatMessages.appendChild(messageDiv);

    // Scroll to the bottom of the chat
    chatMessages.scrollTop = chatMessages.scrollHeight;
}


        // Function to initialize chat
        function initializeChat() {
            const chatInput = document.getElementById('chat-input');
            const sendMessageBtn = document.getElementById('send-message-btn');
            const emojiPicker = document.getElementById('emoji-picker');

            // Event listener for sending a message
            function sendMessage() {
                const message = chatInput.value.trim();
                if (message !== '') {
                    // For demonstration purposes, we're using placeholder data
                    addMessage(message, 'own', new Date().toLocaleTimeString());
                    // $.post('http://localhost:5000/ask',{prompt:message},(data,sts)=>{
                    //     console.log(data)
                    //     // addMessage(data.response, 'own', new Date().toLocaleTimeString())
                    // },"application/json")
                    
                    $.ajax({
                    url: 'http://localhost:5000/ask',
                    type: 'POST',
                    data: JSON.stringify({prompt:message,type:'lobn'}),
                    contentType: 'application/json',
                    success: function(data) {
                        // Handle the response
                        console.log(data)
                        addMessage(data.response, 'AI Bot', new Date().toLocaleTimeString())
                    }
                    });
                    chatInput.value = ''; // Clear input field
                }
            }

            sendMessageBtn.addEventListener('click', sendMessage);

            // Add event listener for Enter key press
            chatInput.addEventListener('keyup', function(event) {
                if (event.keyCode === 13) {
                    sendMessage();
                }
            });

            // Add event listener for emoji click
            emojiPicker.addEventListener('click', (event) => {
                if (event.target.tagName === 'IMG') {
                    const emoji = event.target.getAttribute('data-emoji');
                    chatInput.value += emoji;
                }
            });
        }

        // Function to handle chatbot button click
        function talkToChatbot() {
            // Here you can define what happens when the chatbot button is clicked
            // For example, you could trigger a conversation with the chatbot
            // or navigate to a different page where the chatbot interface is located
            console.log('Chatbot button clicked');
        }

        initializeChat();
    </script>
</body>
</html>