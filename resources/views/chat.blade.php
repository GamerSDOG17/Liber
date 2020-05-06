@extends('layouts.app')

  @section('content')
  <title>{{ config('app.name', 'Liber') }}</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>
   
    <style>
     
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
 
  
  button {
    font-size: 14px;
    background: #069;
    text-align: center;
    line-height: 65px;
    font-weight: bold;
    color: #FFF;
    text-align: center;
    border: 1px solid black; 
    font-size:25px; 
    border-radius: 100%;
  }
  
  .messages {
    width: 95%;
    height: 400px;
    margin: 20px 0;
    border: 1px solid #ddd;
    padding: 20px;
  }
  #inputMessages{
    width: 50%;
    border: 1px solid black; 
    font-size:25px; "
    
  }
  
    </style>


    <form id="chat">
        <div style="text-align: left; " class="ml-4"><input style="border: 1px solid black; font-size:25px; width:370px;" id="username" name="username" placeholder="Digite seu usuário"></div>
        <div style="border: 1px solid black; font-size:25px; color:black;" class="overflow-auto messages ml-4 mr-5"></div>
        <input id="inputMessages" class="overflow-auto ml-4" cols="40" rows="5" type="textarea" name="message" placeholder="Digite sua mensagem" >
        <button type="submit" class="ml-3">Enviar</button>
    </form>
   
     <script type="text/javascript">
        const socket = io('http://localhost:3000');

        function renderMessage(message){
            $('.messages').append('<div class="message"><strong>'+ message.author + '</strong>: '+ message.message + '</div>')
        }

        socket.on('previousMessages', function(messages){
            for(message of messages){
                renderMessage(message);
            }
        })

        socket.on('receivedMessage', function(message){
            renderMessage(message);
        });

        $('#chat').submit(function(event){
            event.preventDefault();

            const author = $('input[name=username]').val();
            const message = $('input[name=message]').val();

            if(author.length && message.length){
                const messageObject = {
                    author: author,
                    message: message,
                };
                renderMessage(messageObject);
                socket.emit('sendMessage', messageObject); 
            }
        });
        </script>
        <script src="chat/server.js/socket.io/socket.io.js"></script>
        <script>
          const socket = io.connect('http://localhost:3000/chat/server.js');
          socket.on('previousMessages', (data) => {
            console.log(data);
            socket.emit('sendMessage', { my: 'data' });
          });
        </script>
   @endsection
