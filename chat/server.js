const express = require ('express');
const path = require('path');
const mysql = require('mysql');
const app = express();
const server = require('http').createServer(app);
const io = require('socket.io')(server);
const cors = require('cors');

app.use(cors());

app.get('/resources/views/chat.blade.php', function (req, res){
    res.send(messages);
});

let messages = [];


io.on('connection', socket => { 
    
    console.log('Socket conectado: $(socket.id)') ;
    
    socket.emit('previousMessages', messages);
        
    socket.on('sendMessage', data => {
        messages.push(data);
        socket.broadcast.emit('receivedMessage', data);
                
        const db = mysql.createConnection({
            host : 'localhost',
            user : 'root',
            password : '',
            database : 'pitds'
        });
        
        db.connect((err) => {
            if(err){
                throw err;
            }
            console.log('Mysql conectado');
            console.log(messages);
            db.query("INSERT into Postagem (idPostagem, mensagem,reacao) VALUES(' DEFAULT ' , '" + data.message + "', 'Emoji')" , function (error, results, fields) {
                if (error) throw error;
            });
           })

          });
         });
        

server.listen(3000);